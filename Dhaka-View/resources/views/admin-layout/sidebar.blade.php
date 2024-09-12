<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/admin-css/sidebar.css">
</head>
<body>
   <!-- Sidebar -->
 <div class="sidebar sidebar-style-2" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <h3 class="admin-side-logo">DHAKA HEIGHTS</h3>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="{{ url('/dashboard') }}"><h3>Dashboard</h3></a>
                
              </li>
             
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                 
                  <p>Reservations</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="forms/forms.html">
                        <span class="sub-item">View Reservation </span>
                      </a>
                    </li>
                    <li>
                      <a href="forms/forms.html">
                        <span class="sub-item">Request </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                 
                  <p>Room Management</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{url('/vroom') }}">
                        <span class="sub-item">Room List</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/roomform') }}">
                        <span class="sub-item">Add New Room</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/datatables.html">
                        <span class="sub-item">Room Category</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/tables.html">
                        <span class="sub-item">Room Status</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                 
                  <p>Guests Management</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ url('/booked') }}">
                        <span class="sub-item">Guest List</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Guest Profiles</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                
                  <p>Billing & Invoicing</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ url('/invoice') }}">
                        <span class="sub-item">Invoices</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Payments</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a href="../../documentation/index.html">
                 
                  <p>Guest Feedback</p>
                  <span class="caret"></span>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                 
                  <p>Staff Management</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li>
                      <a  href="{{ url('/viewstaff') }}">
                        <span class="sub-item">Staff List</span>
                        
                      </a>
                     
                    </li>
                    <li>
                      <a  href="{{ url('/staff') }}">
                        <span class="sub-item">Add New Staff</span>
                        
                      </a>
                      
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Roles</span>
                        
                      </a>
                      
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Shift Management</span>
                        
                      </a>
                      
                    </li>
                    
                  </ul>
                </div>
              </li>
            </ul>
           <!-- resources/views/layouts/sidebar.blade.php -->
            <!-- Sidebar -->
<div class="sidebarr">
    <ul class="sidebar-menu">
        <!-- First Dropdown -->
        <li class="menu-item has-dropdown">
            <a href="#" class="menu-link">Housekeeping</a>
            
            <ul class="dropdown-menu">
                <li><a href="#">Room Attendent</a></li>
                <li><a href="#">Public Aria</a></li>
                <li><a href="#">Laundry</a></li>
            </ul>
        </li>

        <!-- Second Dropdown -->
        <li class="menu-item has-dropdown">
            <a href="#" class="menu-link">User Management</a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/user') }}">User List</a></li>
                <li><a href="{{ url('/adduser') }}">Add New User</a></li>
                
            </ul>
        </li>

        <!-- Third Dropdown -->
        <li class="menu-item has-dropdown">
            <a href="{{('/home')}}" class="menu-link">Logout</a>

        </li>
    </ul>
</div>




          </div>
        </div>
        
      </div>
     
      
      <!-- End Sidebar -->

</body>
</html>