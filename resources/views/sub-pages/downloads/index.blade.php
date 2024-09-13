@extends('master')
@section('content')
    <div class="navbar-filler" style="background-color: #abcea0;">
    </div>
    <section class="container mx-auto mt-16  min-h-[600px]  mb-12">
            <div class="row d-flex">
                <div class="flex flex-wrap justify-center " >
                    <div class="w-full ">
                        <div class="mx-auto max-w-[510px] text-center ">
                            <h2 class="text-4xl font-extrabold text-center text-green-800 mb-12 ">
                                {{ucfirst($download_type)}}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($downloads as $download)
                        <div class="bg-white shadow-4 rounded-lg overflow-hidden p-1 flex flex-col h-[550px] zoom-image-container">
                            <a href="/{{$download->file}}" class="" target="_blank">
                                <div class="relative w-full h-[430px] overflow-hidden">
                                    <img src="{{asset($download->thumbnail)}}" alt="Description of image" class="absolute top-0 left-0 w-full h-auto">
                                </div>
                                <div class="pt-6 px-3 mt-auto">
                                    <h1 class="text-2xl font-semibold line-clamp-2">{{$download->name}}</h1>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">{{$download->description}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
    </section>
@endsection

