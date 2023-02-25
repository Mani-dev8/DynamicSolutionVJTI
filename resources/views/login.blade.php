@extends('welcome')
@section('content')
<style>
    .right-side {
        /* background-image: url("richard-horvath-cPccYbPrF-A-unsplash.jpg"); */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        opacity: 70;
    }

    #email {
        box-sizing: border-box;
        width: 33%;
        height: calc(2.6em + 1px);
        margin: 0 0 1em;
        padding: 1em;
        border: 1px solid #ccc;
        background: #fff;
        resize: none;
        outline: none;
        border-radius: 6px;
    }

    #email[required]:focus {
        border-color: #3F51B5;
    }

    #email[required]:focus+#lblemail[placeholder]:before {
        color: #00bafa;
        position: relative;
        z-index: 10;
        font-weight: 500;
        padding: 0px 5px 0px 5px;
    }

    /* input[type="text"]:not(:focus) {
  border: 2px solid grey;
  background-color: white;
} */

    /* #email[required]:not(:focus) + #lblemail[placeholder]:before {
  display: none;
} */

    #email[required]:focus+#lblemail[placeholder]:before,
    #email[required]:valid+#lblemail[placeholder]:before {
        transition-duration: .2s;
        transform: translateY(-1.3em) scale(0.9, 0.9);
        color: #3F51B5;
    }

    #email[required]:invalid+#lblemail[placeholder][alt]:before {
        content: attr(alt);
    }

    #email[required]+#lblemail[placeholder] {
        display: block;
        pointer-events: none;
        line-height: 1em;
        margin-top: calc(-3em - 2px);
        margin-bottom: calc((4.5em - 1em) + 2px);
        margin-left: calc((-11.5em - 1em) + 2px);
    }

    #email[required]+#lblemail[placeholder]:before {
        content: attr(placeholder);
        display: inline-block;
        margin: 0 calc(1em + 2px);
        padding: 0 2px;
        color: #898989;
        white-space: nowrap;
        transition: 0.3s ease-in-out;
        background-image: linear-gradient(to bottom, #fff, #fff);
        background-size: 100% 5px;
        background-repeat: no-repeat;
        background-position: center;
    }

    #email[required]:not(:focus)+#lblemail[placeholder]:before {
        content: '';
    }


    /* -------------------------------- */

    #pass {
        box-sizing: border-box;
        width: 33%;
        height: calc(2.6em + 1px);
        margin: 0 0 1em;
        padding: 1em;
        border: 1px solid #ccc;
        background: #fff;
        resize: none;
        outline: none;
        border-radius: 5px;
        margin-top: -20px;
    }

    #pass[required]:focus {
        border-color: #3F51B5;
    }

    #pass[required]:focus+#lblpass[placeholder]:before {
        color: #00bafa;
        position: relative;
        z-index: 10;
        font-weight: 500;
        padding: 0px 5px 0px 5px;
    }

    #pass[required]:focus+#lblpass[placeholder]:before,
    #pass[required]:valid+#lblpass[placeholder]:before {
        transition-duration: .2s;
        transform: translateY(-1.3em) scale(0.9, 0.9);
        color: #3F51B5;
    }

    #pass[required]:invalid+#lblpass[placeholder][alt]:before {
        content: attr(alt);
    }

    #pass[required]+#lblpass[placeholder] {
        display: block;
        pointer-events: none;
        line-height: 1em;
        margin-top: calc(-3em - 2px);
        margin-bottom: calc((4.5em - 1em) + 2px);
        margin-left: calc((-10em - 1em) + 2px);
    }

    #pass[required]+#lblpass[placeholder]:before {
        content: attr(placeholder);
        display: inline-block;
        margin: 0 calc(1em + 2px);
        padding: 0 2px;
        color: #898989;
        white-space: nowrap;
        transition: 0.3s ease-in-out;
        background-image: linear-gradient(to bottom, #fff, #fff);
        background-size: 100% 5px;
        background-repeat: no-repeat;
        background-position: center;
    }

    #pass[required]:not(:focus)+#lblpass[placeholder]:before {
        content: '';
    }


    @media screen and (min-width: 1133px) and (max-width: 1323px) {

        #email,
        #pass {
            width: 35%;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-10em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-8.5em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 993px) and (max-width: 1132px) {

        #email,
        #pass {
            width: 38.5%;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-10.5em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-9em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 864px) and (max-width: 992px) {

        #email,
        #pass {
            width: 43%;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-9.3em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-7.8em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 768px) and (max-width: 863px) {

        #email,
        #pass {
            width: 48%;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-9em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-7.5em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 712px) and (max-width: 767px) {

        #email,
        #pass {
            width: 48%;
            border-radius: 8px;
            letter-spacing: 2px;
            padding-left: 20px;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-15em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-13.5em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 636px) and (max-width: 711px) {

        #email,
        #pass {
            width: 48%;
            border-radius: 8px;
            letter-spacing: 2px;
            padding-left: 20px;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-13em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-11.5em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 537px) and (max-width: 635px) {

        #email,
        #pass {
            width: 48%;
            border-radius: 8px;
            letter-spacing: 2px;
            padding-left: 20px;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-10.5em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-9em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 490px) and (max-width: 536px) {

        #email,
        #pass {
            width: 53%;
            border-radius: 8px;
            letter-spacing: 2px;
            padding-left: 20px;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-10em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-8.5em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 427px) and (max-width: 489px) {

        #email,
        #pass {
            width: 60%;
            border-radius: 8px;
            letter-spacing: 2px;
            padding-left: 20px;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-10.5em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-9em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 360px) and (max-width: 426px) {

        #email,
        #pass {
            width: 70%;
            border-radius: 8px;
            letter-spacing: 2px;
            padding-left: 20px;
        }

        #email[required]+#lblemail[placeholder] {
            margin-left: calc((-10.5em - 1em) + 2px);
        }

        #pass[required]+#lblpass[placeholder] {
            margin-left: calc((-9em - 1em) + 2px);
        }
    }

    @media screen and (min-width: 370px) and (max-width: 521px) {
        .forgot {
            width: 55%;
        }
    }
