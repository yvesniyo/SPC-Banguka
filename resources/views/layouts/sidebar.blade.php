<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">{{config('app.name')}}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>


        @include('layouts.menu')



    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route("profile.edit") }}" class=" btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-user"></i> Profile
        </a>
    </div>
</aside>
