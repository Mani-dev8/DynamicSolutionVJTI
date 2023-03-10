@extends('welcome')
@section('content')
<div class="px-4 mt-[5rem] py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                About Us
            </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
                <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                        <pattern id="db164e35-2a0e-4c0f-ab05-f14edc6d4d30" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#db164e35-2a0e-4c0f-ab05-f14edc6d4d30)" width="52" height="24"></rect>
                </svg>
                <span class="relative">The</span>
            </span>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
        </p>
    </div>
    <div class="grid max-w-sm gap-5 mb-8 lg:grid-cols-3 sm:mx-auto lg:max-w-full">
        <div class="px-10 py-20 text-center border rounded lg:px-5 lg:py-10 xl:py-20">
            <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
                20 Nov 2020
            </p>
            <a href="/" class="inline-block max-w-xs mx-auto mb-3 text-2xl font-extrabold leading-7 transition-colors duration-200 hover:text-deep-purple-accent-400" aria-label="Read article" title="Nori grape silver beet broccoli kombu beet">
                Nori grape silver beet broccoli kombu beet
            </a>
            <p class="max-w-xs mx-auto mb-2 text-gray-700">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Read more</a>
        </div>
        <div class="px-10 py-20 text-center border rounded lg:px-5 lg:py-10 xl:py-20">
            <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
                20 Nov 2020
            </p>
            <a href="/" class="inline-block max-w-xs mx-auto mb-3 text-2xl font-extrabold leading-7 transition-colors duration-200 hover:text-deep-purple-accent-400" aria-label="Read article" title="Well, the way they make shows is, they make one">
                Well, the way they make shows is, they make one
            </a>
            <p class="max-w-xs mx-auto mb-2 text-gray-700">
                Some pilots get picked and become television programs. Some don't, become nothing.
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Read more</a>
        </div>
        <div class="px-10 py-20 text-center border rounded lg:px-5 lg:py-10 xl:py-20">
            <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
                20 Nov 2020
            </p>
            <a href="/" class="inline-block max-w-xs mx-auto mb-3 text-2xl font-extrabold leading-7 transition-colors duration-200 hover:text-deep-purple-accent-400" aria-label="Read article" title="Pommy ipsum smeg head whizz morris himer due">
                Pommy ipsum smeg head whizz morris himer due
            </a>
            <p class="max-w-xs mx-auto mb-2 text-gray-700">
                Taking the mick middle class bog roll bow ties are cool posh nosh off t'shop, stew and dumps.
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Read more</a>
        </div>
    </div>
</div>
@endsection