@extends('master')

@section('content')
    <style>
        .image-container {
            position: relative; /* Ensure container positioning */
            overflow: hidden; /* Hide overflow to keep image contained */
        }
        .zoom-image-container img {
            transition: transform 0.6s ease; /* Smooth transition for zoom effect */
            transform-origin: center center; /* Center the zoom effect */
            display: block; /* Remove any extra space below the image */
        }
        .zoom-image-container:hover img {
            transform: scale(1.05); /* Zoom effect on hover without enlarging container */
        }
    </style>
    <div class="navbar-filler  ">
    </div>
    <div class="min-h-screen mb-10">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold text-center text-green-800 my-12">
                News & Events
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($newsAndEvents->take(2) as $k=>$entity)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden p-3 zoom-image-container">
                        <a href="{{asset('storage/'.$entity->file)}}" target="_blank">
                            <div class=" image-container rounded-lg">
                                <img src="{{asset('storage/'.$entity->banner_img)}}" alt="{{$entity->title}}" class="w-full h-80 object-cover">
                            </div>
                            <div class="pt-6">
                                <h1 class="text-2xl mb-2">{{$entity->title}}</h1>
                                <p class="text-gray-700 mb-2">{{$entity->description}}</p>
                                @if($entity->type=='event')
                                    <p class="text-gray-500 text-sm">Event Date: {{\Carbon\Carbon::create($entity->event_start_date)->format('F j, Y')}} to {{\Carbon\Carbon::create($entity->event_end_date)->format('F j, Y')}}</p>
                                @else
                                    <p class="text-gray-500 text-sm">Published on: {{\Carbon\Carbon::create($entity->published_date)->format('F j, Y')}}</p>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @if($newsAndEvents->skip(2)->count()>0)
        <div>
            <div class="container mx-auto">
                <h2 class="text-4xl font-extrabold text-left text-green-800 mt-[110px] mb-10">
                    Others
                </h2>
                <div class="grid grid-cols-1 gap-6 pb-4">
                    @foreach($newsAndEvents->skip(2) as $k=>$entity)
                        <div class="bg-white shadow-4 rounded-lg overflow-hidden flex flex-col lg:flex-row zoom-image-container">
                            <!-- Image Section -->
                            <div class="flex-shrink-0 lg:w-1/3 p-3">
                                <a href="{{asset('storage/'.$entity->file)}}" target="_blank">
                                    <div class="image-container rounded-lg">
                                        <img src="{{asset('storage/'.$entity->banner_img)}}" alt="{{$entity->title}}" class="w-full h-48 object-cover zoom-image"> <!-- Reduced height -->
                                    </div>
                                </a>
                            </div>
                            <!-- Text Section -->
                            <div class="flex-1 p-4 lg:p-6 flex flex-col justify-between">
                                @if($entity->type=='event')
                                    <p class="text-gray-500 text-xs pb-3">Event Date: {{\Carbon\Carbon::create($entity->event_start_date)->format('F j, Y')}} to {{\Carbon\Carbon::create($entity->event_end_date)->format('F j, Y')}}</p> <!-- Reduced text size -->
                                @else
                                    <p class="text-gray-500 text-xs pb-3">Published on: {{\Carbon\Carbon::create($entity->published_date)->format('F j, Y')}}</p> <!-- Reduced text size -->
                                @endif

                                <h1 class="text-xl mb-2">{{$entity->title}}</h1>
                                 <p class="text-gray-700 mb-2 text-sm">{{$entity->description}}</p>
                                 <a href="{{asset('storage/'.$entity->file)}}" target="_blank" class="mt-auto hover:underline">
                                     Learn More
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
             </div>
        </div>
        @endif


    </div>

@endsection