</style>
<div class="h-[100vh] sm:px-10  bg-violet-900 bg-opacity-20 flex  flex-row items-center items-enter">
    <div class=" rounded-xl h-[700px] w-[90%] m-auto overflow-hidden cont flex flex-col items-center justify-center md:flex-row shadow-lg ">
        <div class="left-side h-full w-full md:w-[65%] " style="background-color: whitesmoke;">
            <!-- <div class="px-10 w-full h-[19%]">
            <img src="login-images\WhatsApp Image 2023-02-17 at 21.25.10.jpeg">
        </div>      -->
            <div class="h-[100%]  flex flex-col justify-center gap-2 items-center ">
                <div class="flex flex-col justify-center items-center gap-1">
                    <h1 class="text-indigo-500 text-3xl font-bold tracking-wide">Sign in to Account</h1>
                    <img src="login-images\delete (1).png" class="text-center h-9 w-14">
                </div>

                <div class="google-btn flex gap-4 bg-white px-3 py-2 border-2 cursor-pointer rounded-lg hover:text-blue-500" onclick="signIn()">
                    <div class="google-icon-wrapper">
                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                    </div>
                    <p class="btn-text"><b>Sign in with google</b></p>
                </div>

                <p class="text-md text-gray-400 font-semibold py-2">or use your email account</p>

                <form method="post" id="login_form" class="w-full">
                    <div class="flex justify-center items-center flex-col gap-1 w-full ">
                        @csrf
                        <input id="email" required='' name='email' type='text' class="min-w-[270px]">
                        <label id="lblemail" alt='Email' placeholder='Email' class=""></label>

                        <input id="pass" required='' name='password' type='password' class="min-w-[270px]">
                        <label id="lblpass" alt='Password' placeholder='Password' class="mt-[-20px]"></label>
                        <div class="forgot h-10 flex justify-end mt-[-25px] w-[40%] md:w-[33%]">
                            <a href="#" class="text text-sm  sm:text-lg font-semibold text-zinc-500 cursor-pointer hover:text-gray-900">Forgot Password ?</a>
                        </div>
                        <input type="submit" id="login_btn" value="Sign In" class="h-11 w-36 bg-purple-500 shadow-md hover:shadow-none shadow-purple-300 text-white text-xl font-semibold rounded-3xl mt-1 cursor-pointer hover:bg-purple-700  ">
                    </div>
                </form>

                <div class="flex justify-center items-end gap-5 h-[80px] w-full ">
                    <div class="flex justify-center items-center gap-5 h-[40px] w-full">
                        <a href="#" class="sm:text-lg text-sm  font-semibold text-gray-500">Privacy Policy</a>
                        <i class="fa-solid fa-circle text-[8px] text-gray-500"></i>
                        <a href="#" class="sm:text-lg text-sm  font-semibold text-gray-500">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-side h-full w-[35%] hidden md:flex bg-violet-900">
            <div class="second h-full w-full flex flex-col gap-7 justify-center items-center px-5">
                <!-- <h1 class="text-white text-3xl font-bold">HELLO USER</h1> -->
                <img src="login-images\Security On.gif" class="h-[370px] w-[370px]">
                <p class="text-center text-lg font-semibold text-gray-300">if you are new to us, please create your profile by clicking on signup button.</p>
                <a href="signup" class="flex justify-center items-center h-11 w-32 rounded-lg bg-white text-violet-900 text-xl font-bold text-center hover:bg-violet-900 hover:text-white" style="border: solid 1px whitesmoke">Sign up</a>
                <i class="fa-solid fa-dash"></i>
            </div>
        </div>
    </div>
