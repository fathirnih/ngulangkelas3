<!-- resources/views/partials/sidebar.blade.php -->
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <ul class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </a>
                </li>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('produk.index') }}">
                        <span class="nav-link-text ms-1">Data Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('users.index') }}">
                        <span class="nav-link-text ms-1">Data Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('supplier.index') }}">
                        <span class="nav-link-text ms-1">Data Supplier</span>
                    </a>
                </li>

                {{-- LOGOUT --}}
                <div class="sb-sidenav-menu-heading">Account</div>
                <li class="nav-item">
                    <a href="#"
                       class="nav-link text-danger"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        Logout
                    </a>

                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </nav>
</div>
