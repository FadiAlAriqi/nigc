@extends('website.layout.master')
@section('content')



    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col text-center mb-4">
                        <h1 class="text-primary font-weight-normal text-uppercase mb-3">
                            {{ $ourBusinesses["title_".app()->getLocale()] }}
                        </h1>
                        <h5 class="mb-4">
                            {{ $ourBusinesses["business_description_".app()->getLocale()] }}
                        </h5>
                    </div>
                </div>

            <div class="row mx-1 portfolio-container">
                    @foreach($ourBusinesses->our_business_images as $ourBusinessImage) <!-- Loop through associated images -->
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                        @if ($ourBusinessImage && isset($ourBusinessImage->image))
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="{{ url('storage/' . $ourBusinessImage->image) }}" alt="">
                                </div>
                                <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary m-1" href="{{ url('storage/' . $ourBusinessImage->image) }}" data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <p>No images available.</p>
                            </div>
                        @endif
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    <!-- Projects End -->

@stop
