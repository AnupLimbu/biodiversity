@extends('master')

@section('content')
    <div  class="navbar-filler" style="background-color: #abcea0;">
    </div>

    <div class="min-h-[600px]" style="background-color: #abcea0;">
        <div class="container mx-auto py-4">
            <div class="flex flex-col md:flex-row items-center md:items-end gap-6 md:gap-8">
                <div class="md:w-1/2 py-4">
                    <div class="md:full flex justify-center mx-auto">
                        <img src="{{asset('images/logo.png')}}" alt="Placeholder Image" class="w-[320px] h-[280px] object-cover border-white  border-0" style="clip-path: circle()">
                    </div>
                    <div class="flex flex-col justify-center text-center md:text-left">
                        <h1 class="text-[50px] font-weight-bolder font-bold mb-4 leading-[1] text-center">
                            Biodiversity Research and Conservation Society</h1>
                        <br>
                        <p class="text-lg">BRCS is a non-governmental organization based on Nepal.
                            We are focused on research and conservation of biodiversity.</p>
                        <br>
                        <a href="/about-us" class="secondary-button text-center">Learn more</a>
                    </div>
                </div>

                <div class="md:w-1/2 py-4">

                    <div
                        id="home-carousel"
                        class="relative bottom-0"
                        data-twe-carousel-init
                        data-twe-ride="carousel">
                        <!--Carousel indicators-->
                        <div
                            class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                            data-twe-carousel-indicators>
                            <button
                                type="button"
                                data-twe-target="#home-carousel"
                                data-twe-slide-to="0"
                                data-twe-carousel-active
                                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                                aria-current="true"
                                aria-label="Slide 1"></button>
                            <button
                                type="button"
                                data-twe-target="#home-carousel"
                                data-twe-slide-to="1"
                                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                                aria-label="Slide 2"></button>
                            <button
                                type="button"
                                data-twe-target="#home-carousel"
                                data-twe-slide-to="2"
                                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                                aria-label="Slide 3"></button>
                            <button
                                type="button"
                                data-twe-target="#home-carousel"
                                data-twe-slide-to="3"
                                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                                aria-label="Slide 4"></button>
                        </div>

                        <!--Carousel items-->
                        <div
                            class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                            <!--First item-->
                            <div
                                class="relative float-left -mr-[100%] w-full object-cover rounded-lg shadow-md transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                data-twe-carousel-item
                                data-twe-carousel-active>
                                <img
                                    src="{{asset('images/home/1.jpg')}}"
                                    class="block w-full md:h-[545px] h-[300px] object-cover rounded-lg"
                                    alt="Wild Landscape" />
                            </div>
                            <!--Second item-->
                            <div
                                class="relative float-left -mr-[100%] hidden w-full h-auto object-cover rounded-lg shadow-md transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                data-twe-carousel-item>
                                <img
                                    src="{{asset('images/home/2.jpg')}}"
                                    class="block w-full md:h-[545px] h-[300px] object-cover rounded-lg"
                                    alt="Camera" />
                            </div>
                            <!--Third item-->
                            <div
                                class="relative float-left -mr-[100%] hidden w-full h-auto object-cover rounded-lg shadow-md transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                data-twe-carousel-item>
                                <img
                                    src="{{asset('images/home/3.jpg')}}"
                                    class="block w-full  md:h-[545px] h-[300px] object-cover rounded-lg"
                                    alt="Exotic Fruits" />
                            </div>
                            <!--Fourth item-->
                            <div
                                class="relative float-left -mr-[100%] hidden w-full h-auto object-cover rounded-lg shadow-md transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                data-twe-carousel-item>
                                <img
                                    src="{{asset('images/about-us/research-1.jpg')}}"
                                    class="block w-full  md:h-[545px] h-[300px] object-cover rounded-lg"
                                    alt="Exotic Fruits" />
                            </div>
                        </div>

                    </div>

                    {{--                    <img src="{{asset('images/home/home-img.png')}}" alt="Placeholder Image" class="w-full h-auto object-cover rounded-lg shadow-md">--}}
                </div>
            </div>
        </div>
    </div>




    <!-- Container for the section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-5xl font-extrabold text-center text-green-800 mb-12">
                Our Mission
            </h2>
            <p class="text-xl text-gray-800 mb-10 leading-relaxed text-center mx-auto ">
                At <span class="font-semibold text-green-700">BRCS</span>, our mission is to celebrate, protect, and nurture the rich tapestry of life that graces our planet. We believe that every species, from the tiniest insect to the grandest mammal, plays a vital role in the intricate web of biodiversity that sustains our world.
            </p>
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">
                <!-- Interactive Block -->
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18m-6 6h6m-6-12h6M6 18H3m3-6H3m0-6h6m0 6h6" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Advance Biodiversity Research</h3>
                    <p class="text-gray-600 group-hover:text-gray-800 text-justify">
                        Conduct scientific research to enhance understanding of Nepal's biodiversity, focusing on wildlife, climate change, and sustainable natural resource management.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7M12 2v20" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Promote Community-Based Conservation</h3>
                    <p class="text-gray-600 group-hover:text-gray-800 text-justify">
                        Collaborate with local communities to implement conservation programs, raise awareness, and support sustainable resource management practices.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-4-4m4 4l4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Support Sustainable Livelihoods</h3>
                    <p class="text-gray-600 group-hover:text-gray-800 text-justify">
                        Provide technical and financial assistance to communities to foster sustainable livelihoods and promote ecotourism as a means to benefit both people and nature.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6M12 2v20" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Enhance Policy and Capacity Building</h3>
                    <p class="text-gray-600 group-hover:text-gray-800 text-justify">
                        Offer technical support to government agencies and stakeholders for effective biodiversity conservation planning, policy development, and capacity building.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <div class="bg-[#e9f4f6]">
        <h2 class="text-5xl font-extrabold text-center text-green-800 pt-12 pb-4">
            Our Donors
        </h2>
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-8">
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://www.amphibians.org/" target="_blank" title="Amphibian Survival Alliance">
                    <img src="{{asset('images/donors/asa.jpeg')}}" alt="Donor 1" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://dierenparkamersfoort.nl/" target="_blank" title="Dieren Park Amersfoot">
                    <img src="{{asset('images/donors/dieren_park.jpeg')}}" alt="Donor 2" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://ideawild.org" target="_blank" title="Idea Wild">
                    <img src="{{asset('images/donors/idea.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://www.nepal.gov.np/" target="_blank" title="Nepal Government">
                    <img src="{{asset('images/donors/nepal_gov.jpeg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://www.rwpzoo.org/" target="_blank" title="Roger William Park Zoo">
                    <img src="{{asset('images/donors/roger.png')}}" alt="Donor 3" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://www.nagaofoundation.or.jp/e/index.html" target="_blank" title="Nagao Natural Environment Foundation">
                    <img src="{{asset('images/donors/nef.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://www.orientalbirdclub.org/" target="_blank" title="Oriental Bird Club">
                    <img src="{{asset('images/donors/oriental_bird.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                </a>
            </div>
            <div class="flex items-center justify-center p-4 bg-white shadow rounded enlarged-image">
                <a href="https://www.rufford.org/" target="_blank" title="The Rufford Foundation">
                    <img src="{{asset('images/donors/rufford_foundation.jpg')}}" alt="Donor 3" class="w-full h-20 object-contain">
                </a>
            </div>

        </div>
    </div>



@endsection
