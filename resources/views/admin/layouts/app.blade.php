<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous" />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 1rem;
        }

        .sidebar .nav-link {
            color: #adb5bd;
        }

        .sidebar .nav-link.active {
            background-color: #495057;
            color: #fff;
            font-weight: 600;
        }

        .content {
            margin-left: 220px;
            padding: 2rem;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #343a40;
            color: white;
            position: fixed;
            bottom: 0;
            left: 220px;
            right: 0;
        }
    </style>
</head>

<body>

    <nav class="sidebar d-flex flex-column">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand text-white px-3 mb-3">Admin Panel</a>
        <nav class="nav flex-column px-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @if(request()->routeIs('admin.dashboard')) active @endif">Dashboard</a>
            <a href="{{ route('admin.page1') }}" class="nav-link @if(request()->routeIs('admin.page1')) active @endif">Page 1</a>
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-auto px-3">
                @csrf
                <button type="submit" class="btn btn-danger w-100">Logout</button>
            </form>
        </nav>
    </nav>

    <main class="content">
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Your Company. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>