@extends('master')

@section('content')
    <div style="height: 67px;">
    </div>
    <div class="h-[400px]">
        <div class="container mx-auto">
            <h1 class="text-[40px] font-weight-bolder font-bold leading-[1] px-12 pt-12 pb-2 text-center">
                At <b>BRC Society</b>, we believe that every species plays a crucial role in maintaining the balance of our planet's ecosystems.
            </h1>
        </div>
    </div>
    <div class="h-full flex flex-col items-center justify-center " style="background-image: linear-gradient(3deg, #abcea0 70%, #ffffff calc(70% + 2px));">
        <div class="container mx-auto">
            <div class="md:w-1/2 relative top-[-100px]">
                <img src="{{asset('images/about-us/red-panda.jpg')}}" alt="Placeholder Image" class="w-full h-[300px] object-cover rounded-lg">
            </div>
        </div>
    </div>


@endsection
