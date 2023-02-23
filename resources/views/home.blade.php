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
        height: 100%;
        padding: 10px;
        border: none;
        background-color: #f5f5f5;
        color: #333;
        font-size: 16px;
        font-weight: bold;
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

    .arrow::before {
        content: "\25BC";
        position: absolute;
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%);
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
</style>
<div class="w-full h-fit relative mt-10">
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
    <div class="mb-16 ">
        <div class="bg-gray-100">
            <div class="px-4  py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class=" max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 mt-20">
                    <div>
                        <!-- <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                            Brand new
                        </p> -->
                    </div>
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
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
                </div>
                <div class="flex items-center sm:justify-center">
                    <a href="contact"><button type="submit" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition-all duration-200 rounded shadow-md shadow-purple-300 hover:shadow-none bg-purple-600 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                            Get started
                        </button></a>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn more</a>
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

        <form id='proceed_form' class="relative px-4 sm:px-0" action="appointment">
            <input type="text" value="" name="nameindex" id="hfindex" hidden>
            <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
            <div class="relative py-10 flex justify-evenly items-center flex-col sm:flex-row gap-5 mx-auto overflow-hidden bg-white divide-y rounded shadow w-[60%] sm:w-full sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
                <div class="custom-select w-[67%] sm:w-[29%]">
                    <select id="selectBox">
                        <option value="" disabled selected hidden class="font-xs">Select A Category</option>
                        <option value="1">Appliances</option>
                        <option value="2">Computers</option>
                        <option value="3">Mobile Devices</option>
                        <option value="4">Plumbers</option>
                    </select>
                    <div class="arrow"></div>
                </div>

                <div class="flex gap-4 justify-center items-center px-3 py-2  border-2 border-white rounded-md">
                    <p class="font-semibold">Get Current Location</p>
                    <div class="h-9 w-9 cursor-pointer rounded-full bg-gray-400 flex justify-center items-center hover:bg-gray-500" id="currLoc">
                        <i class="fa-solid fa-location-crosshairs text-xl"></i>
                    </div>
                </div>

                <button class="h-9 w-32 bg-indigo-600 font-semibold rounded-md text-white cursor-pointer" id="proceed-category" onclick="return event.preventDefault()">Proceed
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
                Your new ideal style
            </h5>
            <p class="mb-5 text-gray-800">
                <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed consequat odio sollicitudin.
            </p>
            <div class="flex items-center">
                <button type="submit" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
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


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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
                    <p class="mb-2 text-lg font-bold">Step 1</p>
                    <p class="text-gray-700">
                        All recipes are written using certain conventions, which define the characteristics of common ingredients. The rules vary from place to place.
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
                    <p class="text-gray-700">
                        The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
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
                    <p class="text-gray-700">
                        Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man. I will destroy you!
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
                    <p class="text-gray-700">
                        If one examines precultural libertarianism, one is faced with a choice: either accept rationalism or conclude that context is a product.
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
                    <p class="mb-2 text-lg font-bold">Success</p>
                    <p class="text-gray-700"></p>
                </div>
            </div>
        </div>
        <div class="relative">
            <img class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full" src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
        </div>
    </div>
</div>


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
            <p class="mb-2 font-bold md:text-lg">Downloads</p>
            <p class="text-gray-700">
                Three movie stars, Chloe, Lexa, and Jon, are filming a movie in the Amazon. They’re very famous and very high-maintenance effort.
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
                One day, after filming a scene deep in the rainforest, the three actors and their agents decide to head back to home base by foot.
            </p>
        </div>
        <div>
            <div class="flex">
                <h6 class="mr-2 text-4xl font-bold md:text-5xl text-deep-purple-accent-400">
                    52M
                </h6>
                <div class="flex items-center justify-center rounded-full bg-teal-accent-400 w-7 h-7">
                    <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
            </div>
            <p class="mb-2 font-bold md:text-lg">Cookies</p>
            <p class="text-gray-700">
                Suddenly, they come to a large river. On the riverbank, they find a small rowboat, but it’s only big enough to hold two of them at one time.
            </p>
        </div>
    </div>
