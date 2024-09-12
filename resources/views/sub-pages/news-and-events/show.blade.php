@extends('master')

@section('content')
    <div class="navbar-filler  bg-[#abcea0]">
    </div>
    <main class="pt-8 pb-8 lg:pt-16 bg-white  antialiased">
        <h2 class="text-center mb-5 text-4xl font-bold text-gray-900 ">{{$newsAndEvent->title}}</h2>
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full  format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
{{--                <div style="display: flex;justify-content: center;margin-bottom: 10px">--}}
{{--                    <img src="{{$project->image}}" alt="" style="max-height: 60%;max-width: 80%"> <br>--}}
{{--                </div>--}}
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                            <div>
                                <p class="text-base text-gray-500 dark:text-gray-400">Published on: {{\Carbon\Carbon::create($newsAndEvent->published_date)->format('F j, Y')}}</p>
                                <br>
{{--                                <p style="margin-top: -20px" class="text-sm text-gray-500 dark:text-gray-400">Project Started on: {{\Carbon\Carbon::make($project->start_date)->toDateString()}}</p>--}}
                            </div>
                        </div>
                    </address>
                </header>
                <div>
                {!! $newsAndEvent->news_and_event_body !!}
            </article>
        </div>
    </main>
@if(count($newsAndEvents)>0)
    <aside aria-label="Related articles" class="py-4 bg-gray-50 ">
        <div class="container mx-auto">
            <h2 class="my-4 text-2xl font-bold text-gray-900 ">Other News & Events</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($newsAndEvents as $entity)
                    @php($link="/news-and-events/".$entity->id)
                    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col h-full">
                        <div class="relative h-48 mb-4">
                            <img src="{{asset('storage/'.$entity->thumbnail)}}" class="w-full h-full object-cover rounded-lg" alt="Image 1">
                        </div>
                        <h2 class="mb-2 text-lg sm:text-xl font-bold leading-tight text-gray-900">
                            <a href="{{$link}}" class="hover:text-primary-600">{{$entity->title}}</a>
                        </h2>
                        <p class="mb-4 text-gray-500 dark:text-gray-400 text-ellipsis overflow-hidden whitespace-nowrap">
                            {{$entity->description}}
                        </p>
                        <a href="{{$link}}" class="inline-flex items-center font-medium underline-offset-4 hover:underline mt-auto">
                            Read More
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </aside>
@endif
@endsection