</div>
<script src="https://apis.google.com/js/api.js"></script>
<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log("Name: " + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

    function signIn() {
        var oauth2Endpoint = "https://accounts.google.com/o/oauth2/v2/auth";
        var form = document.createElement("form");
        form.setAttribute("method", "GET");
        form.setAttribute("action", oauth2Endpoint);
        var params = {
            client_id: "1010475604525-mhk93fqc3n1lugu1hg6gh2qcn65t79b2.apps.googleusercontent.com",
            redirect_uri: "http://127.0.0.1:8000/home",
            response_type: "token",
            scope: "https://www.googleapis.com/auth/userinfo.profile email openid",
            include_granted_scopes: "true",
            state: "pass-through value",

        };

        for (var p in params) {
            var input = document.createElement("input");
            input.setAttribute("type", "hidden");
            input.setAttribute("name", p);
            input.setAttribute("value", params[p]);
            form.appendChild(input);
        }

        document.body.appendChild(form);
        form.submit();
    }
    //laravel login
    const login_btn = document.querySelector('#login_form');

    login_btn.addEventListener('submit', (e) => {
        e.preventDefault();
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/user', true)
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        var formData = new FormData(e.target);
        var encodedData = new URLSearchParams(formData).toString();
        // xhr.onload = () => {
        //     let responseText = xhr.responseText
        //     const error_msg = document.createElement('p');
        //     if (responseText == "false") {
        //         error_msg.innerHTML = "Invalid Username or Password"
        //         if (document.querySelectorAll('.error')) {
        //             document.querySelectorAll('.error').forEach(e=>{
        //                 e.remove()
        //             })
        //         }
        //         error_msg.classList.add("error", "text-red-500", "m-auto", "underline", "w-fit", "mt-4")
        //         login_btn.appendChild(error_msg)
        //     }
        //     responseText
        // }
        xhr.onreadystatechange = () => {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    console.log(xhr.responseText)
                    let responseText = xhr.responseText
                    const error_msg = document.createElement('p');
                    if (responseText == "false") {
                        error_msg.innerHTML = "Invalid Username or Password"
                        if (document.querySelectorAll('.error')) {
                            document.querySelectorAll('.error').forEach(e => {
                                e.remove()
                            })
                        }
                        error_msg.classList.add("error", "text-red-500", "m-auto", "underline", "w-fit", "mt-4")
                        login_btn.appendChild(error_msg)
                    } else {
                        window.location.href = "home"
                    }
                } else {
                    console.log("something went wrong")
                }
            }
        }
        xhr.send(encodedData);
    })
</script>
@endsection