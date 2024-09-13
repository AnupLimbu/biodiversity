@extends('master')
@section("style")
    <style>
        /*.team_member_css{*/
        /*    padding: 10px;*/
        /*    border-radius: 85px 0px 85px 0px;*/
        /*    box-shadow:*/
        /*        rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px*/

        /*    ;*/
        /*}*/
    </style>
@endsection
@section('content')
    <div class="navbar-filler" style="background-color: #abcea0;">
    </div>
    <div class="mt-10"></div>
        <section class="container mx-auto  max-w-screen-xl bg-white ">
            <section class="bg-white {{$teams->count()==0?'min-h-screen':'h-full'}}">
{{--                    <div class="px-2 mx-auto max-w-screen-xl text-center pt-16 {{$advisor->count()>0||$staff->count()>0||$volunteer->count()>0?'':'min-h-[100vh]'}}">--}}
{{--                        <div class="mx-auto mb-1 max-w-screen-sm lg:mb-16">--}}
{{--                            <h2 class="text-4xl font-extrabold text-center text-green-800 mt-0 underline">Our Team</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                @if($teams->count()>0)
                    <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$staff->count()>0||$advisor->count()>0||$volunteer->count()>0?'':"min-h-[100vh]"}}" >
                        <div class="mx-auto mb-1 max-w-screen-sm lg:mb-6">
                            <hr>
                            <h2 class="text-2xl py-1 font-extrabold text-center text-green-800">Executive Members</h2>
                            <hr>
                        </div>
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mb-12">
                            @foreach($teams as $team)
                                <div class="text-center text-gray-500 dark:text-gray-400 team_member_css" >
                                    <img class="mx-auto mb-4  rounded-full" src="{{$team->image}}" alt="{{$team->image}}" style="width: 15rem;height: 15rem">
                                    <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                        <a class="underline" href="#" style="color: rgb(55 175 101)">{{$team->name}}</a>
                                    </h3>
{{--                                    'research_gate_link'=>'nullable',--}}
{{--                                    'google_scholar_link'=>'nullable',--}}
{{--                                    'linkedin_link'=>'nullable',--}}
                                    <h3 style="color: #414548">{{$team->designation}}</h3>
                                    <ul class="flex justify-center mt-0 space-x-4" style="font-size: 21px;">
                                        @if($team->linkedin_link)
                                            <li>
                                                <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Linkedin">
                                                    <i class="fa-brands fa-linkedin-in"></i>

                                                </a>
                                            </li>
                                        @endif
                                        @if($team->research_gate_link)
                                            <li>
                                                <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Researchgate">
                                                    <i class="fa-brands fa-researchgate"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if($team->google_scholar_link)
                                            <li>
                                                <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Google Scholar">
                                                    <i class="fa-brands fa-google-scholar"></i>
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
                        <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$teams->count()>0||$staff->count()>0||$volunteer->count()>0?'':"min-h-[100vh]"}}" >
                            <div class="mx-auto mb-1 max-w-screen-sm lg:mb-6">
                                <hr>
                                <h2 class="text-2xl py-1 font-extrabold text-center text-green-800">Our Advisors</h2>
                                <hr>
                            </div>
                            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mb-12">
                                @foreach($advisor as $team)
                                    <div class="text-center text-gray-500 dark:text-gray-400 team_member_css">
                                        <img class="mx-auto mb-4  rounded-full" src="{{$team->image}}" alt="{{$team->image}}" style="width: 15rem;height: 15rem">
                                        <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                            <a class="underline" href="#" style="color: rgb(55 175 101)">{{$team->name}}</a>
                                        </h3>
                                        <h3 style="color: #414548">{{$team->designation}}</h3>
                                        <ul class="flex justify-center mt-0 space-x-4" style="font-size: 21px;">
                                            @if($team->linkedin_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Linkedin">
                                                        <i class="fa-brands fa-linkedin-in"></i>

                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->research_gate_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Researchgate">
                                                        <i class="fa-brands fa-researchgate"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->google_scholar_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Google Scholar">
                                                        <i class="fa-brands fa-google-scholar"></i>
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
                        <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$teams->count()>0||$advisor->count()>0||$volunteer->count()>0?'':"min-h-[100vh]"}}" >
                            <div class="mx-auto mb-1 max-w-screen-sm lg:mb-6">
                                <hr>
                                <h2 class="text-2xl py-1 font-extrabold text-center text-green-800">Our Staffs</h2><hr>
                            </div>
                            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mb-12">
                                @foreach($staff as $team)
                                    <div class="text-center text-gray-500 dark:text-gray-400 team_member_css">
                                        <img class="mx-auto mb-4  rounded-full" src="{{$team->image}}" alt="{{$team->image}}" style="width: 15rem;height: 15rem">
                                        <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                            <a class="underline" href="#" style="color: rgb(55 175 101)">{{$team->name}}</a>
                                        </h3>
                                        <h3 style="color: #414548">{{$team->designation}}</h3>
                                        <ul class="flex justify-center mt-0 space-x-4" style="font-size: 21px;">
                                            @if($team->linkedin_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Linkedin">
                                                        <i class="fa-brands fa-linkedin-in"></i>

                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->research_gate_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Researchgate">
                                                        <i class="fa-brands fa-researchgate"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->google_scholar_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Google Scholar">
                                                        <i class="fa-brands fa-google-scholar"></i>
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
                        <div class="px-2 mx-auto max-w-screen-xl text-center lg:px-6 {{$teams->count()>0||$staff->count()>0||$advisor->count()>0?'':"min-h-[100vh]"}}" >
                            <div class="mx-auto mb-1 max-w-screen-sm lg:mb-6">
                                <hr>
                                <h2 class="text-2xl py-1 font-extrabold text-center text-green-800">Our Volunteers</h2>
                                <hr>
                            </div>
                            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mb-12">
                                @foreach($volunteer as $team)
                                    <div class="text-center text-gray-500 dark:text-gray-400 team_member_css">
                                        <img class="mx-auto mb-4  rounded-full" src="{{$team->image}}" alt="{{$team->image}}" style="width: 15rem;height: 15rem">
                                        <h3 class="mb-1 text-2xl font-bold tracking-tight  dark:text-black">
                                            <a class="underline" href="#" style="color: rgb(55 175 101)">{{$team->name}}</a>
                                        </h3>
                                        <h3 style="color: #414548">{{$team->designation}}</h3>
                                        <ul class="flex justify-center mt-0 space-x-4" style="font-size: 21px;">
                                            @if($team->linkedin_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Linkedin">
                                                        <i class="fa-brands fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->research_gate_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Researchgate">

                                                        <i class="fa-brands fa-researchgate"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($team->google_scholar_link)
                                                <li>
                                                    <a href="{{$team->research_gate_link}}" class="text-[#39569c] " title="Google Scholar">
                                                        <i class="fa-brands fa-google-scholar"></i>
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
