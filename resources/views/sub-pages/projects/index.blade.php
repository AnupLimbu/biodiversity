@extends('master')

@section('content')
    <div class="navbar-filler  bg-[#abcea0]">
    </div>
{{--    <section class="bg-white py-6 sm:py-8 lg:py-12">--}}
@php($pro_type=isset($projects)?'All':(isset($ongoing)?'Ongoing':'Completed'))
@php($projects=$projects??$ongoing??$completed)
        <section class="pt-20 py-6 sm:py-8 lg:py-12 pb-10 lg:pb-20" style="min-height: 80vh">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center mb-12" >
                    <div class="w-full ">
                        <div class="mx-auto max-w-[510px] text-center ">
                          <span class="text-4xl font-extrabold text-center text-green-800 mb-12">
                             Our {{$pro_type}} Projects
                            </span>

                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap  md:gap-0 lg:gap-6">
                @foreach($projects as $project)
                        <div class="bg-white shadow-4 rounded-lg overflow-hidden p-3 mt-3 flex flex-col h-full zoom-image-container w-full  md:w-[50%] lg:w-[32%]">
                            <div class="image-container rounded-lg flex-shrink-0">
                                <a href="{{'/projects/'.$project->id}}">
                                <img src="{{asset($project->image)}}" alt="{{$project->title}}" class="w-full h-80 object-cover">
                                </a>
                            </div>
                            <div class="pt-6 flex-grow">
                                <h1 class="text-2xl mb-2 line-clamp-2">{{ \Illuminate\Support\Str::limit($project->title,35)}}</h1>
                                <p class="text-gray-700 mb-2 ">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($project->description))!!}
                                </p>
                            </div>
                            <div class="mt-auto">
                                <p class="text-gray-500 text-sm">Published on: {{\Carbon\Carbon::create($project->$project)->format('F j, Y')}}</p>
                                <a href="{{'/projects/'.$project->id}}" class="mt-auto hover:underline">
                                    Learn More
                                </a>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
        </section>
@endsection
