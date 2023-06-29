<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Flavour Quest</title>
    <style>
        /* Custom Styles */
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .jumbotron {
            background-image: url('/top1.avif');
            background-size: cover;
            height: 400px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand " href="#">Flavour Quest</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ingredients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cooking Tips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1 class="display-4 text-warning">Welcome to Flavour Quest</h1>
            <p class="lead text-warning">Discover delicious recipes for every occasion</p>
            <a class="btn btn-dark text-warning btn-lg" href="#" role="button">Get Started</a>
        </div>
    </div>

    <!-- Featured Recipes -->
    <div class="container mt-5">
        <h2 class="mb-4">Featured Recipes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="path_to_recipe_image.jpg" alt="Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Title</h5>
                        <p class="card-text">Recipe description goes here.</p>
                        <a href="#" class="btn btn-primary">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="path_to_recipe_image.jpg" alt="Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Title</h5>
                        <p class="card-text">Recipe description goes here.</p>
                        <a href="#" class="btn btn-primary">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="path_to_recipe_image.jpg" alt="Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Title</h5>
                        <p class="card-text">Recipe description goes here.</p>
                        <a href="#" class="btn btn-primary">View Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p>&copy; 2023 Flavour Quest. All rights reserved.</p>
    </footer>

    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Flavour-Quest\resources\views\home.blade.php ENDPATH**/ ?>