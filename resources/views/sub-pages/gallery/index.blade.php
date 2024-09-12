@extends('master')
@section("scripts")
@endsection
@section('content')
    <div class="navbar-filler" style="background-color: #abcea0;">
    </div>
    <section class="container mx-auto mt-16  min-h-[600px]  mb-12">
            <div class="row d-flex">
                <div class="flex flex-wrap justify-center " >
                    <div class="w-full ">
                        <div class="mx-auto max-w-[510px] text-center ">
                            <h2
                                class="text-4xl font-extrabold text-center text-green-800 mb-12 "
                            >
                                Our Gallery
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($gallery as $image)
                        <div class="h-[500px] image-container">
                            <a href="{{asset($image->thumbnail)}}" class="zoom-image-container" data-lightbox="models" data-title="{{$image->name}}">
                                <img src="{{asset($image->thumbnail)}}" alt="awards and certificates"  class="w-full h-full object-cover">
                            </a>
                        </div>
{{--                    <div class="gallery_image d-flex align-items-center col-md-4 my-2 bg-body-secondary border aos-init aos-animate" data-aos="zoom-in">--}}
{{--                        <a href="{{asset($image->thumbnail)}}" data-lightbox="models" data-title="{{$image->name}}">--}}
{{--                            <img src="{{asset($image->thumbnail)}}" alt="awards and certificates" class="img-fluid object-fill-contain">--}}
{{--                        </a>--}}
{{--                    </div>--}}
                @endforeach
                </div>

            </div>
    </section>
@endsection
