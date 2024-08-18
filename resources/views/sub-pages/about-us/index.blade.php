@extends('master')

@section('content')
    @include('sub-pages.about-us.partials.carousel')
    <!-- Intro Section -->
    <section class="py-12 bg-[#2c8769] text-white text-center">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h1 class="text-4xl font-extrabold mb-4">Nepal’s Biodiversity at a Glance</h1>
            <p class="text-lg md:text-xl">
                Nepal, ranked 49th in the world for biodiversity, is home to over 22,000 species. Discover the extraordinary variety of life that makes Nepal a natural paradise.
            </p>
        </div>
    </section>

    <!-- Biodiversity Overview Section -->
    <section class="container mx-auto px-6 py-12 max-w-screen-xl">
        <h2 class="text-4xl font-semibold text-gray-900 mb-8">Biodiversity Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-green-500 hover:bg-green-50 transition-colors duration-300">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Flora</h3>
                <ul class="list-disc list-inside pl-5">
                    <li>6,653 species of angiosperms</li>
                    <li>28 species of gymnosperms</li>
                    <li>1,001 algae</li>
                    <li>2,025 fungi</li>
                    <li>771 lichens</li>
                    <li>1,150 bryophytes</li>
                    <li>534 pteridophytes</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-green-500 hover:bg-green-50 transition-colors duration-300">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Fauna</h3>
                <ul class="list-disc list-inside pl-5">
                    <li>210 mammals</li>
                    <li>871 birds</li>
                    <li>228 fishes</li>
                    <li>Over 12,957 insects</li>
                    <li>137 reptiles</li>
                    <li>53 amphibians</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-green-500 hover:bg-green-50 transition-colors duration-300">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Unique Features</h3>
                <p>
                    Nepal’s biodiversity is shaped by its varied elevation gradients, creating diverse ecological niches and unique habitats. This rich variety makes Nepal an extraordinary ecological treasure.
                </p>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h2 class="text-4xl font-semibold text-gray-900 mb-8">What We Do</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col justify-between">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Consultancy & Advocacy</h3>
                    <p class="text-lg mb-4">
                        We offer expert consultancy and advocacy services to support biodiversity conservation efforts. Our work includes policy recommendations and public awareness campaigns to promote environmental sustainability.
                    </p>
{{--                    <a href="#" class="text-green-500 hover:underline">Learn More</a>--}}
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col justify-between">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Research & Conservation</h3>
                    <p class="text-lg mb-4">
                        Our research initiatives focus on understanding and preserving Nepal’s diverse ecosystems. We conduct field studies, support conservation projects, and collaborate with local and international partners to protect wildlife.
                    </p>
{{--                    <a href="#" class="text-green-500 hover:underline">Learn More</a>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- Details of NBrCc Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h2 class="text-4xl font-semibold text-gray-900 mb-8">Details of NBrCc</h2>
            <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                <p class="text-lg mb-6">
                    NBrCc is a registered charity (111/071/072) with the Government of Nepal and is based at the Kathmandu District Administration Office. We are also registered with the Social Welfare Council.
                </p>
                <p class="text-lg mb-6">
                    As a non-profit, non-governmental organization, we are dedicated to the conservation and research of biodiversity throughout Nepal. Our work focuses on key conservation activities and research initiatives within priority areas and other potential sites.
                </p>
                <p class="text-lg">
                    Our goal is to foster a collaborative approach to biodiversity conservation, working closely with communities, researchers, and policymakers to ensure a sustainable future for Nepal's rich natural heritage.
                </p>
            </div>
        </div>
    </section>
@endsection
