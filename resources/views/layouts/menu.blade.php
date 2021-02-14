<li class="{{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="{{ route("home") }}" class="nav-link">
        <i class="fas fa-fire"></i>
        <span>Dashboard</span>
    </a>
</li>




<li class="{{ Request::is('dashboard/serviceCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceCategories.index') }}">
        <i class="nav-icon icon-list"></i>
        <span>Categories</span>
    </a>
</li>



<li class="{{ Request::is('dashboard/services*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('services.index') }}">
        <i class="nav-icon icon-list"></i>
        <span>Services</span>
    </a>
</li>

<li class="{{ Request::is('dashboard/customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="nav-icon icon-user"></i>
        <span>Customers</span>
    </a>
</li>

<li class="{{ Request::is('dashboard/bookings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bookings.index') }}">
        <i class="nav-icon icon-calendar"></i>
        <span>Bookings</span>
    </a>
</li>

<li class="{{ Request::is('dashboard/bookingCalendar*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('booking.calendar') }}">
        <i class="nav-icon icon-calendar"></i>
        <span>Bookings Calendar</span>
    </a>
</li>



<li class="{{ Request::is('dashboard/coupons*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('coupons.index') }}">
        <i class="nav-icon fa  fa-tags"></i>
        <span>Coupons</span>
    </a>
</li>

<li class="{{ Request::is('dashboard/roles*') ? 'active' : '' }} d-none">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Roles</span>
    </a>
</li>
<li class="{{ Request::is('dashboard/users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>


<li class="{{ Request::is('dashboard/settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('settings.index') }}">
        <i class="nav-icon icon-settings"></i>
        <span>Settings</span>
    </a>
</li>
