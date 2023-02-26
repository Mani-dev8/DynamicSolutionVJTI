@extends('welcome')
@section('content')
<style>
    .right input[type="text"] {
        padding: 7px 5px 7px 15px;
        border-radius: 5px;
    }

    .right input[type="email"] {
        padding: 7px 5px 7px 15px;
        border-radius: 5px;
    }

    textarea {
        padding: 7px 5px 7px 15px;
        border-radius: 5px;
    }

    html {
        scroll-behavior: smooth;
    }

    .left-inner,
    .left-inner img {
        border-bottom-right-radius: 80px;
    }

    @media screen and (min-width: 374px) and (max-width: 700px) {
        .container {
            flex-direction: column;
        }

        /* .about-email{
        margin-left: 15px;
    } */
    }

    .top-section {
        background-image: url("pexels-frank-cone-3573556.jpg");
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .left-inner {
        background-image: url("pexels-francesco-ungaro-432016.jpg");
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
<section class="top-section h-[200px] flex  pt-20 flex-col justify-center items-center gap-3 bg-slate-600">
    <!-- <img src="steve-johnson-hokONTrHIAQ-unsplash.jpg" class="opacity-50 h-full w-full relative"> -->
    <h2 class="text-4xl font-semibold text-white">Contact Us</h2>
    <span class="flex gap-3">
        <a class="text-white font-semibold cursor-pointer">Home</a>
        <a class="text-red-500 font-semibold cursor-pointer">Contact Us</a>
    </span>
</section>

<section class="min-h-[600px] w-full flex flex-col justify-center items-center gap-5 pt-10 px-5 md:px-20" style="background: linear-gradient(180deg, #F5F5F5 67%, #FFF 33%);">
    <h3 class="text-black text-2xl font-bold">Needs Help? Let's Get In Touch</h3>
    <p class="text-slate-500 font-semibold max-w-[600px] text-[15px] text-center">you can tell any of your queries in the below form without hesitating, we will reply you within 24 hours.</p>
    <div class="container  min-h-[350px] w-full flex bg-white drop-shadow-lg" style="padding-top: 0px;">
        <div class="left min-w-[40%]">
            <div class="left-inner min-h-[70%] rounded-br-2xl px-5 py-6 bg-slate-600 flex flex-col gap-2" style="border-bottom-right-radius: 80px;">
                <!-- <img src="steve-johnson-hokONTrHIAQ-unsplash.jpg" class="opacity-50"> -->
                <h2 class="text-white text-[30px] font-semibold">Get In Touch</h2>
                <div class="wrapper flex flex-wrap py-2 px-2 gap-y-3 gap-x-8">
                    <!-- gap-3 xl:gap-7 -->
                    <div class="flex justify-center items-start">
                        <i class="fa-sharp fa-solid fa-location-dot text-red-500 text-[23px] pr-4 py-2"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-white text-xl font-semibold">Our Location</h3>
                            <p class="break-words text-[#F5F5F5] text-[12px] font-semibold leading-relaxed max-width-[170px]">Sector-D, Nehru Nagar,Mumbai (W) -400601 </p>
                        </div>
                    </div>

                    <div class="flex justify-center items-start">
                        <i class="fa-solid fa-phone text-red-500 text-xl pr-4 py-2"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-white text-xl font-semibold">Contact Us</h3>
                            <p class="break-words text-[#F5F5F5] text-xs font-semibold">+123 4567 6358</p>
                            <p class="break-words text-[#F5F5F5] text-xs font-semibold">+123 4567 6358</p>
                        </div>
                    </div>

                    <div class="about-email flex justify-center items-start">
                        <i class="fa-solid fa-envelope-open text-red-500 text-xl pr-4 py-2"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-white text-xl font-semibold">Contact Email</h3>
                            <p class="break-words text-[#F5F5F5] font-semibold text-[14px] md:text-[13px]">autorepair.info@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="home" id='formMessage' class="right min-w-[60%] px-10 py-10 bg-white flex flex-col gap-7">
            <div class="flex gap-5">
                <input type="text" required placeholder="Name" class="min-w-[48%] border-0 bg-[#F5F5F5]">
                <input type="text" required placeholder="Subject" class="min-w-[48%] border-0 bg-[#F5F5F5]">
            </div>

            <div class="flex gap-5">
                <input type="email" required placeholder="Email" class="min-w-[48%] border-0 bg-[#F5F5F5]">
                <input type="text" required placeholder="Phone" class="min-w-[48%] border-0 bg-[#F5F5F5]">
            </div>

            <textarea placeholder="Your Message" class="w-[99%] border-0 bg-[#F5F5F5]"></textarea>

            <div class="w-full flex justify-center items-center">
                <input type="button" id='formbtn' value="Send Message" class="h-11 w-32 rounded-full bg-indigo-600 font-semibold text-white cursor-pointer hover:bg-indigo-500">
            </div>
            <script>
                var formbtn = document.getElementById('formbtn');
                formbtn.addEventListener('click', (e) => {
                    var form = document.getElementById('formMessage');
                    e.preventDefault()
                    if (form.checkValidity()) {
                        toastr.success('Form Submited', 'Success', {
                            closeButton: true,
                            progressBar: true,
                            positionClass: 'toast-center'
                        });
                    }
                })
            </script>
        </form>
    </div>
</section>

<br>
<!-- <div id="map" style="height: 400px;"></div> -->

<div class="w-full min-h-[400px] px-5 sm:px-10">
    <iframe class="min-h-[400px] w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.6810172457!2d73.72287834853687!3d18.52489042244042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1676651987853!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<br />

<section class="bottom-section py-10 flex bg-[#F5F5F5] px-5 md:px-20 flex-col md:flex-row">
    <div class="left-div flex flex-col gap-2 w-full md:w-[45%]">
        <h2 class="text-black text-2xl font-bold max-w-[350px]">Subscribe for latest newsletter</h2>
        <p class="break-words font-semibold text-md text-gray-500 max-w-[540px]">subscribe to our newsletter for getting quick updates about new jobs, services and more.</p>
    </div>

    <div class="right-div flex justify-start md:justify-center items-center gap-5 h-[100px] flex-row pl-4 w-full md:w-[55%]">
        <input type="email" placeholder="Your email address" class="border-0 bg-white drop-shadow-lg py-2.5 min-w-[60%]">
        <button class="font-semibold text-white bg-indigo-600 px-5 h-11 text-sm py-1">Subscribe Now <i class="fa-solid fa-arrow-right hover:bg-indigo-500"></i></button>
        <!-- text-xs lg:text-md -->
    </div>
</section>

<button class="h-9 w-9 bg-indigo-600 text-white font-bold text-2xl text-center hover:bg-indigo-500" style="position: fixed; bottom: 5px; right: 20px; display:none;" id="ScrollToTop" onclick="topFunction()">^</button>
<script>
    let mybutton = document.getElementById("ScrollToTop");

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 200 ||
            document.documentElement.scrollTop > 200
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 19.19824,
                lng: 72.949013
            },
            zoom: 12,
        });
    }

    // function logout() {
    //   fetch("https://oauth2.googleapis.com/revoke?token=" + info["access_token"], {
    //     method: "POST",
    //     headers: {
    //       "Content-type": "application/x-www-form-urlencoded",
    //     },
    //   }).then((data) => {
    //     console.log("done");
    //   });
    // }

    var signOut = function() {
        // document.location.href =
        //   "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://127.0.0.1:5500/login.html";

        location.href = "http://127.0.0.1:5500/login.html";
    };
    // }
</script>
@endsection