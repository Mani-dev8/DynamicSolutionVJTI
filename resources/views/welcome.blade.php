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

    <!-- TOASTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- //TOASTER -->

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

        *:focus {
            outline: none;
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

        html {
            scroll-behavior: smooth;

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
                        <div class="flex flex-col items-start justify-center pt-1 ml-2">
                            <span class=" text-base font-bold tracking-wide text-gray-700 uppercase -mb-2 ">Dynamic</span>
                            <span class=" text-sm font-bold tracking-wide text-gray-700 uppercase">Solution</span>
                        </div>
                    </a>
                    <ul class=" items-center hidden space-x-8 lg:flex">
                        <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Home</a></li>
                        <li><a href="/features" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                        <li><a href="/contact" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Contact</a></li>
                        <li><a href="/aboutus" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                        <li id='registration_btn'>
                            @if(session('user'))
                            <a href="/account" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" aria-label="Sign In" title="Sign In">
                                Account
                            </a>
                            @else
                            <a href="/login" id='ancher_id' class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" aria-label="Sign In" title="Sign In">
                                Sign In
                            </a>

                            @endif
                        </li>
                    </ul>
                    <!-- Mobile menu -->
                    <div class="lg:hidden">
                        <div aria-label="toggler" class="flex justify-center items-center">
                            <button aria-label="open" id="open" onclick="showNav(true)" class=" ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>

                            </button>

                        </div>


                    </div>
                </div>

            </div>
        </div>

        <div class=" " id="content">


            @yield('content')
        </div>
        <footer id="footer_desk" class="footer dark:bg-purple-900 relative w-full -mt-8">
            <!-- <input type="checkbox" name="" id="" class="absolute right-0 peer/foot w-full opacity-0 z-30 h-10 cursor-pointer">
            <span class="text-black absolute  peer-checked/foot:rotate-90 font-semibold dark:text-white">></span>
            <h1 class="text-black w-fit  m-auto dark:text-white">more info </h1> -->
            <div class="container  border-t-2 border-zinc-200 md:pl-6 lg:pl-12 dark:bg-opacity-10  h-fit overflow-hidden transition-all">
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


    </section>
    <div id='close_div' class="lg:hidden px-4 py-4 mx-auto h-[5rem] w-[100vw] flex flex-row items-center justify-end md:px-24 lg:px-8 absolute top-0 left-0 ">
        <button aria-label="close" id="close" onclick="showNav(true)" class=" hidden mb-1.5 focus:outline-none active:opacity-50 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:text-black  text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
    </div>

    <div id="Main" class=" xl:rounded-r absolute z-[99]   -translate-x-full left-0 lg:hidden  transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full  w-full sm:w-64 bg-gray-900 flex-col">
        <div class="hidden xl:flex justify-start p-6 items-center space-x-3">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg1.svg" alt="logo" />
            <p class="text-2xl leading-6 text-white">OvonRueden</p>
        </div>
        <div class="mt-6 flex flex-col justify-center items-start  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
            <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                <img src="login-images\dynamic_solution_logo.svg" alt="" srcset="" class='w-10 h-10 rounded shadow-md'>
                <div class="flex flex-col items-start justify-center pt-1 ml-2">
                    <span class=" text-base font-bold tracking-wide text-gray-100 uppercase -mb-2 ">Dynamic</span>
                    <span class=" text-sm font-bold tracking-wide text-gray-100 uppercase">Solution</span>
                </div>
            </a>
        </div>
        <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
            <button onclick="showMenu1(true)" class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  uppercase">Overview</p>
                <img class="transform" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg6.svg" alt="profile overview" />
            </button>
            <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 ">
                <a href='home' class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4 ">Home</p>
                </a>
                <a href='home' class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                    </svg>

                    <p class="text-base leading-4 ">Services</p>
                </a>
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
                    <p class="text-base leading-4  ">Features</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H7C6.46957 6 5.96086 6.21071 5.58579 6.58579C5.21071 6.96086 5 7.46957 5 8V17C5 17.5304 5.21071 18.0391 5.58579 18.4142C5.96086 18.7893 6.46957 19 7 19H16C16.5304 19 17.0391 18.7893 17.4142 18.4142C17.7893 18.0391 18 17.5304 18 17V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34314 18.6569 4 17 4C15.3431 4 14 5.34314 14 7C14 8.65685 15.3431 10 17 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">About us</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>

                    <p class="text-base leading-4  ">Contact Us</p>
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-center items-start   px-6 border-b border-gray-600 w-full  ">
            <button onclick="showMenu2(true)" class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5 uppercase   ">Account</p>
                <img id="icon2" class="transform rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg7.svg" alt="arrow" />
            </button>
            <div class=" flex justify-start flex-col items-start pb-5 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <p class="text-base leading-4  ">Profile</p>
                </button>
                <a class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                    </svg>

                    <p class="text-base leading-4 ">Orders</p>
                </a>
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
                    <p class="text-left leading-4 ">Change Password</p>
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H7C6.46957 6 5.96086 6.21071 5.58579 6.58579C5.21071 6.96086 5 7.46957 5 8V17C5 17.5304 5.21071 18.0391 5.58579 18.4142C5.96086 18.7893 6.46957 19 7 19H16C16.5304 19 17.0391 18.7893 17.4142 18.4142C17.7893 18.0391 18 17.5304 18 17V14" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34314 18.6569 4 17 4C15.3431 4 14 5.34314 14 7C14 8.65685 15.3431 10 17 10Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4  ">Notifications</p>
                </button>
                @if(session('user'))
                <a href='logout' class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 11H7C5.89543 11 5 11.8955 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8955 18.1046 11 17 11Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-base leading-4 ">Log Out</p>
                </a>
                @else
                <div id="anchor_signin">
                    <a id='signin' href='signin' class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 11H7C5.89543 11 5 11.8955 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8955 18.1046 11 17 11Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-base leading-4 ">Sign In</p>
                    </a>
                </div>
                @endif

            </div>
        </div>
    </div>
    <script>
        let Main = document.getElementById("Main");
        let open = document.getElementById("open");
        let close = document.getElementById("close")
        let content = document.getElementById("content")
        let close_div = document.getElementById("close_div")


        const showNav = (flag) => {
            if (flag) {
                Main.classList.toggle("-translate-x-full")
                Main.classList.toggle("translate-x-0")
                open.classList.toggle("hidden");
                close.classList.toggle("hidden")
                content.classList.toggle("opacity-50")
                close_div.classList.toggle("z-[100]")

            }
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        console.log("session== " + "{{session('user')}}")
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

</body>

</html>