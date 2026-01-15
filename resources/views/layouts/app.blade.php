<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="{{ asset('assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    <style>
        /* Hilangkan garis merah Material Dashboard */
        .input-group-outline .form-control {
            border: 1px solid #ced4da !important;
        }

        .input-group-outline.is-focused .form-control,
        .input-group-outline.is-filled .form-control {
            border-color: #4CAF50 !important;
        }

        /* Hilangkan validasi merah browser */
        input:invalid {
            box-shadow: none;
            outline: none;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">

    {{-- Sidebar --}}
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-success">
        <div class="sidenav-header">
            <a class="navbar-brand m-0 text-white">
                <span class="ms-1 font-weight-bold">Dashboard Admin</span>
            </a>
        </div>

        <ul class="navbar-nav">
            {{-- Dashboard --}}
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('dashboard') }}">
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            {{-- Data Produk --}}
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('produk.index') }}">
                    <span class="nav-link-text ms-1">Data Produk</span>
                </a>
            </li>
            {{-- Data Users --}}
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('users.index') }}">
                   <span class="nav-link-text ms-1">Data Users</span>
                </a>
            </li>
        </ul>
    </aside>

    {{-- Main --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
</body>
</html>
