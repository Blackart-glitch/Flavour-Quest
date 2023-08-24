<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavour Quest</title>
    <link rel="icon" type="image/gif" href="icons8-light-on.gif">
    <!-- Bootstrap and Google Fonts CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,1,200">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Include Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Add these in the <head> section of your HTML -->
    <style>
        /* Custom Styles */
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-item :hover {
            background-color: rgb(47, 46, 46);
            color: #ffc107;
        }

        .featured-recipe-card {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .featured-recipe-card:hover {
            transform: translateY(-5px);
        }

        .featured-recipe-card .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .featured-recipe-card .card-body {
            padding: 20px;
        }

        .featured-recipe-card .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .featured-recipe-card .card-text {
            font-size: 18px;
            color: #777;
            margin-bottom: 20px;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .footer p {
            margin: 0;
        }
    </style>


</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg bg-warning mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Flavour Quest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getrecipe') }}">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Top-Ingredients">Ingredients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getrecipe') }}">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cookingtips') }}">Cooking Tips</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-iten" href="{{ route('signin') }}">Sign In</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item nav-item" href="{{ route('signup') }}">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>







    @yield('content')


    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <!-- Include Bootstrap JS (optional, for dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Bootstrap Icons (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.js"></script>
</body>

<!-- Footer -->
<footer class="footer text-center text-light py-3 mt-5">
    <p>&copy; 2023 Flavour Quest. All rights reserved.</p>
</footer>

</html>
