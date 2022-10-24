<nav class="sidebar sidebar-offcanvas active" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="Dashboard.php"><img src="../image/Hotels.com.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="Dashboard.php"><img src="../image/H.png" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <a class="profile-desc" data-bs-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="image/imageadmine0.png" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION["Username"];?></h5>
                    </div>
                </div>
                <i class="icon-cheveron-down mdi-dots-vertical"></i>
            </a>
            <div class="collapse" id="profile">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <span class="icon-cog"></span>
                        <a class="nav-link" href="admin/Settings.php">Settings</a>
                    </li>
                    <li class="nav-item">
                        <span class="icon-exit"></span>
                        <a class="nav-link" href="admin/LogOut.php">Log out</a>
                    </li>
                </ul>
            </div>
        </li>        
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="Dashboard.php">
                <span class="menu-icon">
                    <i class="icon-meter"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="Hotel.php">
                <span class="menu-icon">
                    <i class="icon-building"></i>
                </span>
                <span class="menu-title">Hotel management</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#UsersManagement" aria-expanded="false" aria-controls="UsersManagement">
                <span class="menu-icon">
                    <i class="icon-group"></i>
                </span>
                <span class="menu-title">Users Management</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="UsersManagement">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="AddRole.php">Add role</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="ViewRoles.php">View roles</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="AddUser.php">Add user</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="ViewUsers.php">View users</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#CustomersDetails" aria-expanded="false" aria-controls="CustomersDetails">
                <span class="menu-icon">
                    <i class="icon-user"></i>
                </span>
                <span class="menu-title">Customers Details</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="CustomersDetails">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/AddHotel.php">Add customer</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/ViewHotels.php">View customers</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#RoomDetails" aria-expanded="false" aria-controls="RoomDetails">
                <span class="menu-icon">
                    <img src="image/room.png" alt="room">
                </span>
                <span class="menu-title">Rooms Details</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="RoomDetails">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/AddHotel.php">Add Room</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/ViewHotels.php">View Rooms</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#RoomBookingDetails" aria-expanded="false" aria-controls="RoomBookingDetails">
                <span class="menu-icon">
                    <i class="icon-bookmark"></i>
                </span>
                <span class="menu-title">Booking Details</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="RoomBookingDetails">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/AddHotel.php">Add Booking</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/ViewHotels.php">View Booking</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#Restaurants" aria-expanded="false" aria-controls="Restaurants">
                <span class="menu-icon">
                    <i class="icon-room_service"></i>
                </span>
                <span class="menu-title">Restaurants</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="Restaurants">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/AddHotel.php">Add Food</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/ViewHotels.php">View Food</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#Bar" aria-expanded="false" aria-controls="Bar">
                <span class="menu-icon">
                    <i class="icon-local_bar"></i>
                </span>
                <span class="menu-title">Bar</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="Bar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/AddHotel.php">Add Drink</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="hotel/ViewHotels.php">View Drink</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#SiteDynamic" aria-expanded="false" aria-controls="SiteDynamic">
                <span class="menu-icon">
                    <i class="icon-earth"></i>
                </span>
                <span class="menu-title">Site Dynamic</span>
                <i class="icon-cheveron-down"></i>
            </a>
            <div class="collapse" id="SiteDynamic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="About.php">About Us</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="Slideshow.php">Slideshow</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>