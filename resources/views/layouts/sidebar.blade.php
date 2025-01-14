<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Homestay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">Admin Homestay</div>
            <div class="list-group list-group-flush">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
                <a href="{{ route('admin.daftarKamar') }}" class="list-group-item list-group-item-action bg-dark text-white">Daftar Kamar</a>
                <a href="{{ route('admin.orders') }}" class="list-group-item list-group-item-action bg-dark text-white">Pesanan</a>
                <a href="{{ route('admin.reviews') }}" class="list-group-item list-group-item-action bg-dark text-white">Ulasan</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle">Menu</button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("menu-toggle").onclick = function () {
            document.getElementById("sidebar-wrapper").classList.toggle("toggled");
        };
    </script>
</body>
</html>