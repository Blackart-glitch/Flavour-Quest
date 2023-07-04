@extends('layouts.app');

@section('content')
    <div id="cooking-tips-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-background">
                    <img src="/path/to/background-image.jpg" alt="Background Image">
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Tip 1: Preheat Your Pan</h5>
                                        <p class="card-text">Always preheat your pan before adding ingredients for better
                                            cooking results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-background">
                    <img src="/path/to/background-image.jpg" alt="Background Image">
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Tip 2: Season Generously</h5>
                                        <p class="card-text">Don't be afraid to season your dishes with herbs, spices, and
                                            flavorings to enhance the taste.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-background">
                    <img src="/path/to/background-image.jpg" alt="Background Image">
                </div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Tip 3: Use Fresh Ingredients</h5>
                                        <p class="card-text">Opt for fresh and high-quality ingredients to achieve the best
                                            flavors in your dishes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more carousel items with additional cooking tips here -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cooking-tips-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cooking-tips-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
