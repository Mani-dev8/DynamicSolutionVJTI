<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@extends('welcome')
@section('content')
<style>
    .toast-center {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .toast-error {
        background-color: red;
    }



    .toast-success {
        background-color: #4cbb17;
        font-weight: 500;
        height: 80px;
        width: 200px;
    }

    .hide {
        opacity: 0;
        transition: all 2s;
    }

    .show {
        opacity: 1;
        transition: all 4s;
        animation: movex 2s;
    }

    .show2 {
        opacity: 1;
        transition: all 3s;
        transition-delay: 1s;
        animation: movex2 2s 1s;
    }

    .show3 {
        opacity: 1;
        transition: all 4s;
        transition-delay: .5s;
        animation: movex 2s .5s;
    }

    .show4 {
        opacity: 1;
        transition: all 3s;
        transition-delay: 1s;
        animation: movex2 2s 1s;
    }

    #currLoc {
        transition: all 1s;
        animation: glow 2s linear infinite;
    }

    @keyframes glow {
        0% {
            transform: scale(1);
        }

        25% {
            transform: scale(1.1);
            /* background-color: gray; */
        }

        50% {
            transform: scale(1.2);
            /* background-color: dimgray; */
        }

        75% {
            transform: scale(1.1);
            /* background-color: dimgray; */
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes movex {
        0% {
            transform: translateX(-400px);
        }
    }

    @keyframes movex2 {
        0% {
            transform: translateX(-600px);
        }
    }

    .custom-select {
        position: relative;
        display: inline-block;
        border-radius: 4px;
        font-size: 16px;
        font-weight: bold;
        overflow: hidden;
    }

    .custom-select select {
        width: 100%;
        height: 120%;
        padding: 12px 10px;
        border: none;
        background-color: #f5f5f5;
        color: #333;
        font-size: 16px;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        border-radius: 5px;
    }

    .arrow {
        position: absolute;
        top: 0;
        right: 0;
        width: 30px;
        height: 100%;
        background-color: #f5f5f5;
        color: #333;
        pointer-events: none;
        transition: transform 0.3s ease;
        border-radius: 5px;
    }

    .custom-select.open .arrow {
        transform: rotate(180deg);
    }

    .custom-select select:focus {
        outline: none;
    }

    .custom-select select:hover {
        cursor: pointer;
    }

    .arrow {
        position: absolute;
        top: 0;
        right: 0;
        width: 30px;
        height: 100%;
        background-color: #f5f5f5;
        color: #333;
        pointer-events: none;
        transition: transform 0.3s ease;
        border-radius: 5px;
    }



    /* .arrow::before {
        content: "\f13a";
        position: absolute;
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%);
    } */

    .custom-select.open .arrow {
        transform: rotate(180deg);
    }
</style>
<div class="w-full h-fit relative mt-10 ">
    <!-- <div class=" w-[100vw] h-fit  bg-gradient-to-b from-violet-200  overflow-visible shadow-2xl shadow-violet-100">
        <div class=" sm:pb-0 pb-5  sm:aspect-[16/8] aspect-square   flex sm:flex-row flex-col-reverse items-center justify-start max-w-[1340px] m-auto">
            <div class="w-full sm:w-1/2 sm:pl-10 pl-4 ">
                <h1 class="lg:pb-6 leading-5 pb-2 xs:leading-6 xs:pb-3 sm:leading-8 sm:pb-4 md:text-4xl lg:text-5xl sm:text-3xl xs:text-2xl text-xl  text-black font-sans font-bold tracking-wide">Get Your Device Fixed Today </h1>
                <p class="font-sans xs:text-sm sm:text-md md:text-lg md:leading-6 text-xs">Our services provide professional repairs with cost-effective pricing for your devices and gadgets</p>
                <button class=" active:opacity-70 border-2  border-transparent hover:bg-transparent text-violet-700 border-violet-700 active:border-violet-700   hover:bg-violet-700 hover:text-white font-sans sm:px-5 active:bg-white active:text-violet-700 sm:py-3 font-semibold  uppercase mt-5 sm:text-sm text-xs px-2 py-2 md:text-base lg:mt-12 md:mt-6 md:py-4">
                    <a href="# ">Contact now</a>

                </button>
            </div>
            <div class="sm:w-1/2 w-full h-full ">
                <img src="1676798059751.png" alt="" srcset="" class="h-full w-full ">
            </div>
        </div>
    </div> -->
    <div class="mb-28  bg-zinc-100 relative sm:pb-20 pb-28 h-fit">
        <div class="img absolute bottom-0 opacity-60 w-[100%] h-[calc(100%-3rem)] " style=" background-image: url('bannerDynamicSolution.png'); background-size: cover;background-repeat: no-repeat;"></div>
        <div class="relative">
            <div class="px-4  py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class=" max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 mt-20">
                    <div class="">
                        <!-- <img src="bannerDynamicSolution.png" alt="" srcset="" class=" z-10 absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%]"> -->

                    </div>
                    <h2 class="max-w-lg mb-6 z-20  font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                <defs>
                                    <pattern id="dc223fcc-6d72-4ebc-b4ef-abe121034d6e" x="0" y="0" width=".135" height=".30">
                                        <circle cx="1" cy="1" r=".7"></circle>
                                    </pattern>
                                </defs>
                                <rect fill="url(#dc223fcc-6d72-4ebc-b4ef-abe121034d6e)" width="52" height="24"></rect>
                            </svg>
                            <!-- <span class="relative">The</span> -->
                        </span>Get Your Device Fixed Today
                        <p class="text-base text-gray-700 md:text-lg mt-2 font-[400]">
                            Professional repairs with cost-effective pricing for your devices and gadgets.
                        </p>
                    </h2>
                </div>
                <div class="flex items-center sm:justify-center">
                    <a href="signup"><button type="submit" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition-all duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                            Get started
                        </button></a>
                    <a href="#steps" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn more</a>
                </div>
            </div>
        </div>
        <!-- <div class="relative px-4 sm:px-0">
            <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
            <div class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
                <div class="inline-block p-8 text-center">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                    <p class="font-bold tracking-wide text-gray-800">Make it better</p>
                </div>
                <div class="inline-block p-8 text-center">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                    <p class="font-bold tracking-wide text-gray-800">Do it faster</p>
                </div>
                <div class="inline-block p-8 text-center">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                    <p class="font-bold tracking-wide text-gray-800">Working harder</p>
                </div>
            </div>
        </div> -->

        <form id='proceed_form' class="absolute left-[50%] -translate-x-[50%]  bg-white rounded  " action="appointment">
            <input type="text" value="" name="nameindex" id="hfindex" hidden>
            <div class="relative py-10   flex justify-evenly flex-col items-center px-2 sm:flex-row gap-5  overflow-hidden  divide-y rounded shadow w-[60%] min-w-[360px] sm:min-w-[600px] md:min-w-[700px] sm:w-full sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
                <div class="custom-select w-[67%] max-w-[250px] text-xs sm:text-base">
                    <select id="selectBox" class='font-semibold '>
                        <option value="" disabled selected hidden class="font-xs">Select A Category</option>
                        <option value="1">Appliances</option>
                        <option value="2">Computers</option>
                        <option value="3">Mobile Devices</option>
                        <option value="4">Plumbers</option>
                    </select>
                    <div class="arrow flex justify-center items-center">
                        <i class="fa-sharp fa-solid fa-circle-chevron-down  text-zinc-700"></i>
                    </div>
                </div>
                <div class="flex gap-4 justify-center items-center px-3 py-2  border-2 border-white rounded-md">
                    <p class="font-semibold">Get Current Location</p>
                    <div class="h-9 min-w-[2.25rem] cursor-pointer rounded-full shadow-lg shadow-green-300 bg-green-400 flex justify-center items-center hover:bg-green-500" id="currLoc">
                        <i class="fa-solid fa-location-crosshairs text-xl text-white"></i>
                    </div>
                </div>

                <button class="inline-flex items-center px-4 py-2 font-semibold text-white transition-all duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 focus:shadow-outline focus:outline-none" id="proceed-category" onclick="return event.preventDefault()">Proceed
                </button>

                <input type="text" value="" id="hflat" hidden>
                <input type="text" value="" id="hflng" hidden>
            </div>
        </form>
    </div>

    <!-- <div class="h-[90%] max-w-[1340px]  w-full  absolute bottom-0 left-1/2 translate-x-[-50%] grid grid-cols-2 px-12">
        <div class="flex flex-col gap-3 items-start justify-center ">
            <h1 class="text-[3vw] font-bold text-white tracking-wide">
                Get Your Device Fixed Today
            </h1>
            <h1 class="text-[3vw] font-bold text-white ">
                Expert Repair Services in Your Neighborhood
            </h1>
            <p class="text-white">
                Our services provide skilled and reliable electronic repairs at a reasonable cost, ensuring both high-quality work and affordability for our customers.
            </p>
            <div class="flex flex-row w-full justify-between">
                <button class="w-40 border-2 h-12 rounded mt-10 text-center text-lg border-white bg-white text-violet-800 
             font-semibold animate-pulse ">Contact Now </button>
            </div>
        </div>
        <img src="assets/SS_techician_wm.png" alt="" class="h-full  ">
    </div> -->
</div>




<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col max-w-screen-lg overflow-hidden bg-white border rounded shadow-sm lg:flex-row sm:mx-auto">
        <div class="relative lg:w-1/2">
            <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" class="object-cover w-full lg:absolute h-80 lg:h-full" />
            <svg class="absolute top-0 right-[-2px] hidden h-full text-white lg:inline-block" viewBox="0 0 20 104" fill="currentColor">
                <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
            </svg>
        </div>
        <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
            <div>
                <!-- <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                    Brand new
                </p> -->
            </div>
            <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-4xl">
                Expertise and Experience You Can Trust
            </h5>
            <p class="mb-5 text-gray-800">
                <span class="font-bold">Dynamic Solution</span> offer a wide range of [service or solution] that are tailored to meet your specific needs and requirements. Whether you are looking for [specific service or solution], we have the expertise and resources to deliver results that exceed your expectations.
            </p>
            <div class="flex items-center">
                <button type="submit" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition-all duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                    Get started
                </button>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                    Learn More
                    <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ================================================ -->

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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
        <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 md:w-auto  focus:shadow-outline focus:outline-none">
            Learn more
        </a>
    </div>
</div>







<!-- //================================================================= -->




<!-- OUR SERVICES -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
            <p id="our_services" class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Our Services
            </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
                <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                        <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                </svg>
                <span class="relative capitalize">Below are the services that we provide </span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            In appliances, we provide local services in ac, and coolers, In the computer we provide services in repairing computers and peripheral devices, in Mobile Devices we provide local service to repair and maintain phones, we also provide local electricians to solve problems locally and last but not least we also provide plumbing services by local available plumbers.

        </p>
    </div>
    <div class="grid gap-8 row-gap-5 lg:grid-cols-3">
        @foreach($serv_data as $item )
        <div class="relative  p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">

            <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-400 group-hover:scale-x-100"></div>
            <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
            <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
            <div class="relative p-5 rounded-sm ">
                <div class="flex flex-col mb-2 lg:items-center lg:flex-row">
                    <div class="flex items-center justify-center w-10 h-10 mb-4 mr-2 rounded-full  lg:mb-0">
                        <img src="{{$item->icon}}" />
                    </div>
                    <h6 class="font-semibold leading-5 text-black">{{$item->s_category}}</h6>
                </div>
                <div class="aspect-video mt-6 mb-8">
                    <img src="{{$item->image}}" alt="" srcset="" class=" rounded   h-full w-full object-cover ">
                </div>
                <p class="mb-2 text-sm text-black ">
                    {{$item->s_des}}
                </p>
                <a href="/" aria-label="" class="inline-flex items-center text-sm font-semibold transition-colors duration-200 text-purple-500 hover:text-purple-800">Learn more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- //OUR SERVICES -->








<div id="steps" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
        <div class="lg:py-6 lg:pr-16">
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold ">Step 1</p>
                    <p class="text-gray-700 capitalize font-semibold">
                        select your category & enable your current location
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 2</p>
                    <p class="text-gray-700 capitalize font-semibold">
                        select registered professionals available near you and proceed
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 3</p>
                    <p class="text-gray-700 capitalize font-semibold">
                        select time&date that suits you well and works for you
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 4</p>
                    <p class="text-gray-700 capitalize font-semibold">
                        then enter your further details and select your payment method place your repair order you will get your order confirmation
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                                <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="pt-1">
                    <p class="mb-2 text-lg font-bold capitalize">your repairs will be done & you can provide your review and feedback.</p>
                    <p class="text-gray-700"></p>
                </div>
            </div>
        </div>
        <div class="relative">
            <img class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full" src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
        </div>
    </div>
</div>




<!-- COMPANY OVERVIEW  -->


<section class="mx-auto flex max-w-lg flex-col px-4 py-10 lg:max-w-screen-xl lg:flex-row">
    <div class="max-w-md pr-20 lg:pt-28">
        <img src="1676798059751.png" alt="" />
    </div>
    <div class="">
        <div class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600 text-white shadow-lg shadow-indigo-600/20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
            </svg>
        </div>
        <h2 class="mb-10 max-w-lg text-4xl font-bold leading-snug lg:text-5xl lg:leading-snug">A <span class="text-indigo-600">revolutionary</span> way to repair your devices</h2>
        <div class="grid gap-y-12 gap-x-8 lg:grid-cols-2">
            <div>
                <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">Get help in minutes
                </p>
                <p class=" text-gray-800">we provide locally available professionals who are available on our websit</p>
            </div>
            <div>
                <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">We never miss your schedule</p>
                <p class=" text-gray-800">Once your Time&date are scheduled we get in touch with you and provide our service without delay
                </p>
            </div>
            <div>
                <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">speedy Services </p>
                <p class="text-gray-800">we provide our services by the deadline and try our best to meet them and provide satisfactory results to our customers

                </p>
            </div>
            <div>
                <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">We take feedback and review</p>
                <p class=" text-gray-800">we take our customer's reviews and feedback that they provide for our services.</p>
            </div>
        </div>
    </div>
</section>
<!-- //COMPANY OVERVIEW -->




<!-- RATING -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-10 row-gap-8 lg:grid-cols-3">
        <div>
            <div class="flex">
                <h6 class="mr-2 text-4xl font-bold md:text-5xl text-deep-purple-accent-400">
                    86K
                </h6>
                <div class="flex items-center justify-center rounded-full bg-teal-accent-400 w-7 h-7">
                    <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
            </div>
            <p class="mb-2 font-bold md:text-lg">Repairs</p>
            <p class="text-gray-700">
                Our website helped more than 86k repairs and with reviews and feedback received from our customers
            </p>
        </div>
        <div>
            <div class="flex">
                <h6 class="mr-2 text-4xl font-bold md:text-5xl text-deep-purple-accent-400">
                    1.3K
                </h6>
                <div class="flex items-center justify-center rounded-full bg-teal-accent-400 w-7 h-7">
                    <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
            </div>
            <p class="mb-2 font-bold md:text-lg">Subscribers</p>
            <p class="text-gray-700">
                Our website also provides a range of premium service plans for our subscribed customers

            </p>
        </div>
        <div>
            <div class="flex">
                <h6 class="mr-2 text-4xl font-bold md:text-5xl text-deep-purple-accent-400">
                    10-15
                </h6>
                <div class="flex items-center justify-center rounded-full bg-teal-accent-400 w-7 h-7">
                    <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
            </div>
            <p class="mb-2 font-bold md:text-lg">Professionals</p>
            <p class="text-gray-700">
                get help from our professionals available near you by using your location.
            </p>
        </div>
    </div>
</div>
<!-- //RATING -->





<div class="pb-24 min-h-[90rem] w-full max-w-[1340px] m-auto sm:px-12 px-4 text-white md:pt-20 lg:pt-24 sm:pt-16 xs:mt-10 ">






    <!-- PRICING -->

    <div class="lg:flex items-center justify-between mb-20 -mt-20">
        <div class="lg:w-1/2 w-full">
            <p class="text-base leading-4 text-gray-600">Choose your plan</p>
            <h1 role="heading" class="md:text-5xl text-3xl font-bold leading-10 mt-3 text-gray-800 ">Our pricing plan</h1>
            <p role="contentinfo" class="text-base leading-5 mt-5 text-gray-600 ">"Get more out of your devices with our maintenance and repair subscriptions"</p>
            <div class="w-56">
                <!-- <button onclick="toggleIt()" class="bg-gray-100 dark:bg-gray-800 shadow rounded-full flex items-center mt-10 ">
                    <div class="bg-gray-100 dark:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none text-base leading-none text-gray-600 dark:text-gray-200 rounded-full py-4 px-6 mr-1" id="monthly">Monthly</div>
                    <div class="bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none text-base leading-none text-white rounded-full py-4 px-6" id="annually">Annually</div>
                </button> -->
            </div>
        </div>
        <div class="xl:w-1/2 lg:w-7/12 relative w-full lg:mt-0  md:px-8" role="list">
            <img src="https://i.ibb.co/0n6DSS3/bgimg.png" class="absolute w-full -ml-12 mt-24" alt="background circle images" />
            <div role="listitem" class="bg-gray-50 dark:bg-gray-800 cursor-pointer shadow-md rounded-lg p-8 relative z-30">
                <div class="md:flex items-center justify-between">
                    <h2 class="text-2xl font-semibold md:mt-0 mt-4 leading-6 text-gray-800 dark:text-white">Basic Maintenance Plan</h2>
                    <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white ">₹999<span class="font-normal text-base">/mo</span></p>
                </div>
                <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">Keep your devices in top condition with our annual maintenance plan. Includes one annual device check-up, cleaning, and minor repairs. </p>
            </div>
            <div role="listitem" class="bg-gray-50 dark:bg-gray-800 cursor-pointer shadow-md rounded-lg mt-3 flex relative z-30">
                <div class="w-2.5 h-auto bg-indigo-700 rounded-tl-md rounded-bl-md"></div>
                <div class="w-full p-8">
                    <div class="md:flex items-center justify-between">
                        <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Priority Repair Plan</h2>
                        <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white">₹1999<span class="font-normal text-base">/mo</span></p>
                    </div>
                    <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200"> Get faster access to repair services with our priority repair plan. Includes priority scheduling, on-site repairs, and discounted pricing for repairs.</p>
                </div>
            </div>
            <div role="listitem" class="bg-gray-50 dark:bg-gray-800 cursor-pointer shadow-md rounded-lg p-8 relative z-30 mt-7">
                <div class="md:flex items-center justify-between">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Device Protection Plan</h2>
                    <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white">₹2999<span class="font-normal text-base">/mo</span></p>
                </div>
                <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">Protect your device against accidental damage, theft, or loss with our device protection plan. Includes repair or replacement services, with no additional cost for covered claims.</p>
            </div>
        </div>
    </div>
    <script>
        let monthly = document.getElementById("monthly");
        let annually = document.getElementById("annually");

        let flag = false;
        const toggleIt = () => {
            if (!flag) {
                monthly.classList.add("bg-indigo-700");
                monthly.classList.add("text-white");
                monthly.classList.remove("bg-gray-100");
                monthly.classList.remove("text-gray-600");
                annually.classList.remove("bg-indigo-700");
                annually.classList.remove("text-white");
                annually.classList.add("bg-gray-100");
                annually.classList.add("text-gray-600");
                flag = true;
            } else {
                monthly.classList.remove("bg-indigo-700");
                monthly.classList.remove("text-white");
                monthly.classList.add("bg-gray-100");
                monthly.classList.add("text-gray-600");
                annually.classList.add("bg-indigo-700");
                annually.classList.add("text-white");
                annually.classList.remove("bg-gray-100");
                annually.classList.remove("text-gray-600");
                flag = false;
            }
        };
    </script>

    <!-- //PRICING -->





    <!-- WHY CHOOSE US -->

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-teal-accent-400">
                    <svg class="text-teal-900 w-7 h-7" viewBox="0 0 24 24">
                        <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points=" 8,5 8,1 16,1 16,5" stroke-linejoin="round"></polyline>
                        <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="9,15 1,15 1,5 23,5 23,15 15,15" stroke-linejoin="round"></polyline>
                        <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="22,18 22,23 2,23 2,18" stroke-linejoin="round"></polyline>
                        <rect x="9" y="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="6" height="4" stroke-linejoin="round"></rect>
                    </svg>
                </div>
                <div class="max-w-xl mb-6">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Let us handle the repair and maintenance of your household<br class="hidden md:block" />


                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        By providing multiple services and multiple options for maximum customer service and satisfaction and our team will ensure smooth and secure transactions between our professionals our website is one-the stop solution for all your household repair needs

                    </p>
                </div>
                <div>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                        Learn more
                        <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center -mx-4 lg:pl-8">
                <div class="flex flex-col items-end px-3">
                    <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56" src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                    <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                </div>
                <div class="px-3">
                    <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- //WHY CHOOSE US -->

    <!-- ABOUT COMPANY -->

    <!-- <div class=" border border-white py-10 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem]">
        <h1 class="lg:text-5xl md:text-4xl sm:text-3xl text-2xl text-center font-bold mb-10">About Our Company</h1>
        <div class="about-us h-auto w-full grid md:grid-cols-2 gap-5   pr-2 ">
            <div class="w-full  h-full flex flex-row items-center justify-center ">
                <div class="relative bg-white bg-opacity-30  shadow-violet-900 shadow-2xl  rounded-xl ">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/business-goal-5262987-4396863.png?f=webp" class="max-h-[20rem] border-[3px] z-30 border-opacity-20 border-violet-900 h-full m-auto " alt="" srcset="">
                </div>
            </div>
            <div class="flex flex-col px-10 justify-center items-center text-sm font-thin " style="text-shadow: 0px 1px 2px #000 ;">
                <li class="">
                    Dynamic Solution is a leading provider of repair and maintenance services for electronic devices in the local community. Since our founding in 2010, we have been committed to providing high-quality, reliable, and affordable repairs to our customers.

                </li>
                <li>
                    Our team of skilled technicians has a wealth of experience in the industry, with expertise in diagnosing and repairing a wide range of electronic devices, including smartphones, laptops, tablets, and more. We use only the highest quality materials and parts in our repairs, and we stand behind our work with warranties for added peace of mind.
                </li>
                <li> We are committed to providing the best possible service to our customers, and we are constantly striving to improve and innovate our services to meet their evolving needs. Thank you for choosing Dynamic Solution for your repair needs.
                </li>
                </li>
            </div>
        </div>
    </div> -->



    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="679d5905-e08c-4b91-a66c-84aefbb9d2f5" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#679d5905-e08c-4b91-a66c-84aefbb9d2f5)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative"> About us </span>
                </span>

            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                In the Below video, we explained our visions and ideas for our ambitious project and our goal to help to meet every household's daily repair needs.

            </p>
        </div>
        <div class="mx-auto lg:max-w-2xl">
            <div class="relative w-full transition-shadow duration-300 hover:shadow-xl">
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />
                <a href="/" aria-label="Play Video" class="absolute inset-0 flex items-center justify-center w-full h-full transition-colors duration-300 bg-gray-900 bg-opacity-50 group hover:bg-opacity-25">
                    <div class="flex items-center justify-center w-16 h-16 transition duration-300 transform bg-gray-100 rounded-full shadow-2xl group-hover:scale-110">
                        <svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <!-- //ABOUT COMPANY -->
</div>
<script>
    const accessToken = getParameterByName("access_token");
    
    fetch("https://www.googleapis.com/oauth2/v1/userinfo?access_token=" + accessToken)
        .then(response => response.json())
        .then(data => {
            var email = data.email;
            var username = data.name;
            if (email === undefined) {
                console.log("undefined");
            } else {
                console.log("Logged-in email: " + email);
                console.log("Logged-in data: " + username);

                var xhr = new XMLHttpRequest;
                xhr.open('GET', `gLogin?email=${email}&username=${username}`);
                xhr.onload = () => {
                    console.log(xhr.responseText)
                    if (xhr.responseText == 'session created') {
                       console.log("ok")

                    }
                }
                xhr.send()
            }
        })
        .catch(error => {
            console.error("Failed to retrieve user profile: ", error);
        });

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return "";
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function signOut() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'https://accounts.google.com/o/oauth2/revoke?token=' + accessToken);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log('User signed out successfully');
                window.location.href = "/login";
            } else {
                console.log('Error revoking token');
            }
        };
    }

    const select = document.querySelector('.custom-select select');
    const arrow = document.querySelector('.custom-select .arrow');

    select.addEventListener('click', function() {
        this.parentNode.classList.toggle('open');
        arrow.classList.toggle('open');
    });

    const observer = new IntersectionObserver((enteries) => {
        enteries.forEach((entry) => {
            console.log(enteries)
            if (entry.isIntersecting && (entry.target.classList[0] == 'card1' || entry.target.classList[0] == 'card3')) {
                entry.target.classList.add('show');
                console.log(entry.target.classList[0])
            }
            if (entry.isIntersecting && (entry.target.classList[0] == 'card2' || entry.target.classList[0] == 'card4')) {
                entry.target.classList.add('show2');
                console.log(entry.target.classList[0])
            }
        });
    });
    const hiddenElements = document.querySelectorAll('.hide');
    hiddenElements.forEach(element => {
        observer.observe(element);
    });

    function initMap() {
        var location = document.getElementById("currLoc");
        let latitude;
        let longitude;

        location.addEventListener('click', () => {
            navigator.geolocation.getCurrentPosition(function(position) {
                    latitude = position.coords.latitude,
                        longitude = position.coords.longitude
                    document.getElementById("hflat").value = latitude;
                    document.getElementById("hflng").value = longitude;
                    toastr.success('Current Location Fetched', 'Success', {
                        closeButton: true,
                        progressBar: true,
                        positionClass: 'toast-center'
                    });
                    location.style.animation = "none";
                },
                function(error) {
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            alert("User denied the request for geolocation.");
                            break;
                        case error.POSITION_UNAVAILABLE:
                            alert("Location information is unavailable.");
                            break;
                        case error.TIMEOUT:
                            alert("The request to get user location timed out.");
                            break;
                        case error.UNKNOWN_ERROR:
                            alert("An unknown error occurred.");
                            break;
                    }
                }
            );
        })
    }

    let proceed = document.getElementById("proceed-category");
    proceed.addEventListener('click', () => {
        var lat = document.getElementById("hflat").value;
        var lng = document.getElementById("hflng").value;

        if (lat == "" && lng == "") {
            toastr.error('Allow to track location', 'Error', {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-center',
            });
        } else {
            var t = document.getElementById("selectBox");
            var selectedText = t.options[t.selectedIndex].text;

            if (t.selectedIndex == 0) {
                toastr.error('Please select a category', 'Error', {
                    closeButton: true,
                    progressBar: true,
                    positionClass: 'toast-center'
                });
            } else {
                document.getElementById("hfindex").value = t.selectedIndex;
                const form = document.querySelector('#proceed_form');
                form.submit();
            }
            console.log(selectedText);
        }
    })
</script>
<script async='false' defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbO90cT0yC58yZySAryqrikz2hBfxPnqo&libraries=geometry&callback=initMap"></script>
@endsection