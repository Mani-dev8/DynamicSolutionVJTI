@extends('welcome')
@section('content')

<div class="px-4 mt-20 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Brand new
            </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
                <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                        <pattern id="34f481be-159a-4846-821d-9ca19fb6bcc5" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#34f481be-159a-4846-821d-9ca19fb6bcc5)" width="52" height="24"></rect>
                </svg>
                <!-- <span class="relative">The</span> -->
            </span>
            Expert Repair Services in Your Neighborhood
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Experience the Expertise, Quality, and Affordability of Dynamic Solution's Repairs </p>
    </div>
    <div class="grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2">
        <div class="duration-300 transform bg-white border-l-4 border-deep-purple-accent-400 hover:-translate-y-2">
            <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
                <h6 class="mb-2 font-semibold leading-5">Quality Parts</h6>
                <p class="text-sm text-gray-900">
                    We only use high-quality replacement parts in all of our repairs, so you can be sure that your device will function as well as it did when it was brand new. </p>
            </div>
        </div>
        <div class="duration-300 transform bg-white border-l-4 border-deep-purple-accent-400 hover:-translate-y-2">
            <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
                <h6 class="mb-2 font-semibold leading-5">Affordable Pricing</h6>
                <p class="text-sm text-gray-900">
                    Get expert repairs without emptying your wallet. Dynamic Solution offers affordable pricing for all your repair needs.
                </p>
            </div>
        </div>
        <div class="duration-300 transform bg-white border-l-4 border-deep-purple-accent-400 hover:-translate-y-2">
            <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
                <h6 class="mb-2 font-semibold leading-5">Wide Range of Devices</h6>
                <p class="text-sm text-gray-900">
                    Whether it's a phone, tablet, laptop, or more, we have the expertise to repair it quickly and affordably.</p>
            </div>
        </div>
        <div class="duration-300 transform bg-white border-l-4 border-deep-purple-accent-400 hover:-translate-y-2">
            <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
                <h6 class="mb-2 font-semibold leading-5">Customer Satisfaction</h6>
                <p class="text-sm text-gray-900">
                    Your satisfaction is our top priority. At Dynamic Solution, we offer a customer satisfaction guarantee with every repair service we provide.
                </p>
            </div>
        </div>
    </div>
    <div class="text-center">
        @if(session('user'))
        <a href="/appointment" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 md:w-auto  focus:shadow-outline focus:outline-none">
            Learn more
        </a>
        @else
        <a href="/login" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 md:w-auto  focus:shadow-outline focus:outline-none">
            Learn more
        </a>
        @endif
    </div>
</div>


@endsection