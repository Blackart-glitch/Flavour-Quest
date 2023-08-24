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
    <div class="">
        <div class="row mt-5 pt-5">
            <div class="col-md-3">
                <div class="">
                    <div class=""><b>Input Ingredients</b> <span class="material-symbols-outlined">search</span>
                    </div>
                    <div class=" bg-warning text-dark">
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
                                        <!-- ... Explore cards ... -->
                                    </div>
                                    <div class="card mb-3">
                                        <!-- ... Explore cards ... -->
                                    </div>
                                    <div class="card mb-3">
                                        <!-- ... Explore cards ... -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <!-- ... Explore cards ... -->
                                    </div>
                                    <div class="card mb-3">
                                        <!-- ... Explore cards ... -->
                                    </div>
                                    <div class="card mb-3">
                                        <!-- ... Explore cards ... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="fw-bolder fs-2">Recipe List</div>
                    <div class="">
                        <div class="row" id="listofrecipes clearfix">
                            @if (!empty($recipes))
                                @foreach ($recipes as $index => $recipe)
                                    <div class="col-md-4">
                                        <div class="card featured-recipe-card" data-bs-toggle="modal"
                                            data-bs-target="#Recipemodal{{ $index }}">
                                            <img class="card-img-top" src="{{ $recipe['image'] ?? '/recipe1.jfif' }}"
                                                alt="delicious looking picture">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $recipe['title'] }}</h5>
                                                <p class="card-text">{!! $description ?? '' . '...Read more' !!}</p>
                                                <a href="#" class="btn btn-dark text-warning" data-toggle="collapse"
                                                    data-target="#Recipemodal{{ $index }}">
                                                    <span class="material-symbols-outlined">arrow_outward</span>
                                                </a>
                                                <div id="recipeCollapse{{ $index }}" class="collapse">
                                                    <p>{{ $recipe['summary'] ?? 'there really is no description' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal to give more recipe information -->
                                        <div class="modal fade" id="Recipemodal{{ $index }}" tabindex="-1"
                                            aria-labelledby="RecipemodalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="RecipemodalLabel">
                                                            {{ $recipe['title'] }}</h5>
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
                                                                <div id="carouselIngredients{{ $index }}"
                                                                    class="carousel slide">
                                                                    <div class="carousel-inner">
                                                                        @foreach ($recipeingredients as $i => $ingredient)
                                                                            <div
                                                                                class="carousel-item {{ $i < 1 ? 'active' : '' }}">
                                                                                <img src="{{ $ingredient['image'] ?? '/broken.png' }}"
                                                                                    class="d-block w-100"
                                                                                    alt="Image of a {{ $ingredient['name'] }}">
                                                                                <div
                                                                                    class="carousel-caption bg-dark text-warning opacity-50 d-none d-md-block">
                                                                                    <h5>{{ $ingredient['name'] }}
                                                                                    </h5>
                                                                                    <p>{{ $ingredient['original'] ?? 'No description to this' }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <button class="carousel-control-prev" type="button"
                                                                        data-bs-target="#carouselIngredients{{ $index }}"
                                                                        data-bs-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </button>
                                                                    <button class="carousel-control-next" type="button"
                                                                        data-bs-target="#carouselIngredients{{ $index }}"
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

                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <p class="font-roboto"> No products to display</p>
                                </div>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-3">
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
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Exciting Food Festival Coming Soon!</h5>
                                    <p class="card-text">Join us for a weekend filled with culinary delights.</p>
                                    <p class="card-text"><small class="text-muted">Published on: August 15,
                                            2023</small>
                                    </p>
                                </div>
                            </div>
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
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
