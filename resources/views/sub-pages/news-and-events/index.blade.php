@extends('master')

@section('content')
    <div class="navbar-filler  ">
    </div>
    <div class="min-h-screen mb-10">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold text-center text-green-800 my-12">
                News & Events
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($newsAndEvents->take(2) as $k=>$entity)
                    <div class="bg-white shadow-4 rounded-lg overflow-hidden p-3 flex flex-col h-full zoom-image-container">
                        <div class="image-container rounded-lg flex-shrink-0">
                            <img src="{{asset('storage/'.$entity->thumbnail)}}" alt="{{$entity->title}}" class="w-full h-80 object-cover">
                        </div>
                        <div class="pt-6 flex-grow">
                            <h1 class="text-2xl mb-2 line-clamp-2">{{$entity->title}}</h1>
                            <p class="text-gray-700 mb-2 line-clamp-3">{{$entity->description}}</p>
                        </div>
                        <div class="mt-auto">
                            @if($entity->type=='event')
                                <p class="text-gray-500 text-sm">Event Date: {{\Carbon\Carbon::create($entity->event_start_date)->format('F j, Y')}} to {{\Carbon\Carbon::create($entity->event_end_date)->format('F j, Y')}}</p>
                            @else
                                <p class="text-gray-500 text-sm">Published on: {{\Carbon\Carbon::create($entity->published_date)->format('F j, Y')}}</p>
                            @endif
                            <a href="/news-and-events/{{$entity->id}}" class="mt-auto hover:underline">
                                Learn More
                            </a>
                        </div>
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
                                            <img src="{{asset('storage/'.$entity->thumbnail)}}" alt="{{$entity->title}}" class="w-full h-48 object-cover zoom-image"> <!-- Reduced height -->
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

                                    <h1 class="text-xl mb-2 line-clamp-2">{{$entity->title}}</h1>
                                    <p class="text-gray-700 mb-2 text-sm line-clamp-2">{{$entity->description}}</p>
                                    <a href="/news-and-events/{{$entity->id}}" target="_blank" class="mt-auto hover:underline">
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
