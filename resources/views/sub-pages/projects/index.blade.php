@extends('master')

@section('content')
    <div class="navbar-filler  bg-[#abcea0]">
    </div>
{{--    <section class="bg-white py-6 sm:py-8 lg:py-12">--}}
@php($pro_type=isset($projects)?'All':(isset($ongoing)?'Ongoing':'Completed'))
@php($projects=$projects??$ongoing??$completed)
        <section class="pt-20 py-6 sm:py-8 lg:py-12 pb-10 lg:pb-20" style="min-height: 80vh">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center " >
                    <div class="w-full ">
                        <div class="mx-auto max-w-[510px] text-center ">
                            <h2
                                class="text-4xl font-extrabold text-center text-green-800 mb-10"
                            >
                                {{$pro_type}} Projects
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap  ">
                @foreach($projects as $project)
                        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                            <div class="w-full mb-10">
                                <div class="mb-6 overflow-hidden rounded">
                                    <a href="{{'/projects/'.$project->id}}">
                                        <img
                                            src="{{asset($project->image)}}"
                                            alt="image"
                                            class="w-full"
                                            style="max-width: 435px;max-height:248px;object-fit:cover;"
                                        />
                                    </a>
                                </div>
                                <div>
                          <span
                             class="inline-block px-4 py-1 mb-3 text-xs font-semibold leading-loose text-center secondary-button rounded-lg"
                          >
                          {{\Carbon\Carbon::make($project->created_at)->toDateString()}}
                        </span>
                                    <h3>
                                        <a href="{{'/projects/'.$project->id}}" class="inline-block mb-2 text-xl font-semibold text-dark  hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                           {{$project->title}}
                                        </a>
                                    </h3>
                                    <p>{!! \Illuminate\Support\Str::limit($project->description,150) !!}</p>
                                </div>
                            </div>
                        </div>

                @endforeach
                </div>
            </div>
        </section>
@endsection
