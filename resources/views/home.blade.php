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
                        <a class="nav-link" href="#">Ingredients</a>
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

    <!-- Hero Section -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-warning">Welcome to Flavour Quest</h1>
            <p class="lead text-warning">Discover delicious recipes for every occasion</p>
            <button class=" btn btn-dark text-warning btn-lg get-started" href="#" role="button">Get
                Started</button>
        </div>
    </div>

    <!-- Featured Recipes section-->
    <div class="container mt-5">
        <h2 class="mb-4">Featured Recipes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/IMG1.jfif" alt="Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Title</h5>
                        <p class="card-text">Recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/IMG2.jfif" alt="Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Title</h5>
                        <p class="card-text">Recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/IMG3.jfif" alt="Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Title</h5>
                        <p class="card-text">Recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What's New Section -->
    <section class="container mt-5">
        <h2 class="mb-4">What's New</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/recipe1.jfif" alt="New Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">New Recipe Title</h5>
                        <p class="card-text">New recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/recipe2.jfif" alt="New Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">New Recipe Title</h5>
                        <p class="card-text">New recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/recipe3.jfif" alt="New Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">New Recipe Title</h5>
                        <p class="card-text">New recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/recipe4.jfif" alt="New Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">New Recipe Title</h5>
                        <p class="card-text">New recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/recipe5.jfif" alt="New Recipe Image">
                    <div class="card-body">
                        <h5 class="card-title">New Recipe Title</h5>
                        <p class="card-text">New recipe description goes here.</p>
                        <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ingredients Section -->
    <section class="container mt-5">
        <h2 class="mb-4">Top Ingredients</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/ing1.jfif" alt="Ingredient Image">
                    <div class="card-body">
                        <h5 class="card-title">Ingredient Name</h5>
                        <p class="card-text">Ingredient description goes here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/ing2.jfif" alt="Ingredient Image">
                    <div class="card-body">
                        <h5 class="card-title">Ingredient Name</h5>
                        <p class="card-text">Ingredient description goes here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/ing3.jfif" alt="Ingredient Image">
                    <div class="card-body">
                        <h5 class="card-title">Ingredient Name</h5>
                        <p class="card-text">Ingredient description goes here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/ing4.jfif" alt="Ingredient Image">
                    <div class="card-body">
                        <h5 class="card-title">Ingredient Name</h5>
                        <p class="card-text">Ingredient description goes here.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card featured-recipe-card">
                    <img class="card-img-top" src="/ing5.jfif" alt="Ingredient Image">
                    <div class="card-body">
                        <h5 class="card-title">Ingredient Name</h5>
                        <p class="card-text">Ingredient description goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Our Users Say Section -->
    <section class="container mt-5">
        <h2 class="mb-4">What Our Users Say</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card featured-recipe-card">
                    <div class="card-body mb-3">
                        <img src="/user1.jfif" class="rounded-circle mb-3" alt="User Image">
                        <blockquote class="blockquote">
                            <p>"Flavour Quest has been a game-changer for me. I can now find the perfect recipes based
                                on the ingredients I have. Highly recommended!"</p>
                            <footer class="blockquote-footer">John Doe</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card featured-recipe-card">
                    <div class="card-body mb-3">
                        <img src="/user2.jfif" class="rounded-circle mb-3" alt="User Image">
                        <blockquote class="blockquote">
                            <p>"As a food enthusiast, I'm always looking for new recipes to try. Flavour Quest has an
                                amazing collection of diverse cuisines. Love it!"</p>
                            <footer class="blockquote-footer">Jane Smith</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card featured-recipe-card">
                    <div class="card-body">
                        <img src="/user3.jfif" class="rounded-circle mb-3" alt="User Image">
                        <blockquote class="blockquote">
                            <p>"The top ingredients section on Flavour Quest is fantastic. It helps me discover unique
                                ingredients and incorporate them into my cooking."</p>
                            <footer class="blockquote-footer">David Johnson</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card featured-recipe-card">
                    <div class="card-body">
                        <img src="/user4.jfif" class="rounded-circle mb-3" alt="User Image">
                        <blockquote class="blockquote">
                            <p>"Flavour Quest has simplified my meal planning. Now, I can easily find recipes that match
                                my dietary preferences. Great platform!"</p>
                            <footer class="blockquote-footer">Emily Wilson</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About us section  --}}
    <section id="about-us" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="display-4 mb-4">About Us</h2>
                    <p class="lead">Welcome to our recipe platform, where culinary delights come to life! We are
                        passionate about creating and sharing delicious recipes from around the world.</p>
                    <p>Our team of expert chefs and food enthusiasts curates a diverse collection of recipes to suit
                        every taste and occasion. From quick and easy meals to gourmet feasts, we have something for
                        everyone.</p>
                    <p>At our core, we believe in the power of food to bring people together. We aim to inspire and
                        empower home cooks to explore new flavors, experiment with ingredients, and create unforgettable
                        dining experiences.</p>
                    <p>Join our community of food lovers and embark on a culinary journey with us. Whether you're a
                        seasoned chef or just starting in the kitchen, we're here to support you every step of the way.
                    </p>
                    <p>Stay connected with us on social media:</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-outline-primary btn-icon btn-circle mr-3">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-icon btn-circle mr-3">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-icon btn-circle mr-3">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-outline-warning btn-icon btn-circle mr-3">
                            <i class="fab fa-pinterest fa-lg"></i>
                        </a>
                    </div>
                    <p>Sign up for our newsletter to receive the latest recipes, cooking tips, and exclusive offers.</p>
                    <a href="#signup" class="btn btn-dark btn-lg mt-4 get-started">Join Now</a>
                </div>
            </div>
        </div>
    </section>





    <!-- Footer -->
    <footer class="footer text-center text-light py-3 mt-5">
        <p>&copy; 2023 Flavour Quest. All rights reserved.</p>
    </footer>

    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>

</html>
