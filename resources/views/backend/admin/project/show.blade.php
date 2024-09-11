@extends('backend.master')
@section('title')
    Project | show
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Project","sub_heading"=>'show'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="row ">
        <div class="col-12">
            <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased">
                <h2 class="text-center mb-8 text-2xl font-bold text-gray-900 ">{{$project->title}}</h2>
                <div style="display: flex;justify-content: center;margin-bottom: 10px">
                    <img src="{{asset($project->image)}}" alt="" style="max-height: 40%;max-width: 40%"> <br>
                </div>
                <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                    <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
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
        </div>
    </div>
@stop
@push('scripts')
    <script type="text/javascript">

    </script>
    @include("backend.admin.project.script")
@endpush

