<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavour Quest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Custom Styles */
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .get-started:hover {
            background-color: orange;
            color: rgb(16, 16, 16);
        }

        .jumbotron {
            background-image: url('/top1.avif');
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jumbotron h1 {
            font-size: 48px;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 24px;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .jumbotron .btn {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            background-color: #000;
            border-color: #000;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Flavour Quest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex" id="navbarNav">
                <ul class="navbar-nav ml-auto">
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
                        <a class="nav-link" href="{{ route('cookingtips') }}">Cooking Tips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')





    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>

<!-- Footer -->
<footer class="footer text-center text-light py-3 mt-5">
    <p>&copy; 2023 Flavour Quest. All rights reserved.</p>
</footer>

</html>
