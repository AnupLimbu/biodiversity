@extends('master')

@section('content')
    <video class="video-background" autoplay muted loop>
        <source src="{{asset('videos/banner-video.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <a class="arrow bounce" data-scroll-to="mission" style="display: block;">
    </a>
    <section id="mission" class="absolute top-[100vh] h-screen w-full">
        <!-- component -->
        <section>
            <div class="bg-[#2c8769] text-white py-8">
                <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
                    <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                        <img src="{{asset('images/our_mission.png')}}">
                    </div>
                    <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                        <div class="container mx-auto w-full h-full">
                            <div class="relative wrap overflow-hidden p-10 h-full">
                                <div class="border-2-2 border-yellow-555 absolute h-full border"
                                     style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                                <div class="border-2-2 border-yellow-555 absolute h-full border"
                                     style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">Biodiversity Research and Conservation</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            Our mission is to deepen our understanding of global biodiversity and implement strategies that protect and sustain it.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                                        <p class="mb-3 text-base text-yellow-300">Habitat and Ecosystem Restoration</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            We are committed to the restoration of degraded habitats and ecosystems to enhance their health and resilience.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">Empowering Communities for Lasting Environmental Impact</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            Our goal is to empower local communities to play an active role in environmental stewardship and sustainable development.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                    <div class="order-1 w-5/12"></div>

                                    <div class="order-1  w-5/12 px-1 py-4">
                                        <p class="mb-3 text-base text-yellow-300">Economic and Agricultural Empowerment</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            We focus on enhancing economic opportunities and sustainable agricultural practices to benefit both people and the environment.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">Human-Wildlife Conflict Mitigation</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            Our mission is to address and reduce conflicts between humans and wildlife through innovative solutions and community-based strategies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--                                <img class="mx-auto -mt-42 md:-mt-42" src="{{asset('images/woker.png')}}" />--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
@endsection
