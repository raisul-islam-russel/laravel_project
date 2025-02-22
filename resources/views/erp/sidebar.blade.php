<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('assets') }}/img/logo.svg" class="img-fluid logo" alt="Logo">
            </a>
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('assets') }}/img/logo-small.svg" class="img-fluid logo-small" alt="Logo">
            </a>
        </div>
        <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title m-0">
                    <h6>Home</h6>
                </li>
                <li>
                    <a href="{{ url('/dashboard') }}" class="active"><i class="fe fe-grid"></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <h6>Services</h6>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="fe fe-briefcase"></i> 
                        <span>Services</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a  href="add-service.html">Add Service</a>
                        </li>
                        <li>
                            <a href="{{url('erp/services')}}">Services</a>
                        </li>
                        <li>
                            <a href="service-settings.html">Service Settings</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="categories.html"><i class="fe fe-file-text"></i> 
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="sub-categories.html"><i class="fe fe-clipboard"></i> <span>Sub Categories</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-star"></i> 
                        <span>Review</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="review-type.html">Review Type</a>
                        </li>
                        <li>
                            <a href="review.html">Review</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">
                    <h6>Booking</h6>
                </li>
                <li>
                    <a href="booking.html"><i class="fe fe-smartphone"></i> <span> Bookings</span></a>
                </li>
                <li class="menu-title">
                    <h6>Finance & Accounts</h6>
                </li>
                <li>
                    <a href="banktransferlist.html"><i class="fe fe-file"></i> 
                        <span>Bank Transfer</span>
                    </a>
                </li>
                <li>
                    <a href="wallet.html"><i class="fe fe-credit-card"></i> 
                        <span>Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="refund-request.html"><i class="fe fe-git-pull-request"></i> <span>Refund Request</span></a>
                </li>
                <li>
                    <a href="cash-on-delivery.html"><i class="fe fe-dollar-sign"></i> <span>Cash on Delivery</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-credit-card"></i> 
                        <span>Payouts</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="payout-request.html">Payout Requests</a>
                        </li>
                        <li>
                            <a href="payout-settings.html">Payout Settings</a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="sales-transactions.html"><i class="fe fe-bar-chart"></i> <span>Sales Transactions</span></a>
                </li>
                <li class="menu-title">
                    <h6>Others</h6>
                </li>
                <li>
                    <a href="chat.html"><i class="fe fe-message-square"></i> <span>Chat</span></a>
                </li>
                <li class="menu-title">
                    <h6>Content</h6>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-file"></i> 
                        <span>Pages</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="add-page.html">Add Page</a>
                        </li>
                        <li>
                            <a href="pages-list.html">Pages</a>
                        </li>
                        <li>
                            <a href="page-list.html">Pages List</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-file-text"></i> 
                        <span>Blog</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="all-blog.html">All Blog</a>
                        </li>
                        <li>
                            <a href="add-blog.html">Add Blog</a>
                        </li>
                        <li>
                            <a href="blogs-categories.html">Categories</a>
                        </li>
                        <li>
                            <a href="blogs-comments.html">Blog Comments</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-map-pin"></i> 
                        <span>Location</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="countries.html">Countries</a>
                        </li>
                        <li>
                            <a href="states.html">States</a>
                        </li>
                        <li>
                            <a href="cities.html">Cities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="testimonials.html"><i class="fe fe-star"></i> <span>Testimonials</span></a>
                </li>
                <li>
                    <a href="faq.html"><i class="fe fe-help-circle"></i> <span>FAQ</span></a>
                </li>
                <li class="menu-title">
                    <h6>Membership</h6>
                </li>
                <li>
                    <a href="membership.html"><i class="fe fe-user"></i> <span>Membership</span></a>
                </li>
                <li>
                    <a href="membership-addons.html"><i class="fe fe-user-plus"></i> <span>Membership Addons</span></a>
                </li>
                <li class="menu-title">
                    <h6>Reports</h6>
                </li>
                <li>
                    <a href="admin-earnings.html"><i class="fe fe-user"></i> 
                        <span>Admin Earnings</span>
                    </a>
                </li>
                <li>
                    <a href="provider-earnings.html"><i class="fe fe-dollar-sign"></i> 
                        <span>Provider Earnings</span>
                    </a>
                </li>
                <li>
                    <a href="provider-sales.html"><i class="fe fe-dollar-sign"></i> 
                        <span>Provider Sales</span>
                    </a>
                </li>
                <li>
                    <a href="provider-wallet.html"><i class="fe fe-credit-card"></i> 
                        <span>Provider Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="customer-wallet.html"><i class="fe fe-user"></i> 
                        <span>Customer Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="membership-transaction.html"><i class="fe fe-tv"></i> 
                        <span>Membership Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="refund-report.html"><i class="fe fe-file-text"></i> 
                        <span>Refund Report</span>
                    </a>
                </li>
                <li>
                    <a href="register-report.html"><i class="fe fe-git-pull-request"></i> 
                        <span>Register Report</span>
                    </a>
                </li>
                <li>
                    <a href="service-sales.html"><i class="fe fe-bar-chart"></i> 
                        <span>Sales Report</span>
                    </a>
                </li>
                <li class="menu-title">
                    <h6>User Management</h6>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-user"></i> 
                        <span> Users</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="users.html">Users</a>
                        </li>
                        <li>
                            <a href="customers.html">Customers</a>
                        </li>
                        <li>
                            <a href="providers.html">Providers </a>
                        </li> 
                    </ul>
                </li>
                <li>
                    <a href="roles.html"><i class="fe fe-file"></i> <span>Roles & Permissions</span></a>
                </li>
                <li>
                    <a href="delete-account-requests.html"><i class="fe fe-trash-2"></i> <span>Delete Account Requests</span></a>
                </li>
                <li>
                    <a href="verification-request.html" ><i class="fe fe-dollar-sign"></i><span>Verification Requests</span></a>
                </li>
                <li class="menu-title">
                    <h6>Marketing</h6>
                </li>
                <li>
                    <a href="coupons.html"><i class="fe fe-bookmark"></i> <span>Coupons</span></a>
                </li>
                <li>
                    <a href="offers.html"><i class="fe fe-briefcase"></i> <span>Service Offers</span></a>
                </li>
                <li>
                    <a href="featured-services.html"><i class="fe fe-briefcase"></i> <span>Featured Services</span></a>
                </li>
                <li>
                    <a href="email-newsletter.html"><i class="fe fe-mail"></i> <span>Email Newsletter</span></a>
                </li>
                <li class="menu-title">
                    <h6>Management</h6>
                </li>
                <li>
                    <a href="cachesystem.html"><i class="fe fe-user"></i> 
                        <span>Cache System</span>
                    </a>
                </li>
                <li>
                    <a href="email-templates.html"><i class="fe fe-mail"></i> <span>Email Templates</span></a>
                </li>
                <li>
                    <a href="sms-templates.html"><i class="fe fe-message-square"></i> <span>SMS Templates</span></a>
                </li>
                <li>
                    <a href="menu-management.html"><i class="fe fe-file-text"></i> <span>Menu Management</span></a>
                </li>
                <li>
                    <a href="website-settings.html"><i class="fe fe-credit-card"></i> <span>Widgets</span></a>
                </li>
                <li>
                    <a href="create-menu.html"><i class="fe fe-list"></i> <span>Create Menu</span></a>
                </li>
                <li>
                    <a href="plugins-manager.html"><i class="fe fe-tv"></i><span>Plugin Managers</span> </a>
                </li>
                <li class="menu-title">
                    <h6>Support</h6>
                </li>
                <li>
                    <a href="contact-messages.html"><i class="fe fe-message-square"></i> <span>Contact Messages</span></a>
                </li>
                <li>
                    <a href="abuse-reports.html"><i class="fe fe-file-text"></i> <span>Abuse Reports</span></a>
                </li>
                <li>
                    <a href="announcements.html"><i class="fe fe-volume-2"></i> <span>Announcements</span></a>
                </li>
                <li class="menu-title">
                    <h6>Settings</h6>
                </li>
                <li>
                    <a href="localization.html" ><i class="fe fe-settings"></i> <span>Settings</span></a>
                </li>
                <li>
                    <a href="signin.html"><i class="fe fe-log-out"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->