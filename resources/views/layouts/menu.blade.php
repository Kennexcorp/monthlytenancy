
<li {!! (Route::is('admin.home')? 'class="active"' :"") !!}>
    <a href="{{ route('admin.home') }} ">
        <i class="fa fa-tachometer"></i>
        <span class="link-title menu_hide">&nbsp;Dashboard
        </span>
    </a>
</li>

<li
    class="dropdown_menu {!! (Route::is('admin.users.*') ? 'active':'')!!}">
    <a href="{{ route('admin.users.index') }}">
        <i class="fa fa-user"></i>
        <span class="link-title menu_hide">&nbsp; Users</span>
        <span class="fa arrow menu_hide"></span>
    </a>

</li>

<li class="dropdown_menu {!! (Route::is('admin.property.*') ? 'active':'')!!}">
    <a href="{{ route('admin.property.index') }}">
        <i class="fa fa-building"></i>
        <span class="link-title menu_hide">&nbsp; Properties</span>
        <span class="fa arrow menu_hide"></span>
    </a>
</li>

<li class="dropdown_menu {!! (Route::is('admin.requests.*') ? 'active':'')!!}">
    <a href="{{ route('admin.requests.index') }}">
        <i class="fa fa-envelope"></i>
        <span class="link-title menu_hide">&nbsp; Requests</span>
        <span class="fa arrow menu_hide"></span>
    </a>
</li>

<li class="dropdown_menu {!! (Route::is('admin.settings.*') ? 'active':'')!!}">
    <a href="{{ route('admin.settings.index') }}">
        <i class="fa fa-gears"></i>
        <span class="link-title menu_hide">&nbsp; Settings</span>
        <span class="fa arrow menu_hide"></span>
    </a>
</li>

<li class="dropdown_menu">
    <a href="{{ route('logout') }}">
        <i class="fa fa-sign-out"></i>
        <span class="link-title menu_hide">&nbsp; Logout</span>
        <span class="fa arrow menu_hide"></span>
    </a>
</li>
