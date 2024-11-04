@extends('website.layout.master')
@section('content')



    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            @foreach($ourBusinesses as $business)
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">
                        {{ app()->getLocale() === 'ar' ? $business->title_ar : $business->title_en }}
                    </h6>
                    <h1 class="mb-4">
                        {{ app()->getLocale() === 'ar' ? $business->business_description_ar : $business->business_description_en }}

                    </h1>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid1" src="{{url('storage/'.$ourBusinessImage->image)}}" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="{{url('storage/'.$ourBusinessImage->image)}}" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Projects End -->

@stop
