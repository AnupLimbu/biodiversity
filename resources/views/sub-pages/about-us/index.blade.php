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
                    <img src="https://via.placeholder.com/500x300" alt="About Us Image" class="w-full h-auto rounded-lg">
                </div>

                <!-- About Us Details -->
                <div class="md:w-1/2 md:pl-8">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Our Story</h2>
                    <p class="text-gray-700 mb-4 text-justify text-lg">
                        Founded in 2XXX, BRC Society emerged from a shared passion for the environment and a commitment to reversing the tide of biodiversity loss. What began as a small group of dedicated individuals has grown into a vibrant organization with a global impact.
                        Our journey is driven by the belief that every species plays a crucial role in maintaining the balance of our ecosystems, and that collective action is essential for meaningful change.
                    </p>
                    <p class="text-gray-700 text-justify text-lg">
                        Over the years, our initiatives have led to [specific achievements, e.g., "the protection of 100,000 hectares of critical habitat" or "the successful reintroduction of endangered species into their natural habitats"]. Our work has not only contributed to the conservation of numerous
                        species but has also empowered communities to become active stewards of their natural surroundings.                    </p>
                </div>
            </section>
        </div>

    </div>
    <!-- What We Do Section -->
    <section class="py-16 bg-green-100">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">What We Do</h2>
            </div>
            <div class="flex flex-wrap -mx-4">
                <!-- Initiative 1 -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://via.placeholder.com/400x300" alt="Conservation Efforts" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Conservation Efforts</h3>
                            <p class="text-gray-600">We work to protect endangered species and their habitats through dedicated conservation programs and community engagement.</p>
                        </div>
                    </div>
                </div>
                <!-- Initiative 2 -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://via.placeholder.com/400x300" alt="Education and Awareness" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Education and Awareness</h3>
                            <p class="text-gray-600">We educate local communities and stakeholders about the importance of biodiversity and sustainable practices through workshops and outreach programs.</p>
                        </div>
                    </div>
                </div>
                <!-- Initiative 3 -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://via.placeholder.com/400x300" alt="Research and Advocacy" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Research and Advocacy</h3>
                            <p class="text-gray-600">We conduct research to understand biodiversity trends and advocate for policies that support the preservation of Nepal’s natural heritage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax h-[400px] flex items-center justify-center text-center">
        <div class="container mx-auto ">
            <div class="p-6">
                <h1 class="text-4xl font-bold mb-4">Join us on this journey to create a thriving, vibrant world where biodiversity flourishes, and every living being finds its place in the grand mosaic of life.</h1>
                <p class="text-lg">Together, we can make a difference—one species, one habitat, and one heart at a time.</p>

            </div>
            <p class="text-lg  pt-4"><a href="/about-us" class="secondary-button text-center text-xl rounded-lg "><span class="p-8">Donate</span></a></p>
        </div>
    </section>

@endsection
