@extends('layouts.authnav')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- ... Navigation bar content ... -->
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="user-profile.jpg" alt="User Profile" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Welcome to your dashboard!</p>
                    </div>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Saved Recipes</a>
                    <a href="#" class="list-group-item list-group-item-action">Favorites</a>
                    <a href="#" class="list-group-item list-group-item-action">Community Recipes</a>
                    <a href="#" class="list-group-item list-group-item-action">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                    <a href="#" class="list-group-item list-group-item-action">Sign Out</a>
                </div>
            </div>
            <div class="col-md-6">
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

                <h2 class="mb-4">New Recipes</h2>
                <div class="row">
                    <!-- Static cards for new recipes -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <!-- ... Card content for new recipe ... -->
                        </div>
                    </div>
                    <!-- More new recipe cards here... -->
                </div>

                <h2 class="mb-4">Latest News</h2>
                <div class="row">
                    <!-- Static news items -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <!-- ... Card content for news item ... -->
                        </div>
                    </div>
                    <!-- More news items here... -->
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="mb-4">New Recipes</h2>
                <div class="row">
                    <!-- Static cards for new recipes -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <!-- ... Card content for new recipe ... -->
                        </div>
                    </div>
                    <!-- More new recipe cards here... -->
                </div>

                <h2 class="mb-4">Community Recipes</h2>
                <div class="row">
                    <!-- Static cards for community recipes -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <!-- ... Card content for community recipe ... -->
                        </div>
                    </div>
                    <!-- More community recipe cards here... -->
                </div>
            </div>
        </div>
    </div>
@endsection
