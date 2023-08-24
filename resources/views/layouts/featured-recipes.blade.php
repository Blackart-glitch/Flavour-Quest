@component('components.featured-recipes', ['recipes' => $recipes])
    <div id="featuredRecipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php $active = true; @endphp <!-- Variable to track active state -->
            @foreach ($recipes as $index => $recipe)
                @if ($index >= 6)
                @break

            @else
                @php
                    $description = $recipe['summary'] ? substr($recipe['summary'], 0, 30) : 'No description available';
                @endphp
                <div class="carousel-item {{ $active ? 'active' : '' }}">
                    <div class="row">
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
                    </div>
                </div>
                @php $active = false; @endphp <!-- Set active to false after the first item -->
            @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#featuredRecipeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#featuredRecipeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endcomponent
