<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- FONT -->

    <!-- <link rel="stylesheet" href="appointment.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- //FONT -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FOOTER-STYLING-START -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s ease;

            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */

        }

        *::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }

        .container {
            padding-top: 70px;
            max-width: 100%;
            margin: auto;
        }

        .row {

            display: flex;

            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            color: white;




        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {

            width: fit-content;


            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50%;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {

            text-transform: capitalize;

            text-decoration: none;
            font-weight: 300;



            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {



            padding-left: 8px;
        }

        .footer-col .social-links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            list-style: none;

        }

        .footer-col .social-links li {
            margin: 0 10px 0px 0px;
        }

        .footer-col .social-links .social {
            display: flex;
            flex-direction: row;
            height: 36px;
            width: 36px;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            margin: 0 10px 0px 0;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            transition: 0.5s ease;
            font-size: 30px;
            text-decoration: none;
            position: relative;
        }

        .footer-col .social-links .social:hover {
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-size: 40px;
        }

        .footer-col .social-icons .social::before {
            content: '';
            position: absolute;
            z-index: -1;
            height: 78px;
            width: 78px;

            border-radius: 50%;
            background: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            transform: scale(1);
            transition: 0.5s ease-in-out;
        }

        .footer-col .social-icons li .social:hover::before {
            transform: scale(8);

        }

        .fab {
            font-size: 20px
        }

        /*responsive*/
        @media(max-width:767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
                padding-left: 40px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 50%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        @media (max-width: 420px) {
            .footer-col {
                width: 100%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        *:focus {
            outline: none;
        }

        /*  body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            
        }*/
    </style>
    <!-- //FOOTER STYLING -->
    <style>
        .swiper-pagination-bullet-active {
            opacity: var(--swiper-pagination-bullet-opacity, 1);
            background: var(--swiper-pagination-color, #8a5bf5);
        }
    </style>
</head>


<body class="h-[100vh] w-[100vw] bg-white overflow-hidden relative font-pop ">
    <section class="dar  w-full h-full absolute  overflow-y-scroll">
        <div class="fixed top-0 z-20 bg-white w-full">
            <div id="header" class="px-4 py-4 mx-auto h-[5rem] sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="relative flex items-center justify-between">
                    <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                        <img src="login-images\dynamic_solution_logo.svg" alt="" srcset="" class='w-10 h-10 rounded shadow-md'>
                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">D.Solution</span>
                    </a>
                    <ul class=" items-center hidden space-x-8 lg:flex">
                        <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Home</a></li>
                        <li><a href="/features" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                        <li><a href="/contact" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Contact</a></li>
                        <li><a href="/aboutus" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                        <li>
                            <a href="/login" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" aria-label="Sign In" title="Sign In">
                                Sign In
                            </a>
                        </li>
                    </ul>
                    <!-- Mobile menu -->
                    <div class="lg:hidden">
                        <div aria-label="toggler" class="flex justify-center items-center">
                            <button aria-label="open" id="open" onclick="showNav(true)" class=" focus:outline-none focus:ring-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                            </button>
                            <button aria-label="close" id="close" onclick="showNav(true)" class="hidden focus:outline-none active:opacity-50 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>

                            </button>
                        </div>


                        <!-- Mobile menu dropdown 
                    <div class="absolute top-0 left-0 w-full">
                        <div class="p-5 bg-white border rounded shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                            <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                                <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                                <rect x="3" y="1" width="7" height="12"></rect>
                                <rect x="3" y="17" width="7" height="6"></rect>
                                <rect x="14" y="1" width="7" height="6"></rect>
                                <rect x="14" y="11" width="7" height="12"></rect>
                                </svg>
                                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                            </a>
                            </div>
                            <div>
                            <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                <path
                                    fill="currentColor"
                                    d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                                ></path>
                                </svg>
                            </button>
                            </div>
                        </div>
                        <nav>
                            <ul class="space-y-4">
                            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                            <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                            <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                            <li>
                                <a
                                href="/"
                                class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                                aria-label="Sign up"
                                title="Sign up"
                                >
                                Sign up
                                </a>
                            </li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                    -->
                    </div>
                </div>

            </div>
        </div>

        <div class=" " id="content">


            @yield('content')
        </div>
        <footer id="footer_desk" class="footer  dark:bg-purple-900 relative w-full -mt-8">
            <!-- <input type="checkbox" name="" id="" class="absolute right-0 peer/foot w-full opacity-0 z-30 h-10 cursor-pointer">
            <span class="text-black absolute  peer-checked/foot:rotate-90 font-semibold dark:text-white">></span>
            <h1 class="text-black w-fit  m-auto dark:text-white">more info </h1> -->
            <div class="container md:pl-6 lg:pl-12 dark:bg-opacity-10  h-fit overflow-hidden transition-all">
                <div class="row">
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">company</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">about us</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">our services</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">contact us</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">get help</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">FAQ</a></li>
                            <li><a href="#" class="text-xs sm:text-sm  md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black ">shipping</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">returns</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">order status</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">More</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">privacy policy</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">blog</a></li>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm  sm:text-base md:text-lg dark:text-white text-black">follow us</h4>

                        <div class="social-links">
                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class=" social text-xs sm:text-sm md:text-base"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-400 group-hover:text-black font-base group-hover:pl-2  transition-all ease-linear group-hover:underline">Facebook</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-400 group-hover:text-black font-base group-hover:pl-2  transition-all ease-linear group-hover:underline">Tweeter</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-400 group-hover:text-black font-base group-hover:pl-2  transition-all ease-linear group-hover:underline">Instagram</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex flex-row group my-1  items-center ">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-400 group-hover:text-black font-base group-hover:pl-2  transition-all ease-linear group-hover:underline">Linkedin</a>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


        <!-- <div class="relative mt-16 bg-violet-800 text-gray-200">
            <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-violet-800" preserveAspectRatio="none" viewBox="0 0 1440 54">
                <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
            </svg>
            <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
                    <div class="md:max-w-md lg:col-span-2">
                        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                            <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                                <rect x="3" y="1" width="7" height="12"></rect>
                                <rect x="3" y="17" width="7" height="6"></rect>
                                <rect x="14" y="1" width="7" height="6"></rect>
                                <rect x="14" y="11" width="7" height="12"></rect>
                            </svg>
                            <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Company</span>
                        </a>
                        <div class="mt-4 lg:max-w-sm">
                            <p class="text-sm text-deep-purple-50">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                            </p>
                            <p class="mt-4 text-sm text-deep-purple-50">
                                Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                        <div>
                            <p class="font-semibold tracking-wide text-teal-accent-400">
                                Category
                            </p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">News</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">World</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Games</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">References</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-semibold tracking-wide text-teal-accent-400">Cherry</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Web</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">eCommerce</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Business</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Entertainment</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-semibold tracking-wide text-teal-accent-400">Apples</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Media</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Brochure</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Nonprofit</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Educational</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Projects</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-semibold tracking-wide text-teal-accent-400">
                                Business
                            </p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Infopreneur</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Personal</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Wiki</a>
                                </li>
                                <li>
                                    <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Forum</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
                    <p class="text-sm text-gray-100">
                        © Copyright 2020 Lorem Inc. All rights reserved.
                    </p>
                    <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                        <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                            </svg>
                        </a>
                        <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"></path>
                            </svg>
                        </a>
                        <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

    </section>
    <div id="Main" class="xl:rounded-r absolute z-50  mt-  -translate-x-full left-0 lg:hidden  transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full  w-full sm:w-64 bg-gray-900 flex-col">
        <div class="hidden xl:flex justify-start p-6 items-center space-x-3">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg1.svg" alt="logo" />
            <p class="text-2xl leading-6 text-white">OvonRueden</p>
        </div>
        <div class="mt-6 flex flex-col justify-start items-center  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
            <button class="flex jusitfy-start items-center space-x-6 w-full  focus:outline-none  focus:text-indigo-400  text-white rounded ">
                <img class="fill-stroke " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg4.svg" alt="dashboard" />
                <p class="text-base leading-4 ">Dashboard</p>
            </button>
            <button class="flex jusitfy-start items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
                <img class="fill-stroke" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg5.svg" alt="users" />
                <p class="text-base leading-4 ">Users</p>
            </button>
        </div>
        <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
            <button onclick="showMenu1(true)" class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  uppercase">Profile Overview</p>
                <img class="transform" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg6.svg" alt="profile overview" />
            </button>
            <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Messages</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 19C10.2091 19 12 17.2091 12 15C12 12.7909 10.2091 11 8 11C5.79086 11 4 12.7909 4 15C4 17.2091 5.79086 19 8 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.85 12.15L19 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18 5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 8L17 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Security</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 8.00002C15.1046 8.00002 16 7.10459 16 6.00002C16 4.89545 15.1046 4.00002 14 4.00002C12.8954 4.00002 12 4.89545 12 6.00002C12 7.10459 12.8954 8.00002 14 8.00002Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 6H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 6H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 14C9.10457 14 10 13.1046 10 12C10 10.8954 9.10457 10 8 10C6.89543 10 6 10.8954 6 12C6 13.1046 6.89543 14 8 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 12H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 12H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 20C18.1046 20 19 19.1046 19 18C19 16.8955 18.1046 16 17 16C15.8954 16 15 16.8955 15 18C15 19.1046 15.8954 20 17 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 18H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 18H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Settings</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H7C6.46957 6 5.96086 6.21071 5.58579 6.58579C5.21071 6.96086 5 7.46957 5 8V17C5 17.5304 5.21071 18.0391 5.58579 18.4142C5.96086 18.7893 6.46957 19 7 19H16C16.5304 19 17.0391 18.7893 17.4142 18.4142C17.7893 18.0391 18 17.5304 18 17V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34314 18.6569 4 17 4C15.3431 4 14 5.34314 14 7C14 8.65685 15.3431 10 17 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Notifications</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 11H7C5.89543 11 5 11.8955 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8955 18.1046 11 17 11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Passwords</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 21H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 21V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 4L19 8L10 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Goals</p>
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
            <button onclick="showMenu2(true)" class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5 uppercase">VENDORS</p>
                <img id="icon2" class="transform rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg7.svg" alt="arrow" />
            </button>
            <div class=" flex justify-start flex-col items-start pb-5 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Messages</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 19C10.2091 19 12 17.2091 12 15C12 12.7909 10.2091 11 8 11C5.79086 11 4 12.7909 4 15C4 17.2091 5.79086 19 8 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.85 12.15L19 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18 5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 8L17 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Security</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 8.00002C15.1046 8.00002 16 7.10459 16 6.00002C16 4.89545 15.1046 4.00002 14 4.00002C12.8954 4.00002 12 4.89545 12 6.00002C12 7.10459 12.8954 8.00002 14 8.00002Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 6H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 6H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 14C9.10457 14 10 13.1046 10 12C10 10.8954 9.10457 10 8 10C6.89543 10 6 10.8954 6 12C6 13.1046 6.89543 14 8 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 12H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 12H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 20C18.1046 20 19 19.1046 19 18C19 16.8955 18.1046 16 17 16C15.8954 16 15 16.8955 15 18C15 19.1046 15.8954 20 17 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 18H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 18H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Settings</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H7C6.46957 6 5.96086 6.21071 5.58579 6.58579C5.21071 6.96086 5 7.46957 5 8V17C5 17.5304 5.21071 18.0391 5.58579 18.4142C5.96086 18.7893 6.46957 19 7 19H16C16.5304 19 17.0391 18.7893 17.4142 18.4142C17.7893 18.0391 18 17.5304 18 17V14" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34314 18.6569 4 17 4C15.3431 4 14 5.34314 14 7C14 8.65685 15.3431 10 17 10Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Notifications</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 11H7C5.89543 11 5 11.8955 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8955 18.1046 11 17 11Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Passwords</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 21H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 21V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 4L19 8L10 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Goals</p>
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-between items-center h-full pb-6   px-6  w-full  space-y-32 ">
            <button onclick="showMenu3(true)" class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  uppercase">SERVICES</p>
                <img id="icon2" class="transform rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg7.svg" alt="arrow" />
            </button>
            <div class=" flex justify-start flex-col items-start pb-5 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                    <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Messages</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 19C10.2091 19 12 17.2091 12 15C12 12.7909 10.2091 11 8 11C5.79086 11 4 12.7909 4 15C4 17.2091 5.79086 19 8 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.85 12.15L19 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18 5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 8L17 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Security</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 8.00002C15.1046 8.00002 16 7.10459 16 6.00002C16 4.89545 15.1046 4.00002 14 4.00002C12.8954 4.00002 12 4.89545 12 6.00002C12 7.10459 12.8954 8.00002 14 8.00002Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 6H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 6H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 14C9.10457 14 10 13.1046 10 12C10 10.8954 9.10457 10 8 10C6.89543 10 6 10.8954 6 12C6 13.1046 6.89543 14 8 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 12H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 12H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 20C18.1046 20 19 19.1046 19 18C19 16.8955 18.1046 16 17 16C15.8954 16 15 16.8955 15 18C15 19.1046 15.8954 20 17 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 18H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 18H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Settings</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H7C6.46957 6 5.96086 6.21071 5.58579 6.58579C5.21071 6.96086 5 7.46957 5 8V17C5 17.5304 5.21071 18.0391 5.58579 18.4142C5.96086 18.7893 6.46957 19 7 19H16C16.5304 19 17.0391 18.7893 17.4142 18.4142C17.7893 18.0391 18 17.5304 18 17V14" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34314 18.6569 4 17 4C15.3431 4 14 5.34314 14 7C14 8.65685 15.3431 10 17 10Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Notifications</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 11H7C5.89543 11 5 11.8955 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8955 18.1046 11 17 11Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Passwords</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 21H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 21V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 4L19 8L10 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Goals</p>
                </button>
            </div>
            <div class=" flex justify-between items-center w-full">
                <div class="flex justify-center items-center  space-x-2">
                    <div>
                        <img class="rounded-full" src="https://i.ibb.co/L1LQtBm/Ellipse-1.png" alt="avatar" />
                    </div>
                    <div class="flex justify-start flex-col items-start">
                        <p class="cursor-pointer text-sm leading-5 text-white">Alexis Enache</p>
                        <p class="cursor-pointer text-xs leading-3 text-gray-300">alexis81@gmail.com</p>
                    </div>
                </div>
                <svg class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </div>
    </div>
    <script>
        let Main = document.getElementById("Main");
        let open = document.getElementById("open");
        let close = document.getElementById("close")
        let content = document.getElementById("content")

        const showNav = (flag) => {
            if (flag) {
                Main.classList.toggle("-translate-x-full")
                Main.classList.toggle("translate-x-0")
                open.classList.toggle("hidden");
                close.classList.toggle("hidden")
                content.classList.toggle("opacity-50")
            }
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        if (window.location.href.includes("account") || window.location.href.includes("login") || window.location.href.includes("signup")) {
            document.getElementById('Main').style.display = "none";
            document.getElementById('header').style.display = "none";
            document.getElementById('footer_desk').style.display = "none";
        }
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 30,
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: ".swiper-pagination"
            }
        })
    </script>
    <!-- TILT-JS -->
    <script>
        var VanillaTilt = (function() {
            'use strict';

            /**
             * Created by Sergiu Șandor (micku7zu) on 1/27/2017.
             * Original idea: https://github.com/gijsroge/tilt.js
             * MIT License.
             * Version 1.8.0
             */

            class VanillaTilt {
                constructor(element, settings = {}) {
                    if (!(element instanceof Node)) {
                        throw ("Can't initialize VanillaTilt because " + element + " is not a Node.");
                    }

                    this.width = null;
                    this.height = null;
                    this.clientWidth = null;
                    this.clientHeight = null;
                    this.left = null;
                    this.top = null;

                    // for Gyroscope sampling
                    this.gammazero = null;
                    this.betazero = null;
                    this.lastgammazero = null;
                    this.lastbetazero = null;

                    this.transitionTimeout = null;
                    this.updateCall = null;
                    this.event = null;

                    this.updateBind = this.update.bind(this);
                    this.resetBind = this.reset.bind(this);

                    this.element = element;
                    this.settings = this.extendSettings(settings);

                    this.reverse = this.settings.reverse ? -1 : 1;
                    this.resetToStart = VanillaTilt.isSettingTrue(this.settings["reset-to-start"]);
                    this.glare = VanillaTilt.isSettingTrue(this.settings.glare);
                    this.glarePrerender = VanillaTilt.isSettingTrue(this.settings["glare-prerender"]);
                    this.fullPageListening = VanillaTilt.isSettingTrue(this.settings["full-page-listening"]);
                    this.gyroscope = VanillaTilt.isSettingTrue(this.settings.gyroscope);
                    this.gyroscopeSamples = this.settings.gyroscopeSamples;

                    this.elementListener = this.getElementListener();

                    if (this.glare) {
                        this.prepareGlare();
                    }

                    if (this.fullPageListening) {
                        this.updateClientSize();
                    }

                    this.addEventListeners();
                    this.reset();

                    if (this.resetToStart === false) {
                        this.settings.startX = 0;
                        this.settings.startY = 0;
                    }
                }

                static isSettingTrue(setting) {
                    return setting === "" || setting === true || setting === 1;
                }

                /**
                 * Method returns element what will be listen mouse events
                 * @return {Node}
                 */
                getElementListener() {
                    if (this.fullPageListening) {
                        return window.document;
                    }

                    if (typeof this.settings["mouse-event-element"] === "string") {
                        const mouseEventElement = document.querySelector(this.settings["mouse-event-element"]);

                        if (mouseEventElement) {
                            return mouseEventElement;
                        }
                    }

                    if (this.settings["mouse-event-element"] instanceof Node) {
                        return this.settings["mouse-event-element"];
                    }

                    return this.element;
                }

                /**
                 * Method set listen methods for this.elementListener
                 * @return {Node}
                 */
                addEventListeners() {
                    this.onMouseEnterBind = this.onMouseEnter.bind(this);
                    this.onMouseMoveBind = this.onMouseMove.bind(this);
                    this.onMouseLeaveBind = this.onMouseLeave.bind(this);
                    this.onWindowResizeBind = this.onWindowResize.bind(this);
                    this.onDeviceOrientationBind = this.onDeviceOrientation.bind(this);

                    this.elementListener.addEventListener("mouseenter", this.onMouseEnterBind);
                    this.elementListener.addEventListener("mouseleave", this.onMouseLeaveBind);
                    this.elementListener.addEventListener("mousemove", this.onMouseMoveBind);

                    if (this.glare || this.fullPageListening) {
                        window.addEventListener("resize", this.onWindowResizeBind);
                    }

                    if (this.gyroscope) {
                        window.addEventListener("deviceorientation", this.onDeviceOrientationBind);
                    }
                }

                /**
                 * Method remove event listeners from current this.elementListener
                 */
                removeEventListeners() {
                    this.elementListener.removeEventListener("mouseenter", this.onMouseEnterBind);
                    this.elementListener.removeEventListener("mouseleave", this.onMouseLeaveBind);
                    this.elementListener.removeEventListener("mousemove", this.onMouseMoveBind);

                    if (this.gyroscope) {
                        window.removeEventListener("deviceorientation", this.onDeviceOrientationBind);
                    }

                    if (this.glare || this.fullPageListening) {
                        window.removeEventListener("resize", this.onWindowResizeBind);
                    }
                }

                destroy() {
                    clearTimeout(this.transitionTimeout);
                    if (this.updateCall !== null) {
                        cancelAnimationFrame(this.updateCall);
                    }

                    this.reset();

                    this.removeEventListeners();
                    this.element.vanillaTilt = null;
                    delete this.element.vanillaTilt;

                    this.element = null;
                }

                onDeviceOrientation(event) {
                    if (event.gamma === null || event.beta === null) {
                        return;
                    }

                    this.updateElementPosition();

                    if (this.gyroscopeSamples > 0) {
                        this.lastgammazero = this.gammazero;
                        this.lastbetazero = this.betazero;

                        if (this.gammazero === null) {
                            this.gammazero = event.gamma;
                            this.betazero = event.beta;
                        } else {
                            this.gammazero = (event.gamma + this.lastgammazero) / 2;
                            this.betazero = (event.beta + this.lastbetazero) / 2;
                        }

                        this.gyroscopeSamples -= 1;
                    }

                    const totalAngleX = this.settings.gyroscopeMaxAngleX - this.settings.gyroscopeMinAngleX;
                    const totalAngleY = this.settings.gyroscopeMaxAngleY - this.settings.gyroscopeMinAngleY;

                    const degreesPerPixelX = totalAngleX / this.width;
                    const degreesPerPixelY = totalAngleY / this.height;

                    const angleX = event.gamma - (this.settings.gyroscopeMinAngleX + this.gammazero);
                    const angleY = event.beta - (this.settings.gyroscopeMinAngleY + this.betazero);

                    const posX = angleX / degreesPerPixelX;
                    const posY = angleY / degreesPerPixelY;

                    if (this.updateCall !== null) {
                        cancelAnimationFrame(this.updateCall);
                    }

                    this.event = {
                        clientX: posX + this.left,
                        clientY: posY + this.top,
                    };

                    this.updateCall = requestAnimationFrame(this.updateBind);
                }

                onMouseEnter() {
                    this.updateElementPosition();
                    this.element.style.willChange = "transform";
                    this.setTransition();
                }

                onMouseMove(event) {
                    if (this.updateCall !== null) {
                        cancelAnimationFrame(this.updateCall);
                    }

                    this.event = event;
                    this.updateCall = requestAnimationFrame(this.updateBind);
                }

                onMouseLeave() {
                    this.setTransition();

                    if (this.settings.reset) {
                        requestAnimationFrame(this.resetBind);
                    }
                }

                reset() {
                    this.onMouseEnter();

                    if (this.fullPageListening) {
                        this.event = {
                            clientX: (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.clientWidth,
                            clientY: (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.clientHeight
                        };
                    } else {
                        this.event = {
                            clientX: this.left + ((this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.width),
                            clientY: this.top + ((this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.height)
                        };
                    }

                    let backupScale = this.settings.scale;
                    this.settings.scale = 1;
                    this.update();
                    this.settings.scale = backupScale;
                    this.resetGlare();
                }

                resetGlare() {
                    if (this.glare) {
                        this.glareElement.style.transform = "rotate(180deg) translate(-50%, -50%)";
                        this.glareElement.style.opacity = "0";
                    }
                }

                getValues() {
                    let x, y;

                    if (this.fullPageListening) {
                        x = this.event.clientX / this.clientWidth;
                        y = this.event.clientY / this.clientHeight;
                    } else {
                        x = (this.event.clientX - this.left) / this.width;
                        y = (this.event.clientY - this.top) / this.height;
                    }

                    x = Math.min(Math.max(x, 0), 1);
                    y = Math.min(Math.max(y, 0), 1);

                    let tiltX = (this.reverse * (this.settings.max - x * this.settings.max * 2)).toFixed(2);
                    let tiltY = (this.reverse * (y * this.settings.max * 2 - this.settings.max)).toFixed(2);
                    let angle = Math.atan2(this.event.clientX - (this.left + this.width / 2), -(this.event.clientY - (this.top + this.height / 2))) * (180 / Math.PI);

                    return {
                        tiltX: tiltX,
                        tiltY: tiltY,
                        percentageX: x * 100,
                        percentageY: y * 100,
                        angle: angle
                    };
                }

                updateElementPosition() {
                    let rect = this.element.getBoundingClientRect();

                    this.width = this.element.offsetWidth;
                    this.height = this.element.offsetHeight;
                    this.left = rect.left;
                    this.top = rect.top;
                }

                update() {
                    let values = this.getValues();

                    this.element.style.transform = "perspective(" + this.settings.perspective + "px) " +
                        "rotateX(" + (this.settings.axis === "x" ? 0 : values.tiltY) + "deg) " +
                        "rotateY(" + (this.settings.axis === "y" ? 0 : values.tiltX) + "deg) " +
                        "scale3d(" + this.settings.scale + ", " + this.settings.scale + ", " + this.settings.scale + ")";

                    if (this.glare) {
                        this.glareElement.style.transform = `rotate(${values.angle}deg) translate(-50%, -50%)`;
                        this.glareElement.style.opacity = `${values.percentageY * this.settings["max-glare"] / 100}`;
                    }

                    this.element.dispatchEvent(new CustomEvent("tiltChange", {
                        "detail": values
                    }));

                    this.updateCall = null;
                }

                /**
                 * Appends the glare element (if glarePrerender equals false)
                 * and sets the default style
                 */
                prepareGlare() {
                    // If option pre-render is enabled we assume all html/css is present for an optimal glare effect.
                    if (!this.glarePrerender) {
                        // Create glare element
                        const jsTiltGlare = document.createElement("div");
                        jsTiltGlare.classList.add("js-tilt-glare");

                        const jsTiltGlareInner = document.createElement("div");
                        jsTiltGlareInner.classList.add("js-tilt-glare-inner");

                        jsTiltGlare.appendChild(jsTiltGlareInner);
                        this.element.appendChild(jsTiltGlare);
                    }

                    this.glareElementWrapper = this.element.querySelector(".js-tilt-glare");
                    this.glareElement = this.element.querySelector(".js-tilt-glare-inner");

                    if (this.glarePrerender) {
                        return;
                    }

                    Object.assign(this.glareElementWrapper.style, {
                        "position": "absolute",
                        "top": "0",
                        "left": "0",
                        "width": "100%",
                        "height": "100%",
                        "overflow": "hidden",
                        "pointer-events": "none",
                        "border-radius": "inherit"
                    });

                    Object.assign(this.glareElement.style, {
                        "position": "absolute",
                        "top": "50%",
                        "left": "50%",
                        "pointer-events": "none",
                        "background-image": `linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)`,
                        "transform": "rotate(180deg) translate(-50%, -50%)",
                        "transform-origin": "0% 0%",
                        "opacity": "0"
                    });

                    this.updateGlareSize();
                }

                updateGlareSize() {
                    if (this.glare) {
                        const glareSize = (this.element.offsetWidth > this.element.offsetHeight ? this.element.offsetWidth : this.element.offsetHeight) * 2;

                        Object.assign(this.glareElement.style, {
                            "width": `${glareSize}px`,
                            "height": `${glareSize}px`,
                        });
                    }
                }

                updateClientSize() {
                    this.clientWidth = window.innerWidth ||
                        document.documentElement.clientWidth ||
                        document.body.clientWidth;

                    this.clientHeight = window.innerHeight ||
                        document.documentElement.clientHeight ||
                        document.body.clientHeight;
                }

                onWindowResize() {
                    this.updateGlareSize();
                    this.updateClientSize();
                }

                setTransition() {
                    clearTimeout(this.transitionTimeout);
                    this.element.style.transition = this.settings.speed + "ms " + this.settings.easing;
                    if (this.glare) this.glareElement.style.transition = `opacity ${this.settings.speed}ms ${this.settings.easing}`;

                    this.transitionTimeout = setTimeout(() => {
                        this.element.style.transition = "";
                        if (this.glare) {
                            this.glareElement.style.transition = "";
                        }
                    }, this.settings.speed);

                }

                /**
                 * Method return patched settings of instance
                 * @param {boolean} settings.reverse - reverse the tilt direction
                 * @param {number} settings.max - max tilt rotation (degrees)
                 * @param {startX} settings.startX - the starting tilt on the X axis, in degrees. Default: 0
                 * @param {startY} settings.startY - the starting tilt on the Y axis, in degrees. Default: 0
                 * @param {number} settings.perspective - Transform perspective, the lower the more extreme the tilt gets
                 * @param {string} settings.easing - Easing on enter/exit
                 * @param {number} settings.scale - 2 = 200%, 1.5 = 150%, etc..
                 * @param {number} settings.speed - Speed of the enter/exit transition
                 * @param {boolean} settings.transition - Set a transition on enter/exit
                 * @param {string|null} settings.axis - What axis should be enabled. Can be "x" or "y"
                 * @param {boolean} settings.glare - if it should have a "glare" effect
                 * @param {number} settings.max-glare - the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                 * @param {boolean} settings.glare-prerender - false = VanillaTilt creates the glare elements for you, otherwise
                 * @param {boolean} settings.full-page-listening - If true, parallax effect will listen to mouse move events on the whole document, not only the selected element
                 * @param {string|object} settings.mouse-event-element - String selector or link to HTML-element what will be listen mouse events
                 * @param {boolean} settings.reset - false = If the tilt effect has to be reset on exit
                 * @param {boolean} settings.reset-to-start - true = On reset event (mouse leave) will return to initial start angle (if startX or startY is set)
                 * @param {gyroscope} settings.gyroscope - Enable tilting by deviceorientation events
                 * @param {gyroscopeSensitivity} settings.gyroscopeSensitivity - Between 0 and 1 - The angle at which max tilt position is reached. 1 = 90deg, 0.5 = 45deg, etc..
                 * @param {gyroscopeSamples} settings.gyroscopeSamples - How many gyroscope moves to decide the starting position.
                 */
                extendSettings(settings) {
                    let defaultSettings = {
                        reverse: false,
                        max: 15,
                        startX: 0,
                        startY: 0,
                        perspective: 1000,
                        easing: "cubic-bezier(.03,.98,.52,.99)",
                        scale: 1,
                        speed: 300,
                        transition: true,
                        axis: null,
                        glare: false,
                        "max-glare": 1,
                        "glare-prerender": false,
                        "full-page-listening": false,
                        "mouse-event-element": null,
                        reset: true,
                        "reset-to-start": true,
                        gyroscope: true,
                        gyroscopeMinAngleX: -45,
                        gyroscopeMaxAngleX: 45,
                        gyroscopeMinAngleY: -45,
                        gyroscopeMaxAngleY: 45,
                        gyroscopeSamples: 10
                    };

                    let newSettings = {};
                    for (var property in defaultSettings) {
                        if (property in settings) {
                            newSettings[property] = settings[property];
                        } else if (this.element.hasAttribute("data-tilt-" + property)) {
                            let attribute = this.element.getAttribute("data-tilt-" + property);
                            try {
                                newSettings[property] = JSON.parse(attribute);
                            } catch (e) {
                                newSettings[property] = attribute;
                            }

                        } else {
                            newSettings[property] = defaultSettings[property];
                        }
                    }

                    return newSettings;
                }

                static init(elements, settings) {
                    if (elements instanceof Node) {
                        elements = [elements];
                    }

                    if (elements instanceof NodeList) {
                        elements = [].slice.call(elements);
                    }

                    if (!(elements instanceof Array)) {
                        return;
                    }

                    elements.forEach((element) => {
                        if (!("vanillaTilt" in element)) {
                            element.vanillaTilt = new VanillaTilt(element, settings);
                        }
                    });
                }
            }

            if (typeof document !== "undefined") {
                /* expose the class to window */
                window.VanillaTilt = VanillaTilt;

                /**
                 * Auto load
                 */
                VanillaTilt.init(document.querySelectorAll("[data-tilt]"));
            }

            return VanillaTilt;

        }());
    </script>
    <!-- //TILT-JS -->

</body>

</html>