</div>
<!-- //RATING -->





<div class="pb-24 min-h-[90rem] w-full max-w-[1340px] m-auto sm:px-12 px-4 text-white md:pt-20 lg:pt-24 sm:pt-16 xs:mt-10 ">
    <!-- COMPANY OVERVIEW  -->



    <div class="px-6 py-12 mt-5 bg-violet-700 rounded-tr-[4rem] rounded-bl-[4rem] ">
        <div class="w-full h-fit  flex flex-col items-center ">
            <h1 class="sm:text-2xl md:text-3xl text-lg text-center font-bold md:mb-20 mb-5 pb-2 border-b border-white border-opacity-30">‟ what make us stands out in a crowded market ”</h1>
            <div class="flex flex-col gap-10 ">
                <div class="flex w-full md:flex-row pb-2  flex-col items-center justify-center gap-5 border-b border-white border-opacity-30 md:border-none">
                    <div class="sm:w-1/2 w-10/12 ">
                        <img class="card1 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/business-expert-5665587-4745552.png?f=webp " alt="" srcset="">
                    </div>
                    <div class="card2 sm:w-1/2 w-10/12 h-full flex flex-col  justify-center text-[2vw] font-thin tracking-wider hide">
                        <h1 class=" md:text-2xl text-lg leading-5 mb-2 font-bold ">
                            Expertise and experience in the industry
                        </h1>
                        <p class="xs:text-sm  text-xs ">
                            "Welcome to our company, where our skilled and experienced technicians provide top-notch repairs and service. With our in-depth knowledge of the industry and extensive experience, we offer reliable and efficient solutions for all your repair needs."
                        </p>
                    </div>
                </div>
                <div class="flex w-full md:flex-row flex-col items-center justify-center gap-5 pb-2 border-b border-white border-opacity-30 md:border-none">
                    <div class="sm:w-1/2 w-10/12 md:hidden ">
                        <img class="card4 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/product-protection-5480357-4569719.png?f=webp " alt="" srcset="">
                    </div>
                    <div class=" card3 sm:w-1/2 w-10/12 h-full flex flex-col justify-center text-[2vw] font-thin tracking-wider hide">
                        <h1 class=" md:text-2xl text-lg leading-5 mb-2 font-bold ">
                            High-quality and reliable repairs, backed by warranties
                        </h1>
                        <p class="xs:text-sm  text-xs ">
                            "At our repair service company, we're committed to providing the highest quality repairs and services, using only the best materials and parts. We stand behind our work with warranties, so you can trust that your devices will be in good hands."
                        </p>
                    </div>
                    <div class="sm:w-1/2 w-10/12 hidden md:block">
                        <img class="card4 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/product-protection-5480357-4569719.png?f=webp " alt="" srcset="">
                    </div>
                </div>
                <div class="flex w-full md:flex-row flex-col items-center justify-center gap-5 ">
                    <div class="sm:w-1/2 w-10/12 ">
                        <img class="card1 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/rupee-coin-5169249-4314678.png?f=webp" alt="" srcset="">
                    </div>
                    <div class="card2 sm:w-1/2 w-10/12 h-full flex flex-col justify-center text-[2vw] font-thin tracking-wider hide">
                        <h1 class=" md:text-2xl text-lg leading-5 mb-2 font-bold  ">
                            Competitive pricing and transparent pricing structures
                        </h1>
                        <p class="xs:text-sm  text-xs ">
                            "At our repair service company, we believe in offering fair and competitive pricing for all our services. We provide clear and transparent pricing structures so you know exactly what you're paying for. You can count on us for high-quality repairs at a price that won't break the bank."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //COMPANY OVERVIEW -->


    <!-- PRICING -->

    <div class="lg:flex items-center justify-between my-20">
        <div class="lg:w-1/2 w-full">
            <p class="text-base leading-4 text-gray-600 dark:text-gray-200">Choose your plan</p>
            <h1 role="heading" class="md:text-5xl text-3xl font-bold leading-10 mt-3 text-gray-800 dark:text-white">Our pricing plan</h1>
            <p role="contentinfo" class="text-base leading-5 mt-5 text-gray-600 dark:text-gray-200">"Get more out of your devices with our maintenance and repair subscriptions"</p>
            <div class="w-56">
                <button onclick="toggleIt()" class="bg-gray-100 dark:bg-gray-800 shadow rounded-full flex items-center mt-10 ">
                    <div class="bg-gray-100 dark:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none text-base leading-none text-gray-600 dark:text-gray-200 rounded-full py-4 px-6 mr-1" id="monthly">Monthly</div>
                    <div class="bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none text-base leading-none text-white rounded-full py-4 px-6" id="annually">Annually</div>
                </button>
            </div>
        </div>
        <div class="xl:w-1/2 lg:w-7/12 relative w-full lg:mt-0 mt-12 md:px-8" role="list">
            <img src="https://i.ibb.co/0n6DSS3/bgimg.png" class="absolute w-full -ml-12 mt-24" alt="background circle images" />
            <div role="listitem" class="bg-gray-50 dark:bg-gray-800 cursor-pointer shadow-md rounded-lg p-8 relative z-30">
                <div class="md:flex items-center justify-between">
                    <h2 class="text-2xl font-semibold md:mt-0 mt-4 leading-6 text-gray-800 dark:text-white">Basic Maintenance Plan</h2>
                    <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white ">₹1999<span class="font-normal text-base">/mo</span></p>
                </div>
                <p class="md:w-80 text-base leading-6 mt-4 text-gray-600 dark:text-gray-200">Keep your devices in top condition with our annual maintenance plan. Includes one annual device check-up, cleaning, and minor repairs. </p>
            </div>
            <div role="listitem" class="bg-gray-50 dark:bg-gray-800 cursor-pointer shadow-md rounded-lg mt-3 flex relative z-30">
                <div class="w-2.5 h-auto bg-indigo-700 rounded-tl-md rounded-bl-md"></div>
                <div class="w-full p-8">
                    <div class="md:flex items-center justify-between">
                        <h2 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Priority Repair Plan</h2>
                        <p class="text-2xl md:mt-0 mt-4 font-semibold leading-6 text-gray-800 dark:text-white">₹2999<span class="font-normal text-base">/mo</span></p>
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





    <!-- ABOUT COMPANY -->
    <div class=" border border-white py-10 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem]">
        <h1 class="lg:text-5xl md:text-4xl sm:text-3xl text-2xl text-center font-bold mb-10">About Our Company</h1>
        <div class="about-us h-auto w-full grid md:grid-cols-2 gap-5   pr-2 ">
            <div class="w-full  h-full flex flex-row items-center justify-center ">
                <div class="relative bg-white bg-opacity-30  shadow-violet-900 shadow-2xl  rounded-xl ">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/business-goal-5262987-4396863.png?f=webp" class="max-h-[20rem] border-[3px] z-30 border-opacity-20 border-violet-900 h-full m-auto " alt="" srcset="">
                    <!-- <div class="absolute w-full h-full z-0 -top-5 -right-5 border "></div> -->
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
    </div>
    <!-- //ABOUT COMPANY -->
    <!-- OUR SERVICES -->



    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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



    <div class="border border-white py-10 pb-16 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem] px-5 flex flex-col justify-center">
        <h1 class="text-5xl text-center font-bold mb-10 mt-5 ">Our Services</h1>
        <div class="grid md:grid-cols-3  xs:grid-cols-2 grid-cols-1 gap-5 items-center content-center justify-center">
            <div class="px-3 py-5 text-center group relative gap-6 hover:text-white text-violet-100 hover:bg-black hover:bg-opacity-30 transition-all bg-white bg-opacity-30 w-full aspect-square border border-transparent hover:border-white rounded-lg  flex flex-col items-center justify-center ">
                <div class="absolute w-full group-hover:opacity-40 group-hover:scale-75 opacity-0 z-10 h-full">
                    <img src="ima/Group 1.png" alt="" srcset="" class="w-full h-full">
                </div>
                <h3 class="text-3xl font-bold z-10">Appliance</h3>
                <p class="z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia repellat aperiam doloribus fugiat autem architecto voluptate minima doloremque quis.</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 mt-2 z-10 hover:bg-white hover:text-black transition-all rounded-full border  ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </div>
            <div class="px-3 py-5 text-center group relative gap-6 hover:text-white text-violet-100 hover:bg-black hover:bg-opacity-30 transition-all bg-white bg-opacity-30 w-full aspect-square border border-transparent hover:border-white rounded-lg  flex flex-col items-center justify-center ">
                <div class="absolute w-full group-hover:opacity-40 group-hover:scale-75 opacity-0 z-10 h-full">
                    <img src="ima/Group 1(2).png" alt="" srcset="" class="w-full h-full">
                </div>
                <h3 class="text-3xl font-bold z-10">Appliance</h3>
                <p class="z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia repellat aperiam doloribus fugiat autem architecto voluptate minima doloremque quis.</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 mt-2 z-10 hover:bg-white hover:text-black transition-all rounded-full border  ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </div>
            <div class="px-3 py-5 text-center group relative gap-6 hover:text-white text-violet-100 hover:bg-black hover:bg-opacity-30 transition-all bg-white bg-opacity-30 w-full aspect-square border border-transparent hover:border-white rounded-lg  flex flex-col items-center justify-center ">
                <div class="absolute w-full group-hover:opacity-40 group-hover:scale-75 opacity-0 z-10 h-full">
                    <img src="ima/Group 1(1).png" alt="" srcset="" class="w-full h-full">
                </div>
                <h3 class="text-3xl font-bold z-10">Appliance</h3>
                <p class="z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia repellat aperiam doloribus fugiat autem architecto voluptate minima doloremque quis.</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 mt-2 z-10 hover:bg-white hover:text-black transition-all rounded-full border  ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </div>

        </div>

        <button class=" mt-20"><a href="contact" class="py-3 bg-white bg-opacity-40 hover:bg-transparent active:opacity-50  transition-all text-white  text-xl border border-transparent hover:border-white rounded-md w-56 m-auto px-8">View All</a></button>

    </div>



    <!-- //OUR SERVICES -->

    <!-- WHY CHOOSE US -->
    <div class="w-full border border-white py-10 pb-20 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem]  flex flex-col justify-center">
        <h1 class="sm:text-5xl text-2xl text-center font-bold mb-10 mt-5 ">
            Why Choose Us
        </h1>
        <div class="grid md:grid-cols-2  grid-cols-1">
            <div class="flex flex-col  items-start order-2 md:order-1 px-5">
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Expertise and Experience</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Quality and Reliability</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Transparency and Fairness</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Convenience</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Customer Service</h1>
                </div>
            </div>
            <div class="relative h-80 order-1 ">
                <div class=" absolute w-40 h-64 left-[2%] z-0 border-dashed animate-pulse  rounded border-2 -top-5 mt-20 ">
                </div>
                <div class=" absolute w-1/2 h-72 max-w-[14rem] min-w-[12rem] right-[2%] md:left-56  z-0 border-dashed animate-pulse  rounded border-2 -top-[6.5rem]   mt-20 ">
                </div>
                <img src="assets/ac_technician.png " alt="" class="w-40 rounded md:mt-20 mt-9 z-10 absolute left-[5%] " srcset="">
                <img src="assets/technician_refridge.jpg" alt="" class="w-1/2 max-w-[14rem] min-w-[12rem] min-h-[18rem] rounded absolute -top-2 right-[5%] md:left-52 " srcset="">
            </div>
        </div>
    </div>

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
                        Let us handle<br class="hidden md:block" />
                        your next
                        <span class="inline-block text-deep-purple-accent-400">destination</span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
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
</div>
<script>
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
                const form=document.querySelector('#proceed_form');
                form.submit();
            }
            console.log(selectedText);
        }
    })
</script>
<script async='false' defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbO90cT0yC58yZySAryqrikz2hBfxPnqo&libraries=geometry&callback=initMap"></script>
@endsection