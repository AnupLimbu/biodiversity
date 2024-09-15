@extends('master')
@section('content')
    <div class="navbar-filler" style="background-color: #abcea0;">
    </div>
    <section class="container mx-auto mt-16  min-h-[600px]" >
        <div class="font-[sans-serif] mx-auto relative  rounded-lg py-6 flex  justify-center bg-[#ABCEA0] mb-10">
            <div class="lg:w-1/2 md:w-full">
                <div class="lg:col-span-2 rounded-lg sm:p-10 p-4 z-10 max-lg:-order-1 max-lg:mb-8"  >
                    <div class=" max-w-2xl shadow overflow-hidden sm:rounded-lg" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <div class="px-4 py-3 sm:px-6  " style="background-color: #e9f8f8">
                            <h2 class="text-2xl  text-center font-bold mb-1 text-green-800 underline">Support Us</h2>
                            <h3 class="text-lg  leading-6 font-medium text-green-800 text-center ">
                                Donations Information
                            </h3>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-gray-700" style="font-weight: bolder">
                                        Bank Name:
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        EVEREST BANK LIMITED
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-700" style="font-weight: bolder">
                                        Branch:
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Kirtipur Branch
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-700" style="font-weight: bolder">
                                        Account No:
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        02900105200501
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-700" style="font-weight: bolder">
                                        Account Holder Name:
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Biodiversity Research and Conservation Society
                                    </dd>
                                </div>
{{--                                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" style="display: flex; justify-content: center">--}}
{{--                                    <img src="https://www.imgonline.com.ua/examples/qr-code.png" alt="" style="width: 250px;height: 250px">--}}
{{--                                </div>--}}
                            </dl>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
