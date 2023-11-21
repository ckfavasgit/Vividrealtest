<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('companies') ? 'active' : '' }}" href="{{ route('companies.index') }}">
                    Companies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('employees') ? 'active' : '' }}" href="{{ route('employees.index') }}">
                    Employees
                </a>
            </li>
            <!-- Add more sidebar items as needed -->
        </ul>
    </div>
</nav>
