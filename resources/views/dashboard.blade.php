@extends('layouts.authnav')
@section('content')
    <div class="container-fluid px-3">
        <div class="row">
            <div class="col-md-3 fixed-left p-0 bg-dark" id="left-area">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px;">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-4">Hello Daniel</span>
                    </a>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.githubusercontent.com/u/64565324?s=400&u=e2f11b6808b530441569eb70c83be5bc8a0c3d72&v=4"
                                alt="" width="150" height="150" class="rounded-circle me-2">
                            <span class="material-icons">
                                manage_accounts
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#"><span class="material-icons">
                                        tune
                                    </span>Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><span class="material-icons">
                                        logout
                                    </span>Sign out</a></li>
                        </ul>
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item p-2">
                            <a href="#" class="nav-link active" aria-current="page">
                                Home
                            </a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="#" class="list-group-item list-group-item-action  text-white">Recently
                                viewed <span class="material-icons">
                                    history
                                </span></a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="#" class="list-group-item list-group-item-action  text-white">Saved
                                Recipes <span class="material-icons">
                                    saved_search
                                </span></a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="#" class="list-group-item list-group-item-action  text-white">Meal
                                Plan<span class="material-icons">
                                    menu_book
                                </span></a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="#" class="list-group-item list-group-item-action  text-white">New
                                Recipes <span class="material-icons">new_releases</span></a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="#" class="list-group-item list-group-item-action  text-white">Favorites<span
                                    class="material-icons">
                                    favorite
                                </span></a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="#" class="list-group-item list-group-item-action  text-white">Community
                                Recipes<span class="material-icons">
                                    forum
                                </span></a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 overflow-auto py-5" style="max-height: 90vh;" id="middle-area">
                {{-- Recently Viewed Recipes section --}}
                <div class="section">
                    <h2>Recently Viewed Recipes</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="recipe1.jfif" alt="Recipe 1">
                                <div class="card-body">
                                    <h5 class="card-title">Ultimate Burger</h5>
                                    <a href="#" class="btn btn-warning">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="recipe2.jfif" alt="Recipe 2">
                                <div class="card-body">
                                    <h5 class="card-title">Margherita Pizza</h5>
                                    <a href="#" class="btn btn-warning">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="recipe3.jfif" alt="Recipe 3">
                                <div class="card-body">
                                    <h5 class="card-title">Greek Salad</h5>
                                    <span class="d-flex justify-content-end">
                                        <a href="#" class=" btn btn-warning">View Details</a>
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-dark">See All</a>
                    </div>
                </div>
                {{-- Meal Plans section --}}
                <div class="section">
                    <h2 class="mb-4">Meal Plans</h2>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Weekend Specials</h5>
                                    <p class="card-text">Plan your meals for the weekend!</p>
                                    <a href="#" class="btn btn-warning">View Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Healthy Eating</h5>
                                    <p class="card-text">Balance your meals with nutritious choices.</p>
                                    <a href="#" class="btn btn-warning">View Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Quick Weeknight Dinners</h5>
                                    <p class="card-text">Prepare meals in no time for busy weekdays.</p>
                                    <a href="#" class="btn btn-warning">View Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- New Recipes section --}}
                <div class="section">
                    <h2 class="mb-4">New Recipes</h2>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="recipe1.jfif" alt="New Recipe 1">
                                <div class="card-body">
                                    <h5 class="card-title">Creamy Pasta Alfredo</h5>
                                    <p class="card-text">Indulge in this rich and delicious pasta dish.</p>
                                    <a href="#" class="btn btn-info">View Recipe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="recipe2.jfif" alt="New Recipe 2">
                                <div class="card-body">
                                    <h5 class="card-title">Spicy Tofu Stir-Fry</h5>
                                    <p class="card-text">Experience bold flavors with this vegan stir-fry.</p>
                                    <a href="#" class="btn btn-info">View Recipe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="recipe3.jfif" alt="New Recipe 3">
                                <div class="card-body">
                                    <h5 class="card-title">Fresh Berry Parfait</h5>
                                    <p class="card-text">Enjoy a refreshing and healthy dessert option.</p>
                                    <a href="#" class="btn btn-info">View Recipe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Community Recipes section --}}
                <div class="section">
                    <h2 class="mb-4">Community Recipes</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="recipe1.jfif" alt="Community Recipe 1">
                                <div class="card-body">
                                    <h5 class="card-title">Homemade Sourdough Bread</h5>
                                    <p class="card-text">Join the community in making delicious sourdough at home.</p>
                                    <a href="#" class="btn btn-success">Try Recipe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="recipe2.jfif" alt="Community Recipe 2">
                                <div class="card-body">
                                    <h5 class="card-title">Spicy Chicken Curry</h5>
                                    <p class="card-text">Share the heat with this flavorful chicken curry recipe.</p>
                                    <a href="#" class="btn btn-success">Try Recipe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="recipe3.jfif" alt="Community Recipe 3">
                                <div class="card-body">
                                    <h5 class="card-title">Vegan Chocolate Cake</h5>
                                    <p class="card-text">Indulge guilt-free with this amazing vegan dessert.</p>
                                    <a href="#" class="btn btn-success">Try Recipe</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more cards here -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 overflow-auto py-5" style="max-height: 90vh;"id="right-area">
                {{-- Latest News section --}}
                <div class="section">
                    <h2 class="mb-4">Latest News</h2>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Exciting Food Festival Coming Soon!</h5>
                                    <p class="card-text">Join us for a weekend filled with culinary delights.</p>
                                    <p class="card-text"><small class="text-muted">Published on: August 15,
                                            2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Cooking Workshop: Mastering Pasta</h5>
                                    <p class="card-text">Learn the art of making perfect pasta from renowned chefs.</p>
                                    <p class="card-text"><small class="text-muted">Published on: August 10,
                                            2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">New Recipe Contest: Win Exciting Prizes!</h5>
                                    <p class="card-text">Submit your unique recipes for a chance to win big!</p>
                                    <p class="card-text"><small class="text-muted">Published on: August 5,
                                            2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
