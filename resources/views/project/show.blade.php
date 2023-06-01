<!-- esempio template per singolo progetto -->

<x-layout>
    <x-slot name="title">{{$project->name}}</x-slot>
    <div class="container mt-nav">
        <div class="row h-100 justify-content-center">
            <button class="collapsed border border-0 btn btn-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                id="button-accordion-details">
                Read More +
            </button>

            <div class="accordion" id="accordionInfo">
                <div class="accordion-item border border-0">
                    <h2 class="accordion-header">
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse border border-dark"
                        data-bs-parent="#accordionInfo">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row h-100 mt-3">
                                    <div class="col-12 col-md-3">
                                        <h6>Client: <strong>{{$project->client}}</strong> </h6>
                                        <h6>Advertorial on: <strong>{{$project->advertorial_on}}</strong></h6>
                                        <h6>Year: <strong>{{$project->year}}</strong></h6>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p>{{$project->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper -->
            <div style="--swiper-navigation-color: #808080; --swiper-pagination-color: #808080"
                class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($project->photos as $photo)
                    <div class="swiper-slide px-5">
                        <img src="{{ Storage::url($photo->path)}}" class="img-fluid" />
                    </div>
                    @endforeach
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper d-sm-none d-md-block">
                <div class="swiper-wrapper">
                    @foreach ($project->photos as $photo)
                    <div class="swiper-slide">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ Storage::url($photo->path)}}" class="img-fluid" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-layout>