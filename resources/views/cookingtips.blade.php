@extends('layouts.app');

@section('content')
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/tip3.jpg" alt="Background Image" class="d-block w-100 custom-img-height">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center position-absolute top-50 start-50 translate-middle">
                        <h5 class="card-title display-4 font-weight-bold">Tip 1: Preheat Your Pan</h5>
                        <p class="card-text lead">Always preheat your pan before adding ingredients for better cooking
                            results.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/tip2.jpg" alt="Background Image" class="d-block w-100 custom-img-height">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center position-absolute top-50 start-50 translate-middle">
                        <h5 class="card-title display-4 font-weight-bold">Tip 2: Season Generously</h5>
                        <p class="card-text lead">Don't be afraid to season your dishes with herbs, spices, and flavorings
                            to enhance the taste.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/tip1.jpg" alt="Background Image" class="d-block w-100 custom-img-height">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-center position-absolute top-50 start-50 translate-middle">
                        <h5 class="card-title display-4 font-weight-bold">Tip 3: Use Fresh Ingredients</h5>
                        <p class="card-text lead">Opt for fresh and high-quality ingredients to achieve the best flavors in
                            your dishes.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
@endsection

<style>
    .custom-img-height {
        height: 80vh;
    }

    .carousel-caption {
        margin-left: 30%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        text-align: center;
        color: orange font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: 20px;

    }
</style>
