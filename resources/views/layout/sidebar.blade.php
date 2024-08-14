<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link collapsed {{ request()->is('dashboard*') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-home"></i> <!-- Updated Icon -->
            <span>Home</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('dashboard*') ? 'active' : '' }}" href="/dashboard">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a class="collapse-item {{ request()->is('logistic*') ? 'active' : '' }}" href="/logistic">
                    <i class="fas fa-truck"></i> Dashboard Logistics
                </a>
                <a class="collapse-item {{ request()->is('finance*') ? 'active' : '' }}" href="/finance">
                    <i class="fas fa-money-bill-wave"></i> Dashboard Finance
                </a>
                <a class="collapse-item {{ request()->is('password*') ? 'active' : '' }}" href="/password">
                    <i class="fas fa-lock"></i> Change Password
                </a>
                <a class="collapse-item {{ request()->is('inbox*') ? 'active' : '' }}" href="/inbox">
                    <i class="fas fa-inbox"></i> Inbox
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ request()->is('master-databases*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-database"></i> <!-- Updated Icon -->
            <span>Master Databases</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('customers*') ? 'active' : '' }}" href="/customers">
                    <i class="fas fa-user"></i> Customer
                </a>
                <a class="collapse-item {{ request()->is('cash-bank*') ? 'active' : '' }}" href="/cash-bank">
                    <i class="fas fa-credit-card"></i> Cash and Bank
                </a>
                <a class="collapse-item {{ request()->is('suppliers*') ? 'active' : '' }}" href="/suppliers">
                    <i class="fas fa-truck"></i> Supplier
                </a>
                <a class="collapse-item {{ request()->is('finished-goods*') ? 'active' : '' }}" href="/finished-goods">
                    <i class="fas fa-box"></i> Finished Goods
                </a>
                <a class="collapse-item {{ request()->is('add-product*') ? 'active' : '' }}" href="/add-product">
                    <i class="fas fa-plus-circle"></i> Add New Product
                </a>
                <a class="collapse-item {{ request()->is('fixed-assets*') ? 'active' : '' }}" href="/fixed-assets">
                    <i class="fas fa-toolbox"></i> Fixed Asset
                </a>
                <a class="collapse-item {{ request()->is('branches*') ? 'active' : '' }}" href="/branches">
                    <i class="fas fa-map-pin"></i> Branch / Location
                </a>
                <a class="collapse-item {{ request()->is('product-categories*') ? 'active' : '' }}" href="/product-categories">
                    <i class="fas fa-tag"></i> Product Category
                </a>
                <a class="collapse-item {{ request()->is('product-brands*') ? 'active' : '' }}" href="/product-brands">
                    <i class="fas fa-star"></i> Product Brand
                </a>
                <a class="collapse-item {{ request()->is('product-types*') ? 'active' : '' }}" href="/product-types">
                    <i class="fas fa-cube"></i> Product Type
                </a>
                <a class="collapse-item {{ request()->is('product-styles*') ? 'active' : '' }}" href="/product-styles">
                    <i class="fas fa-palette"></i> Product Style
                </a>
                <a class="collapse-item {{ request()->is('sales-persons*') ? 'active' : '' }}" href="/sales-persons">
                    <i class="fas fa-user-plus"></i> Sales Person
                </a>
                <a class="collapse-item {{ request()->is('route-plans*') ? 'active' : '' }}" href="/route-plans">
                    <i class="fas fa-map"></i> Route Plan
                </a>
            </div>
        </div>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
