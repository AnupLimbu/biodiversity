@extends('master')

@section('content')
    <div class="navbar-filler  bg-[#abcea0]">
    </div>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white  antialiased">
        <h2 class="text-center mb-5 text-2xl font-bold text-gray-900 ">{{$project->title}}</h2>
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full  format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <div style="display: flex;justify-content: center;margin-bottom: 10px">
                    <img src="{{asset($project->image)}}" alt="" style="max-height: 60%;max-width: 80%"> <br>
                </div>
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                            <div>
                                <p class="text-base text-gray-500 dark:text-gray-400">Posted on: {{\Carbon\Carbon::make($project->created_at)->toDateString()}}</p>
                                <br>
                                <p style="margin-top: -20px" class="text-sm text-gray-500 dark:text-gray-400">Project Started on: {{\Carbon\Carbon::make($project->start_date)->toDateString()}}</p>
                            </div>
                        </div>
                    </address>
                </header>
               {!! $project->description !!}
            </article>
        </div>
    </main>
    @if($projects->count()>0)
        <aside aria-label="Related articles" class="pt-2 mb-10 bg-gray-50 ">
            <div class="px-4 mx-auto max-w-screen-xl">
                <h2 class="mb-8 text-2xl font-bold text-green-800">Other Projects</h2>
                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach($projects as $project_1)
                        @php($link="/projects/".$project_1->id)
                        <article class="max-w-xs zoom-image-container">
                            <a href="{{$link}}">
                                <img src="{{asset($project_1->image)}}" class="mb-3 rounded-lg" alt="Image 1" style="width: 275px;height: 195px;object-fit: cover   ">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 ">
                                <a href="{{$link}}">{{$project_1->title}}</a>
                            </h2>
                            <p>{!! \Illuminate\Support\Str::limit($project->description) !!}</p>
                            <a href="{{$link}}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                Read More
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </aside>
    @endif
@endsection
