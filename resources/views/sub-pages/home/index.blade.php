@extends('master')

@section('content')
    <section id="banner" class="min-h-screen">
        <video class="video-background" autoplay muted loop>
            <source src="{{asset('videos/banner-video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <a class="arrow bounce" data-scroll-to="mission" style="display: block;">
        </a>
    </section>

    <section id="mission" class="h-full w-full">
        <!-- component -->
            <div class="bg-[#2c8769] text-white py-8">
                <div class="container max-w-screen-xl mx-auto flex flex-col items-start md:flex-row my-0 md:my-4">
                    <div class="flex flex-col w-full md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                        <img src="{{asset('images/our_mission.png')}}">
                    </div>
                    <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                        <div class="container mx-auto w-full h-full">
                            <div class="relative wrap overflow-hidden p-10 h-full">
                                <div class="border-2-2 border-yellow-555 absolute h-full border"
                                     style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                                <div class="border-2-2 border-yellow-555 absolute h-full border"
                                     style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-left">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">Biodiversity Research and Conservation</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            Our mission is to deepen our understanding of global biodiversity and implement strategies that protect and sustain it.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between items-center w-full right-timeline fade-in-right">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                                        <p class="mb-3 text-base text-yellow-300">Habitat and Ecosystem Restoration</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            We are committed to the restoration of degraded habitats and ecosystems to enhance their health and resilience.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-left">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-yellow-300">Empowering Communities for Lasting Environmental Impact</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            Our goal is to empower local communities to play an active role in environmental stewardship and sustainable development.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between items-center w-full right-timeline fade-in-right">
                                    <div class="order-1 w-5/12"></div>

                                    <div class="order-1  w-5/12 px-1 py-4">
                                        <p class="mb-3 text-base text-yellow-300">Economic and Agricultural Empowerment</p>
                                        <p class="text-[20px] leading-snug text-gray-50 text-opacity-100">
                                            We focus on enhancing economic opportunities and sustainable agricultural practices to benefit both people and the environment.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline fade-in-left">
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

    <section id="geographical-regions" class="mb-4">
        <div class="flex justify-center">
            <img src="{{asset('images/service_areas.png')}}" alt="Image 1" class="w-auto h-auto object-cover">
        </div>
        <div class=" flex justify-center">
            <div class="max-w-screen-xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mx-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Hindu Kush Himalaya" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">Hindu Kush Himalaya Range</h2>
                        <p class="text-gray-700">A majestic mountain range that spans across several countries, providing unique biodiversity and ecosystems.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="National Parks" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">National Parks, Conservation Areas and Wildlife Reserves of Nepal</h2>
                        <p class="text-gray-700">Protected areas that are home to diverse flora and fauna, crucial for conservation efforts in Nepal.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Terai Arc Landscape" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">Terai Arc Landscape</h2>
                        <p class="text-gray-700">A vital ecological corridor extending across Nepal and India, supporting endangered species and habitat connectivity.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="New Conservation Landscapes" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">Newly Designated Conservation Landscapes (ECTC)</h2>
                        <p class="text-gray-700">Recent conservation initiatives aimed at preserving new areas of ecological importance.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Buffer Zones" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">Buffer Zones of National Parks</h2>
                        <p class="text-gray-700">Areas surrounding national parks that play a critical role in reducing human-wildlife conflict and preserving ecosystems.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="National Forests" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">National Forests and Its Buffer Zones</h2>
                        <p class="text-gray-700">Forested areas and their surrounding buffer zones essential for maintaining ecological balance and biodiversity.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Community Forests" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-green-800 mb-3">Community Forest User Groups</h2>
                        <p class="text-gray-700">Local groups managing community forests, playing a key role in sustainable forest management and conservation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="our-donors" class=" bg-[#f2f2f2]">

        <div class="flex justify-center">
            <img src="{{asset('images/our_donors.png')}}" alt="Image 1" class="w-auto h-auto object-cover">
        </div>

        <div class="max-w-screen-xl mx-auto  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                    <a href="https://www.aucklandzoo.co.nz" target="_blank">
                        <img src="{{asset('images/donors/auckland_logo.jpeg')}}" alt="Donor 1" class="w-full h-20 object-contain">
                    </a>
                </div>
                <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                    <a href="https://ideawild.org" target="_blank">
                        <img src="{{asset('images/donors/idea_wild_logo.jpg')}}" alt="Donor 2" class="w-full h-20 object-contain">
                    </a>
                </div>
                <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                    <a href="https://www.speciesconservation.org" target="_blank">
                        <img src="{{asset('images/donors/mbzsc_logo.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                    </a>
                </div>
                <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                    <a href="https://www.rufford.org" target="_blank">
                        <img src="{{asset('images/donors/rufford_logo.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                    </a>
                </div>
                <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                    <a href="https://ses-explore.org" target="_blank">
                        <img src="{{asset('images/donors/ses_logo.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                    </a>
                </div>
                <!-- Add more logos as needed -->
        </div>

    </section>
@endsection
