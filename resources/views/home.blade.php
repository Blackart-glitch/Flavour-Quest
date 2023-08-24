@extends('layouts.app')
@section('content')
    <style>
        .get-started:hover {
            background-color: orange;
            color: rgb(16, 16, 16);
        }

        .jumbotron {
            background-image: url('/home.jumbotron.jpg');
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
    </style>
    <!-- Hero Section -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-warning">Welcome to Flavour Quest</h1>
            <p class="lead text-warning">Discover delicious recipes for every occasion</p>
            <button class=" btn btn-dark text-warning btn-lg get-started" href="#" role="button">Get
                Started</button>
        </div>
    </div>

    <!-- Featured Recipes section -->
    <section class="mt-5">
        <h2 class="mb-4">Featured Recipes</h2>

        <div class="row">
            @foreach ($recipes as $index => $recipe)
                @if ($index >= 6)
                @break

            @else
                @php
                    $description = $recipe['summary'] ? substr($recipe['summary'], 0, 30) : 'No description available';
                @endphp
                <div class="col-md-4">
                    <div class="card featured-recipe-card">
                        <img class="card-img-top" src="{{ $recipe['image'] ?? '/IMG1.jfif' }}"
                            alt="{{ $recipe['title'] ?? 'Error' }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe['title'] ?? 'No title' }}</h5>
                            <p class="card-text">{!! $description !!} <a href="#">READ MORE</a></p>
                            <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>


<!-- What's New Section -->
<section class="container mt-5">
    <h2 class="mb-4">What's New</h2>
    @if (!empty($recipes))
        <div class="row">
            @foreach ($recipes as $index => $recipe)
                @if ($index < 6)
                    @php
                        $description = $recipe['summary'] ? substr($recipe['summary'], 0, 30) : 'No description available';
                    @endphp
                    <div class="col-md-4">
                        <div class="card featured-recipe-card">
                            <img class="card-img-top" src="{{ $recipe['image'] ?? '/IMG1.jfif' }}"
                                alt="{{ $recipe['title'] ?? 'Error' }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $recipe['title'] ?? 'No title' }}</h5>
                                <p class="card-text">{!! $description . '... READ MORE' !!}</p>
                                <a href="#" class="btn btn-dark text-warning">View Recipe</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @else
        <p>No recipes available.</p>
    @endif

</section>

<!-- Top Ingredients Section -->
<section class="container mt-5">
    <h2 class="mb-4" id="Top-Ingredients">Top Ingredients</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card featured-recipe-card">
                <img class="card-img-top" src="/flour.jfif" alt="Ingredient Image">
                <div class="card-body">
                    <h5 class="card-title">Flour</h5>
                    <p class="card-text">The main ingredient in bread, pasta, and many other baked goods.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card featured-recipe-card">
                <img class="card-img-top" src="/egg.jfif" alt="Ingredient Image">
                <div class="card-body">
                    <h5 class="card-title">Eggs</h5>
                    <p class="card-text">A versatile ingredient that can be used in sweet and savory dishes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card featured-recipe-card">
                <img class="card-img-top" src="/butter.jfif" alt="Ingredient Image">
                <div class="card-body">
                    <h5 class="card-title">Butter</h5>
                    <p class="card-text">A rich and creamy ingredient that adds flavor and richness to dishes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card featured-recipe-card">
                <img class="card-img-top" src="/sugar.jfif" alt="Ingredient Image">
                <div class="card-body">
                    <h5 class="card-title">Sugar</h5>
                    <p class="card-text">A sweet ingredient that can be used to sweeten dishes or to add depth of
                        flavor.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card featured-recipe-card">
                <img class="card-img-top" src="/salt.jfif" alt="Ingredient Image">
                <div class="card-body">
                    <h5 class="card-title">Salt</h5>
                    <p class="card-text">A savory ingredient that helps to balance out the sweetness of other
                        ingredients.</p>
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

{{-- End credits section  --}}

<a target="_blank" href="https://icons8.com/icon/KgisVcJhnUAQ/light-on">Light On</a> icon by <a target="_blank"
    href="https://icons8.com">Icons8</a>
@endsection
