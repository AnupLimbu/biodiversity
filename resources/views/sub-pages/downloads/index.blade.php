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
                                Downloads
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($downloads as $download)
                    <div class="p-3 border border-gray-200 rounded-lg " >
                        <div class="max-w-sm bg-white    zoom-image-container">
                            <a href="{{asset($download->file)}}">
                                <img class="rounded-t-lg object-cover" src="{{asset($download->thumbnail)}}" alt="download_img"/>
                            </a>
                            <div class="p-5">
                                <a href="{{asset($download->file)}}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-2">{{$download->name}}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">{{$download->description}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
                </div>

            </div>
    </section>
@endsection

