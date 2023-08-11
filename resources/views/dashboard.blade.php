@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- ... Navigation bar content ... -->
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <!-- ... User profile card content ... -->
                </div>
                <div class="list-group">
                    <!-- ... Sidebar navigation links ... -->
                </div>
            </div>
            <div class="col-md-9">
                <h2 class="mb-4">Saved Recipes</h2>
                <div class="row">
                    <!-- Static cards for saved recipes -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="recipe1.jpg" alt="Recipe 1" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Delicious Pasta</h5>
                                <p class="card-text">A creamy pasta recipe with a twist.</p>
                                <a href="#" class="btn btn-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                    <!-- More saved recipe cards here... -->
                </div>

                <h2 class="mb-4">My Favorites</h2>
                <div class="row">
                    <!-- Static cards for favorite recipes -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="recipe2.jpg" alt="Recipe 2" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Homemade Pizza</h5>
                                <p class="card-text">Create your favorite pizza at home!</p>
                                <a href="#" class="btn btn-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                    <!-- More favorite recipe cards here... -->
                </div>

                <h2 class="mb-4">Meal Plans</h2>
                <div class="row">
                    <!-- Static cards for meal plans -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Weekend Specials</h5>
                                <p class="card-text">Plan your meals for the weekend!</p>
                                <a href="#" class="btn btn-primary">View Plan</a>
                            </div>
                        </div>
                    </div>
                    <!-- More meal plan cards here... -->
                </div>

                <h2 class="mb-4">Community Recipes</h2>
                <div class="row">
                    <!-- Static cards for community recipes -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="recipe3.jpg" alt="Recipe 3" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Spicy Tacos</h5>
                                <p class="card-text">Share your spicy taco recipe with the community!</p>
                                <a href="#" class="btn btn-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                    <!-- More community recipe cards here... -->
                </div>

                <h2 class="mb-4">Notifications</h2>
                <ul class="list-group">
                    <!-- Static notification items -->
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-primary me-2">New</span>
                            <p class="mb-0">You have a new follower!</p>
                        </div>
                    </li>
                    <!-- More notification items here... -->
                </ul>
            </div>
        </div>
    </div>
@endsection
