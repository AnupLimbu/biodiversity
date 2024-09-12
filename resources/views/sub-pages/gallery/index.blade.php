@extends('master')
@section("style")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css"
          integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
@section("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.js"
            integrity="sha512-oaWLach/xXzklmJDBjHkXngTCAkPch9YFqOSphnw590sy86CVEnAbcpw17QjkUGppGmVJojwqHmGO/7Xxx6HCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        lightbox.option({
            'resizeDuration': 500,
            // 'wrapAround': true
        })
    </script>
@endsection
