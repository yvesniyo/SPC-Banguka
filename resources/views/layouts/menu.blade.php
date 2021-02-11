<li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
    <a href="#" class="nav-link">
        <i class="fas fa-fire"></i>
        <span>Dashboard</span>
    </a>
</li>




<li class="{{ Request::is('serviceCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceCategories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>



<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('services.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Services</span>
    </a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Customers</span>
    </a>
</li>
<li class="{{ Request::is('coupons*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('coupons.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Coupons</span>
    </a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }} d-none">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Roles</span>
    </a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
