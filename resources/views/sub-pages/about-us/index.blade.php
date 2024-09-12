@extends('master')

@section('content')
    <div class="navbar-filler  bg-[#abcea0]">
    </div>
    <div class="h-[400px]  flex items-center  bg-[#abcea0]">
        <div class="container mx-auto">
            <h1 class="hero-text font-weight-bolder font-bold leading-[1] p-12 text-center">
                At <b>BRC Society</b>, we believe that every species plays a crucial role in maintaining the balance of our planet's ecosystems.
            </h1>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center h-full pt-8 pb-12">
        <div class="container mx-auto">
            <section class="flex flex-col md:flex-row items-center justify-center">
                <!-- Image Section -->
                <div class="md:w-1/2 my-6 md:mb-0">
                    <img src="{{asset('images/about-us/brcs.jpg')}}" alt="About Us Image" class="w-full h-auto rounded-lg">
                </div>

                <!-- About Us Details -->
                <div class="md:w-1/2 md:pl-8">
                    <h2 class="text-4xl font-bold mb-4 text-center text-gray-800">Our Story</h2>

                    <p class="text-gray-700 mb-4 text-justify text-lg">
                        Biodiversity Research and Conservation Society, BRCS is a non-governmental local organization registered with Government of Nepal under Social council act, 1992. The Biodiversity Research and Conservation Society
                        (BRCS) of Nepal is a non-profit organization focused on research, conservation, and education related to biodiversity and natural resources management actively working since 2018 in Nepal. The society aims to conserve the rich biodiversity of Nepal through scientific research and community-based conservation programs. BRCS has been conducting various research projects related to biodiversity conservation, climate change, and sustainable natural resources management.
                    </p>
                    <p class="text-gray-700 text-justify text-lg">
                        The organization has been working to create awareness among local communities about the importance of biodiversity and the need for its conservation. BRCS also provides technical and financial assistance to local communities for the conservation of natural resources and the promotion of sustainable livelihoods. BRCS has been implementing several programs and services for biodiversity conservation,
                        such as wildlife research and monitoring, community-based conservation, ecotourism development, capacity building, and awareness-raising campaigns. The organization also offers technical support to government agencies and other stakeholders for biodiversity conservation planning and policy development. One of the major programs of BRCS is community-based conservation, where the organization works closely with local communities to conserve biodiversity and promote sustainable resource management practices. The society also promotes ecotourism development as a means to provide economic benefits to local communities while conserving natural resources.   </p>
                </div>
            </section>
        </div>

    </div>
    <!-- What We Do Section -->
    <section class="py-16 bg-[#e9f4f6]">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-center text-green-800 mb-12">
                    What we do
                </h2>
            </div>
            <div class="flex flex-wrap -mx-4">
                <!-- Initiative 1 -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{asset('images/about-us/research-1.jpg')}}" alt="Conservation Efforts" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Research and Conservation Initiatives</h3>
                            <p class="text-gray-600">BRCS conducts scientific research and community-based programs to conserve Nepal's biodiversity, focusing on wildlife, climate change, and sustainable resource management.</p>
                        </div>
                    </div>
                </div>
                <!-- Initiative 2 -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{asset('images/about-us/community-1.jpg')}}" alt="Education and Awareness" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Community Engagement</h3>
                            <p class="text-gray-600">The organization raises awareness among local communities and provides technical and financial support for conservation efforts and sustainable livelihoods, also promoting ecotourism.</p>
                        </div>
                    </div>
                </div>
                <!-- Initiative 3 -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{asset('images/about-us/support-1.jpg')}}" alt="Research and Advocacy" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Support & Aid</h3>
                            <p class="text-gray-600">BRCS aids government agencies and stakeholders with conservation planning, policy development, and capacity building through technical assistance and awareness campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax h-[425px] flex items-center justify-center text-center">
        <div class="container mx-auto ">
            <div class="p-6">
                <h1 class="hero-sm-text font-bold mb-4">Join us on this journey to create a thriving, vibrant world where biodiversity flourishes, and every living being finds its place in the grand mosaic of life.</h1>
                <p class="text-lg">Together, we can make a difference—one species, one habitat, and one heart at a time.</p>

            </div>
            <p class="text-lg pt-4"><a href="/support_us" class="secondary-button text-center text-xl rounded-lg "><span class="p-8">Support Us</span></a></p>
        </div>
    </section>

@endsection
