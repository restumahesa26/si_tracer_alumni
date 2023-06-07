<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item @if(Route::is('dashboard')) active @endif">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="icon-bg"><i class="mdi mdi-view-dashboard menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item @if(Route::is('data-alumni.*')) active @endif">
            <a class="nav-link" href="{{ route('data-alumni.index') }}">
                <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                <span class="menu-title">Data Alumni</span>
            </a>
        </li>
        <li class="nav-item @if(Route::is('data-admin.*')) active @endif">
            <a class="nav-link" href="{{ route('data-admin.index') }}">
                <span class="icon-bg"><i class="mdi mdi-account-key menu-icon"></i></span>
                <span class="menu-title">Data Admin</span>
            </a>
        </li>
        <li class="nav-item sidebar-user-actions mt-3">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="sidebar-profile-text">
                                <p class="mb-1">{{ Auth::user()->role }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                        <i class="mdi mdi-logout menu-icon"></i><span class="menu-title">Log Out</span>
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
