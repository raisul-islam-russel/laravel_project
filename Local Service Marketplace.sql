-- Create Database
CREATE DATABASE projectlaravel;
USE projectlaravel;

-- Default Users Table (Only Admins)
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone_number VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL DEFAULT '$2y$10$hGZc9W0G/XOqfbM1jGgCiuWtAnF7qWmCq53iTNL4OUdY93ANlD8lW', -- Hashed '12345678'
    role ENUM('admin') NOT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    remember_token VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
);

-- Customers Table
CREATE TABLE customers (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone_number VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL DEFAULT '$2y$10$hGZc9W0G/XOqfbM1jGgCiuWtAnF7qWmCq53iTNL4OUdY93ANlD8lW', 
    address TEXT DEFAULT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    remember_token VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
);

-- Providers Table
CREATE TABLE providers (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone_number VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL DEFAULT '$2y$10$hGZc9W0G/XOqfbM1jGgCiuWtAnF7qWmCq53iTNL4OUdY93ANlD8lW',
    business_name VARCHAR(255) NOT NULL,
    address TEXT DEFAULT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    remember_token VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
);

-- Business Hours Table
CREATE TABLE business_hours (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    provider_id BIGINT UNSIGNED NOT NULL,
    day_of_week ENUM('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday') NOT NULL,
    open_time TIME NOT NULL,
    close_time TIME NOT NULL,
    is_closed BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Service Categories Table
CREATE TABLE categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    image_url VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Services Table
CREATE TABLE services (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_id BIGINT UNSIGNED NOT NULL,
    provider_id BIGINT UNSIGNED NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price FLOAT NOT NULL,
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Service Images Table
CREATE TABLE service_images (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    service_id BIGINT UNSIGNED NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Service Details Table
CREATE TABLE service_details (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    service_id BIGINT UNSIGNED NOT NULL,
    key_name VARCHAR(255) NOT NULL,
    value_text TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Bookings Table (Invoice-Level Booking)
CREATE TABLE bookings (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customer_id BIGINT UNSIGNED NOT NULL,
    total_price FLOAT NOT NULL,
    status ENUM('pending', 'accepted', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    payment_status ENUM('pending', 'paid', 'failed') NOT NULL DEFAULT 'pending',
    scheduled_time DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Booking Details Table
CREATE TABLE booking_details (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking_id BIGINT UNSIGNED NOT NULL,
    service_id BIGINT UNSIGNED NOT NULL,
    provider_id BIGINT UNSIGNED NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    price FLOAT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Reviews Table
CREATE TABLE reviews (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customer_id BIGINT UNSIGNED NOT NULL,
    service_id BIGINT UNSIGNED NOT NULL,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    review_text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Payment Methods Table
CREATE TABLE payment_methods (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Payments Table
CREATE TABLE payments (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking_id BIGINT UNSIGNED NOT NULL,
    customer_id BIGINT UNSIGNED NOT NULL,
    amount FLOAT NOT NULL,
    payment_method_id BIGINT UNSIGNED NOT NULL,
    status ENUM('pending', 'completed', 'failed') NOT NULL DEFAULT 'pending',
    transaction_id VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Demo Data
INSERT INTO users (name, email, phone_number, role) VALUES
('Admin User', 'admin@project.com', '01810000001', 'admin');

INSERT INTO customers (name, email, phone_number, address) VALUES
('Rahim Mia', 'rahim@gmail.com', '01810000002', 'Dhaka, Bangladesh'),
('Karim Ali', 'karim@gmail.com', '01810000003', 'Chittagong, Bangladesh');

INSERT INTO providers (name, email, phone_number, business_name, address) VALUES
('Plumber Service', 'plumber@services.com', '01810000004', 'FastFix Plumbing', 'Dhaka, Bangladesh'),
('Electrician Hub', 'electrician@services.com', '01810000005', 'Bright Sparks Electrical', 'Chittagong, Bangladesh');

INSERT INTO categories (name, description) VALUES
('Plumbing', 'Pipe fitting, leakage repair, and installation services.'),
('Electrical', 'Wiring, lighting, appliance repair, and maintenance.');

INSERT INTO services (category_id, provider_id, title, description, price) VALUES
(1, 1, 'Leak Fixing', 'Repairing water pipe leaks efficiently.', 500),
(2, 2, 'Fan Installation', 'Ceiling fan fitting and wiring services.', 800);

INSERT INTO service_images (service_id, image_url) VALUES
(1, 'images/leak_fix.jpg'),
(2, 'images/fan_install.jpg');

INSERT INTO business_hours (provider_id, day_of_week, open_time, close_time) VALUES
(1, 'Monday', '09:00:00', '18:00:00'),
(2, 'Monday', '08:00:00', '20:00:00');

