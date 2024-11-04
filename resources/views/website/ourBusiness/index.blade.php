@extends('website.layout.master')
@section('content')

    <!-- Projects Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{__('nigc.our_projects')}}</h5>
                </div>
                <h1 class="display-5 mb-4">{{__('nigc.brief_projects')}}</h1>

                {{--                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>--}}

            </div>
            <div class="row g-4">
                @foreach($ourBusinesses as $business)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item shadow-lg rounded overflow-hidden position-relative">
                            <div class="service-img">
                                @if ($business->defaultImage)
                                    <img src="{{ asset('storage/' . $business->defaultImage->image) }}" class="img-fluid w-100 fixed-size" alt="Image">
                                @else
                                    <img src="{{ asset('storage/default-image-path.jpg') }}" class="img-fluid w-100 fixed-size" alt="Default Image">
                                @endif
                            </div>
                            <div class="service-details position-absolute w-100 text-center">
                                <div class="p-3">
                                    <h4 class="text-primary">
                                        {{ app()->getLocale() === 'ar' ? $business->title_ar : $business->title_en }}
                                    </h4>
                                    <p class="text-secondary">
                                        {{ app()->getLocale() === 'ar' ? $business->business_description_ar : $business->business_description_en }}
                                    </p>
                                    <form action="{{ route('admin.ourBusiness.showDetails', $business->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-secondary rounded-pill">{{ __('dashboard.details') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Projects End -->

@stop
