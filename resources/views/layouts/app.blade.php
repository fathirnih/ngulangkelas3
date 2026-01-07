<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="{{ asset('assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">

    {{-- Sidebar --}}
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-success">
        <div class="sidenav-header">
            <a class="navbar-brand m-0 text-white">
                <span class="ms-1 font-weight-bold">CRUD Siswa</span>
            </a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="/">
                    <span class="nav-link-text ms-1">Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/create">
                    <span class="nav-link-text ms-1">Tambah Siswa</span>
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
