@extends('master')
@section('content')
        <section class="container mx-auto  max-w-screen-xl bg-white ">
            <section class="bg-white ">
                @if($teams->count()>0)
                    <div class="px-2 mx-auto max-w-screen-xl text-center pt-16 {{$advisor->count()>0||$staff->count()>0||$volunteer->count()>0?'':'min-h-[100vh]'}}">
                        <div class="mx-auto mb-1 max-w-screen-sm lg:mb-16">
                            <h2 class="text-4xl font-extrabold text-center text-green-800 mt-12">Our team</h2>
                        </div>
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            @foreach($teams as $team)
                                <div class="text-center text-gray-500 dark:text-gray-400">
                                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{$team->image}}" alt="{{$team->image}}">
                                    <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                        <a href="#" style="color: #959595">{{$team->name}}</a>
                                    </h3>
                                    <p>{{$team->designation}}</p>
                                    <ul class="flex justify-center mt-4 space-x-4" style="font-size: 21px;">
                                        @if($team->facebook_link)
                                            <li>
                                                <a href="{{$team->facebook_link}}" class="text-[#39569c] ">
                                                    <i class="fa-brands fa-facebook" title="facebook"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if($team->instagram_link)
                                            <li>
                                                <a href="{{$team->instagram_link}}" class="text-[#39569c] ">
                                                    <i class="fa-brands fa-instagram" title="Instagram"></i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if($advisor->count()>0)
                        <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$team->count()>0||$staff->count()>0||$volunteer->count()>0?'':"min-h-[100vh]"}}" >
                            <div class="mx-auto mb-1 max-w-screen-sm lg:mb-16">
                                <h2 class="text-4xl font-extrabold text-center text-green-800">Our Advisors</h2>
                            </div>
                            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                                @foreach($advisor as $team)
                                    <div class="text-center text-gray-500 dark:text-gray-400">
                                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{$team->image}}" alt="{{$team->image}}">
                                        <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                            <a href="#" style="color: #959595">{{$team->name}}</a>
                                        </h3>
                                        <p>{{$team->designation}}</p>
                                        <ul class="flex justify-center mt-4 space-x-4" style="font-size: 21px;">
                                            @if($team->facebook_link)
                                                <li>
                                                    <a href="{{$team->facebook_link}}" class="text-[#39569c] ">
                                                        <i class="fa-brands fa-facebook" title="facebook"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->instagram_link)
                                                <li>
                                                    <a href="{{$team->instagram_link}}" class="text-[#39569c] ">
                                                        <i class="fa-brands fa-instagram" title="Instagram"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif
                    @if($staff->count()>0)
                        <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$team->count()>0||$advisor->count()>0||$volunteer->count()>0?'':"min-h-[100vh]"}}" >
                            <div class="mx-auto mb-1 max-w-screen-sm lg:mb-16">
                                <h2 class="text-4xl font-extrabold text-center text-green-800">Our Staffs</h2>
                            </div>
                            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                                @foreach($staff as $team)
                                    <div class="text-center text-gray-500 dark:text-gray-400">
                                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{$team->image}}" alt="{{$team->image}}">
                                        <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                            <a href="#" style="color: #959595">{{$team->name}}</a>
                                        </h3>
                                        <p>{{$team->designation}}</p>
                                        <ul class="flex justify-center mt-4 space-x-4" style="font-size: 21px;">
                                            @if($team->facebook_link)
                                                <li>
                                                    <a href="{{$team->facebook_link}}" class="text-[#39569c] ">
                                                        <i class="fa-brands fa-facebook" title="facebook"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->instagram_link)
                                                <li>
                                                    <a href="{{$team->instagram_link}}" class="text-[#39569c] ">
                                                        <i class="fa-brands fa-instagram" title="Instagram"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    @endif
               @if($volunteer->count()>0)
                        <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$team->count()>0||$staff->count()>0||$advisor->count()>0?'':"min-h-[100vh]"}}" >
                            <div class="mx-auto mb-1 max-w-screen-sm lg:mb-16">
                                <h2 class="text-4xl font-extrabold text-center text-green-800">Our Volunteers</h2>
                            </div>
                            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                                @foreach($volunteer as $team)
                                    <div class="text-center text-gray-500 dark:text-gray-400">
                                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{$team->image}}" alt="{{$team->image}}">
                                        <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                            <a href="#" style="color: #959595">{{$team->name}}</a>
                                        </h3>
                                        <p>{{$team->designation}}</p>
                                        <ul class="flex justify-center mt-4 space-x-4" style="font-size: 21px;">
                                            @if($team->facebook_link)
                                                <li>
                                                    <a href="{{$team->facebook_link}}" class="text-[#39569c] ">
                                                        <i class="fa-brands fa-facebook" title="facebook"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->instagram_link)
                                                <li>
                                                    <a href="{{$team->instagram_link}}" class="text-[#39569c] ">
                                                        <i class="fa-brands fa-instagram" title="Instagram"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    @endif
            </section>
        </section>
@endsection
