@extends('master')
@section('content')
        <section class="container mx-auto  max-w-screen-xl bg-white ">
            <section class="bg-white ">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                    <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-black">Our team</h2>
                        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">The Talented People Behind the Scenes of the Organization</p>
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
            </section>
        </section>
@endsection
