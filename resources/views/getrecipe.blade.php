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

        #customToast {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            max-width: 90%;
            z-index: 9999;
        }

        @media (max-width: 576px) {
            #customToast {
                width: 300px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-4 d-flex flex-column h-100">
                <div class="card mb-3">
                    <div class="card-header"><b>Input Ingredients</b> <span class="material-symbols-outlined">search</span>
                    </div>
                    <div class="card-body bg-warning text-dark">
                        <form name="personalizedrecipes" id="personalizedrecipes" method="POST"
                            action="{{ route('submitIngredients') }}">
                            @csrf
                            <div class="form-group">
                                <textarea id="ingredients" name="ingredients" class="form-control font-monospace" rows="4"
                                    placeholder="Enter ingredients here... E.g beans, bread, fish "></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark text-warning">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header fw-bold">Explore</div>
                    <div class="card-body bg-warning">
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
            </div>
            <div class="col-md-8 d-flex flex-column">
                <div class="card">
                    <div class="card-header fw-bolder fs-2">Recipe List</div>
                    <div class="card-body">
                        <div class="row" id="listofrecipes clearfix">
                            @if (!empty($recipes))
                                @foreach ($recipes as $index => $recipe)
                                    @php
                                        $description = str_split($recipe['summary'] ?? 'There is no description');
                                        $description = implode('', array_slice($description, 0, 30));
                                    @endphp
                                    <div class="col-md-4">
                                        <div class="card featured-recipe-card" data-bs-toggle="modal"
                                            data-bs-target="#Recipemodal{{ $index }}">
                                            <img class="card-img-top" src="{{ $recipe['image'] ?? '/recipe1.jfif' }}"
                                                alt="delicious looking picture">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $recipe['title'] }}</h5>
                                                <p class="card-text">{!! $description . '...Read more' !!}</p>
                                                <a href="#" class="btn btn-dark text-warning" data-toggle="collapse"
                                                    data-target="#recipeCollapse{{ $index }}"><span
                                                        class="material-symbols-outlined">
                                                        arrow_outward
                                                    </span></a>
                                                <div id="recipeCollapse{{ $index }}" class="collapse">
                                                    <p>{{ $recipe['summary'] ?? 'there really is no description' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal to give more recipe information -->
                                    <div class="modal fade" id="Recipemodal{{ $index }}" tabindex="-1"
                                        aria-labelledby="RecipemodalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="RecipemodalLabel">{{ $recipe['title'] }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $recipe['summary'] ?? 'This product does not have a summary' !!}

                                                    @if (!empty($recipe['missedIngredients'] ?? $recipe['extendedIngredients']))
                                                        @php
                                                            $recipeingredients = $recipe['missedIngredients'] ?? $recipe['extendedIngredients'];
                                                        @endphp
                                                        <div class="ingredients">
                                                            <h5>Ingredients you must add</h5>
                                                            <div id="carouselIngredients" class="carousel slide">
                                                                <div class="carousel-inner">
                                                                    @foreach ($recipeingredients as $i => $ingredient)
                                                                        <div
                                                                            class="carousel-item {{ $i < 1 ? 'active' : '' }}">
                                                                            <img src="{{ $ingredient['image'] ?? '/broken.png' }}"
                                                                                class="d-block w-100"
                                                                                alt="Image of a {{ $ingredient['name'] }}">
                                                                            <div
                                                                                class="carousel-caption bg-dark text-warning opacity-50 d-none d-md-block">
                                                                                <h5>{{ $ingredient['name'] }}</h5>
                                                                                <p>{{ $ingredient['original'] ?? 'No description to this' }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselIngredients"
                                                                    data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselIngredients"
                                                                    data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <p>There's no missed ingredient.</p>
                                                    @endif


                                                </div>

                                                <div class="modal-footer">
                                                    <div class="text-muted">
                                                        {{ $recipe['creditsText'] ?? 'Spoonacular library' }}
                                                    </div>
                                                    <button type="button" class="btn btn-dark text-warning"
                                                        data-bs-dismiss="modal">DOWNLOAD RECIPE
                                                        CARD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="font-roboto"> No products to display</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
