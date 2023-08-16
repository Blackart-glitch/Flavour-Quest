<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavour Quest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,1,200">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Include Google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Add these in the <head> section of your HTML -->
    <style>
        /* Styling for WebKit-based browsers (Chrome, Safari) */
        ::-webkit-scrollbar {
            width: 8px;
            background-color: rgb(237, 188, 11);
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgb(8, 8, 8);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-button {
            display: none;
        }

        /* Styling for Firefox */
        scrollbar-color: orange transparent;
        /* Thumb Color Track Color */


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
    <nav class="navbar navbar-expand-lg bg-warning navbar-light ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Flavour Quest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><span class="material-icons">
                                house
                            </span>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('getrecipe') }}"><span
                                class="material-icons">search</span>Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Ingredients"><span class="material-icons">
                                blender
                            </span>Ingredients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cookingtips') }}"><span class="material-icons">
                                tips_and_updates
                            </span>Cooking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="material-icons">
                                contact_support
                            </span>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="material-icons">logout</span>Logout</a>
                    </li>
                </ul>


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
<footer class="footer mt-5 text-center py-3 bg-body-tertiary">
    <div class="container">
        <p class="text-body-secondary">&copy; 2023 Flavour Quest. All rights reserved.</p>
    </div>
</footer>

</html>
