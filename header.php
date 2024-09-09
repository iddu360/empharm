<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center shadow">
  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <img src="assets/img/epfavicon.png" alt="">
      <span class="d-none d-lg-block text-light">OnPharm</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>
  <!-- End Logo -->
  <div class="search-bar">
    <form class="" method="POST" action="#">
      <!-- <input type="text" name="query" placeholder="Search" title="Enter search keyword"> -->
      <!-- <button type="submit" title="Search"><i class="bi bi-search"></i></button> -->
      <div class="input-group mb-0">
        <input type="text" placeholder="Search" class="form-control">
        <div class="input-group-append">
          <span class="input-group-text">
            <i class="bi bi-search"></i>
          </span>
        </div>
      </div>
    </form>
  </div>
  <!-- End Search Bar -->
  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>
      <!-- End Search Icon-->
      <li class="nav-item dropdown">
        <a class="nav-link nav-icon p-2" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell shadow px-1 rounded"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a>
        <!-- End Notification Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="./User_notifications"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="./User_notifications">Show all notifications</a>
          </li>
        </ul>
        <!-- End Notification Dropdown Items -->
      </li>
      <!-- End Notification Nav -->
      <li class="nav-item dropdown">
        <a class="nav-link nav-icon p-2" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text shadow px-1 rounded"></i>
          <span class="badge bg-primary badge-number">3</span>
        </a>
        <!-- End Messages Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="./User_messages"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="./User_messages">Show all messages</a>
          </li>
        </ul>
        <!-- End Messages Dropdown Items -->
      </li>
      <!-- End Messages Nav -->
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle bxsh">
          <!-- <span class="d-none d-md-block dropdown-toggle ps-2">UserName</span> -->
        </a>
        <!-- End Profile Iamge Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Username</h6>
            <span>Position</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="./User_profile">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="./User_profile">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </ul>
        <!-- End Profile Dropdown Items -->
      </li>
      <!-- End Profile Nav -->
    </ul>
  </nav>
  <!-- End Icons Navigation -->
</header>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar shadow">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="Manage_Pharmacy">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Inventory</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="./Medicine_Stock_inventory_management">
        <i class="bi bi-capsule"></i><span>Medicine</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./Medicine_Stock_inventory_management#inStock">
            <i class="bi bi-circle"></i><span>InStock</span>
          </a>
        </li>
        <li>
        <li>
          <a href="./Medicine_Stock_inventory_management#outStock">
            <i class="bi bi-circle"></i><span>Out Of Stock</span>
          </a>
        </li>
        <li>
          <a href="./Medicine_Stock_inventory_management#expired">
            <i class="bi bi-circle"></i><span>Expired</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- End Medicine Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#equipment-nav" data-bs-toggle="collapse" href="./Equipment_Stock_inventory_management">
        <i class="bi bi-heart-pulse"></i><span>Equipment</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="equipment-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./Equipment_Stock_inventory_management#inStock">
            <i class="bi bi-circle"></i><span>InStock</span>
          </a>
        </li>
        <li>
        <li>
          <a href="./Equipment_Stock_inventory_management#outStock">
            <i class="bi bi-circle"></i><span>Out of Stock</span>
          </a>
        </li>
        <li>
          <a href="./Equipment_Stock_inventory_management#damaged">
            <i class="bi bi-circle"></i><span>Damaged</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- End Equipment Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="./Suppliers_and_Manufacturers_database_management">
        <i class="bi bi-houses"></i><span>Manufacturers</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./Suppliers_and_Manufacturers_database_management#suppliers">
            <i class="bi bi-circle"></i><span>Suppliers</span>
          </a>
        </li>
        <li>
          <a href="./Suppliers_and_Manufacturers_database_management#nonSuppliers">
            <i class="bi bi-circle"></i><span>Non-Suppliers</span>
          </a>
        </li>
      </ul>
    </li><!-- End Manufacturers Nav -->

    <li class="nav-heading">Analytics and Reports</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="./Reports_and_inventory_management">
        <i class="bi bi-clipboard2-pulse"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./Reports_and_inventory_management#sales">
            <i class="bi bi-circle"></i><span>Sales</span>
          </a>
        </li>
        <li>
          <a href="./Reports_and_inventory_management#purchases">
            <i class="bi bi-circle"></i><span>Purchases</span>
          </a>
        </li>
      </ul>
    </li><!-- End Reports Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="./Invoice_management">
        <i class="bi bi-receipt"></i><span>Invoices</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./Invoice_management#generate">
            <i class="bi bi-circle"></i><span>Generate</span>
          </a>
        </li>
        <li>
          <a href="./Invoice_management#pending">
            <i class="bi bi-circle"></i><span>Pending</span>
          </a>
        </li>
        <li>
          <a href="./Invoice_management#approved">
            <i class="bi bi-circle"></i><span>Approved</span>
          </a>
        </li>
      </ul>
    </li><!-- End Invoices Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#shop-nav" data-bs-toggle="collapse" href="./Add_medicine_stock_to_pharmacy">
        <i class="bi bi-cart-plus"></i><span>Shop</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="shop-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./Add_medicine_stock_to_pharmacy">
            <i class="bi bi-circle"></i><span>Add Medicine</span>
          </a>
        </li>
        <li>
          <a href="./Add_equipment_stock_to_pharmacy">
            <i class="bi bi-circle"></i><span>Add Equipment</span>
          </a>
        </li>
      </ul>
    </li><!-- End Shop Nav -->

    <div class="">
      <li class="nav-heading">Notifications and Alerts</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="./User_messages">
          <i class="bi bi-chat-left-text"></i>
          <span>Messages</span>
        </a>
      </li>
      <!-- End Messages Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="./User_notifications">
          <i class="bi bi-bell"></i>
          <span>Notifications</span>
        </a>
      </li>
      <!-- End Notifications Nav -->

      <li class="nav-heading">Settings and Configuration</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./Manage_users">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a>
      </li>
      <!-- End users Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="./User_profile">
          <i class="bi bi-person-gear"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="./Onpharm_Dashboard_page_settings">
          <i class="bi bi-person-gear"></i>
          <span>Settings</span>
        </a>
      </li>
      <!-- End Settings Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="./Login_to_your_account">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Logout Page Nav -->
    </div>
  </ul>

</aside>
<!-- End Sidebar-->