@extends('master')
@section('content')
    <section class="container mx-auto  max-w-screen-xl" style="margin: 100px auto 60px auto; padding: 10px">
        <form>
            <div class="space-y-12">
                <div class=" pb-12">
                    <h1 class="font-bold leading-7 text-gray-900 text-center text-3xl text-uppercase ">Contact Us</h1>
                    <p class="text-center text-gray-600"> We are always interested in hearing from people who share love for nature and community.
                        </p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm  font-bold leading-6 text-gray-900">First name:</label>
                            <div class="mt-2">
                                <input type="text" placeholder="First Name" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:pl-[10px] focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-bold  leading-6 text-gray-900">Last name:</label>
                            <div class="mt-2">
                                <input type="text" placeholder="Last Name"  name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:pl-[10px] focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-bold leading-6 text-gray-900">Email address:</label>
                            <div class="mt-2">
                                <input id="email" name="email" placeholder="Email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:pl-[10px] focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-bold leading-6 text-gray-900">Message:</label>
                            <div class="mt-2">
                                <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:pl-[10px] focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Write your message...."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit Form</button>
            </div>
        </form>

        <hr class="mt-10 mb-10">
        <h3 class="font-bold leading-7 text-gray-900 text-center text-3xl text-uppercase ">Locate Us</h3>
        <div class="relative w-full h-96 mt-10">
            <iframe class="absolute top-0 left-0 w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0010918795497!2d85.3190764868161!3d27.717252563642383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19007679e1c1%3A0xe8b6e5240c7f2ad9!2sKadaghari!5e0!3m2!1sen!2snp!4v1723967824101!5m2!1sen!2snp"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </section>
@endsection
