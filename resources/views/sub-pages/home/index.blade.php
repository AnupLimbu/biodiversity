@extends('master')

@section('content')
    <div style="background-color: #abcea0; height: 100px;">
    </div>
    <div class="min-h-[600px]" style="background-color: #abcea0;">
        <div class="container mx-auto py-4">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-8">
                <!-- Text Content -->
                <div class="md:w-1/2 py-4 flex flex-col justify-center text-center md:text-left h-[500px]">
                    <h1 class="text-[50px] font-weight-bolder font-bold mb-4 leading-[1]">
                        Environmental Conservation Organization</h1>
                    <br>
                    <p class="text-lg">BRCS is a non-governmental organization based on Nepal.
                        We are focused on research and conservation of biodiversity.</p>
                    <br>
                    <button class="secondary-button text-center">Learn more</button>
                </div>
                <!-- Image -->
                <div class="md:w-1/2 py-4">
                    <img src="{{asset('images/home/home-img.png')}}" alt="Placeholder Image" class="w-full h-auto object-cover rounded-lg shadow-md">
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
            <p class="text-xl text-gray-800 mb-10 leading-relaxed text-center mx-auto max-w-3xl">
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
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Preserving Ecosystems</h3>
                    <p class="text-gray-600 group-hover:text-gray-800">
                        Protecting the delicate balance of nature by conserving habitats and ensuring the resilience of our planet’s diverse ecosystems.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7M12 2v20" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Empowering Communities</h3>
                    <p class="text-gray-600 group-hover:text-gray-800">
                        Engaging with local communities to promote sustainable practices and environmental stewardship.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-4-4m4 4l4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Advancing Knowledge</h3>
                    <p class="text-gray-600 group-hover:text-gray-800">
                        Supporting research and education to increase awareness and understanding of biodiversity’s critical importance.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform transition-transform duration-300 hover:scale-105 hover:bg-green-50 hover:text-green-800 cursor-pointer group">
                    <div class="flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-600 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6M12 2v20" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4 group-hover:text-green-800">Fostering Harmony</h3>
                    <p class="text-gray-600 group-hover:text-gray-800">
                        Encouraging a harmonious coexistence between humanity and nature, where every life form is valued and protected.
                    </p>
                </div>
            </div>
            <p class="text-xl text-gray-800 mt-12 leading-relaxed text-center mx-auto max-w-3xl">
                Join us on this journey to create a thriving, vibrant world where biodiversity flourishes, and every living being finds its place in the grand mosaic of life. Together, we can make a difference—one species, one habitat, and one heart at a time.
            </p>
        </div>
    </section>






@endsection
