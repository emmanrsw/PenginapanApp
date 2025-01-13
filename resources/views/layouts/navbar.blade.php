<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestay Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: Arial, sans-serif !important;
    }

    /* Navbar */
    .navbar {
        background-color: #FDF6E3 !important;
        /* Primary: Navy blue */
        padding: 10px 20px !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 0;
    }

    .navbar-brand {
        color: #07617D !important;
        /* Putih untuk teks brand */
        font-weight: bold !important;
        font-size: 1.5rem !important;
        text-transform: uppercase !important;
    }

    .navbar-toggler {
        border-color: #FFFFFF !important;
    }

    .navbar-toggler-icon {
        background-color: #FFFFFF !important;
        /* Ikon toggle putih */
        border-radius: 5px !important;
    }

    .navbar-nav .nav-link {
        color: #07617D !important;
        /* Putih untuk link */
        font-weight: 500 !important;
        margin-right: 15px !important;
        text-transform: capitalize !important;
        transition: color 0.3s ease !important;
    }

    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:hover {
        color: #054D5F !important;
        /* Accent: Merah bata untuk link aktif/hover */
        font-weight: bold !important;
    }

    .navbar-collapse {
        justify-content: flex-end !important;
        /* Agar link ada di kanan */
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="{{ route('home') }}">Homestay Kami</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('facilities') }}">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Menyertakan JavaScript Bootstrap untuk fungsionalitas navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>