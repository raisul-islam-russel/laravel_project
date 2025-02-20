-- Create Database
CREATE DATABASE projectlaravel;
USE projectlaravel;

-- Roles Table (Only Admin & Provider)
CREATE TABLE roles (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Users Table (Admin & Providers Only)
CREATE TABLE users (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone_number VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id BIGINT NOT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Customers Table (Separate for Customers)
CREATE TABLE customers (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone_number VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    address TEXT DEFAULT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Service Categories Table
CREATE TABLE categories (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    image_url VARCHAR(255) DEFAULT NULL
);

-- Services Table
CREATE TABLE services (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    category_id BIGINT NOT NULL,
    provider_id BIGINT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price FLOAT NOT NULL,
    status_id BIGINT NOT NULL
);

-- Booking Status Table
CREATE TABLE booking_status (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Bookings Table
CREATE TABLE bookings (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    customer_id BIGINT NOT NULL,
    provider_id BIGINT NOT NULL,
    service_id BIGINT NOT NULL,
    status_id BIGINT NOT NULL,
    scheduled_time DATETIME NOT NULL,
    price FLOAT NOT NULL,
    payment_status_id BIGINT NOT NULL
);

-- Payment Methods Table
CREATE TABLE payment_methods (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Payment Status Table
CREATE TABLE payment_status (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Payments Table
CREATE TABLE payments (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    booking_id BIGINT NOT NULL,
    customer_id BIGINT NOT NULL,
    amount FLOAT NOT NULL,
    payment_method_id BIGINT NOT NULL,
    status_id BIGINT NOT NULL,
    transaction_id VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Roles (Admin & Provider)
INSERT INTO roles (name) VALUES 
('Admin'), 
('Provider');

-- Insert Users (Only Admin & Providers)
INSERT INTO users (name, email, phone_number, password, role_id, profile_picture) VALUES
('Admin User', 'admin@project.com', '01810000001', '$2y$10$7x/ZFJmyOMKjI1C0WqBp0.VWh2TZee65IdGVKZ9ZCtt1x5dU5ATyW', 1, NULL),
('Plumber Service', 'plumber@services.com', '01810000002', '$2y$10$7x/ZFJmyOMKjI1C0WqBp0.VWh2TZee65IdGVKZ9ZCtt1x5dU5ATyW', 2, NULL),
('Electrician Hub', 'electrician@services.com', '01810000003', '$2y$10$7x/ZFJmyOMKjI1C0WqBp0.VWh2TZee65IdGVKZ9ZCtt1x5dU5ATyW', 2, NULL);

-- Insert Customers (Separate Table)
INSERT INTO customers (name, email, phone_number, password, address, profile_picture) VALUES
('Rahim Mia', 'rahim@gmail.com', '01810000004', '$2y$10$7x/ZFJmyOMKjI1C0WqBp0.VWh2TZee65IdGVKZ9ZCtt1x5dU5ATyW', 'Dhaka, Bangladesh', NULL),
('Karim Ali', 'karim@gmail.com', '01810000005', '$2y$10$7x/ZFJmyOMKjI1C0WqBp0.VWh2TZee65IdGVKZ9ZCtt1x5dU5ATyW', 'Chittagong, Bangladesh', NULL);

-- Insert Service Categories
INSERT INTO categories (name, description, image_url) VALUES
('Plumbing', 'Pipe fitting, leakage repair, and installation services.', 'plumbing.jpg'),
('Electrical', 'Wiring, lighting, appliance repair, and maintenance.', 'electrical.jpg'),
('Cleaning', 'Home and office cleaning services.', 'cleaning.jpg');

-- Insert Booking Status
INSERT INTO booking_status (name) VALUES ('Pending'), ('Accepted'), ('Completed'), ('Cancelled');

-- Insert Payment Methods
INSERT INTO payment_methods (name) VALUES ('bKash'), ('Nagad'), ('Rocket'), ('Card');

-- Insert Payment Status
INSERT INTO payment_status (name) VALUES ('Pending'), ('Completed'), ('Failed');

-- Insert Services
INSERT INTO services (category_id, provider_id, title, description, price, status_id) VALUES
(1, 2, 'Leak Fixing', 'Repairing water pipe leaks efficiently.', 500, 1),
(2, 3, 'Fan Installation', 'Ceiling fan fitting and wiring services.', 800, 1),
(3, 2, 'House Cleaning', 'Full house cleaning with eco-friendly solutions.', 1500, 1);

-- Insert Bookings
INSERT INTO bookings (customer_id, provider_id, service_id, status_id, scheduled_time, price, payment_status_id) VALUES
(1, 2, 1, 1, '2025-02-15 10:00:00', 500, 1),
(2, 3, 2, 2, '2025-02-16 15:00:00', 800, 1),
(1, 2, 3, 3, '2025-02-14 09:30:00', 1500, 2);

-- Insert Payments
INSERT INTO payments (booking_id, customer_id, amount, payment_method_id, status_id, transaction_id) VALUES
(3, 1, 1500, 1, 2, 'BKASH123456'),
(2, 2, 800, 2, 1, 'NAGAD987654'),
(1, 1, 500, 3, 1, 'ROCKET567890');
