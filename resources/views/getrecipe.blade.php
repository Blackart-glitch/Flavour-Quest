<!-- resources/views/new_page.blade.php -->

@extends('layouts.app')

@section('styles')
    <style>
        .full-height {
            height: 100vw;
        }

        .btn-custom {
            background-color: black;
            color: orange;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-custom:hover {
            background-color: orange;
            color: black;
        }
    </style>
@endsection

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-4 d-flex flex-column h-100">
                <div class="card mb-3">
                    <div class="card-header">Input Ingredients</div>
                    <div class="card-body">
                        <form method="POST" action="{{-- {{ route('submitIngredients') }} --}}">
                            @csrf
                            <div class="form-group">
                                <label for="ingredients">Ingredients:</label>
                                <textarea id="ingredients" name="ingredients" class="form-control" rows="4"
                                    placeholder="Enter ingredients here... E.g beans, bread, fish "></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark text-warning">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Explore</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Recipe Categories</h5>
                                        <p class="card-text">Browse through different recipe categories.</p>
                                        <a href="#" class="btn btn-dark text-warning">Explore</a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Popular Recipes</h5>
                                        <p class="card-text">Discover the most popular recipes.</p>
                                        <a href="#" class="btn btn-dark text-warning">Explore</a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Featured Recipes</h5>
                                        <p class="card-text">Explore our selection of featured recipes.</p>
                                        <a href="#" class="btn btn-dark text-warning">Explore</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Search Recipes</h5>
                                        <p class="card-text">Find specific recipes using our search feature.</p>
                                        <a href="#" class="btn btn-dark text-warning">Explore</a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Recipe Tags</h5>
                                        <p class="card-text">Browse recipes by tags for easy navigation.</p>
                                        <a href="#" class="btn btn-dark text-warning">Explore</a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">User Reviews</h5>
                                        <p class="card-text">Read and write reviews for recipes.</p>
                                        <a href="#" class="btn btn-dark text-warning">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 d-flex flex-column">
                <div class="card">
                    <div class="card-header">Recipe List</div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
