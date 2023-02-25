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

    .inputs input {
        font-weight: 500;
        width: 300px;
        border-radius: 6px;
        border: solid 1px ghostwhite;
        background-color: whitesmoke;
        height: 2.5rem;
        color: #333;
        font-size: 15px;
        outline: none;
    }

    /* .relative i{
            color: purple;
            font-size: 1rem;
        } */
</style>


<div class=" bg-purple-200 bg-opacity-70 h-[100vh] py-5 flex flex-row items-end justify-center">
    <section class="flex flex-wrap  w-[90%]  shadow-xl shadow-purple-200 rounded-xl overflow-hidden m-auto  ">
        <div class="left text-purple-500 w-[1000%] py-8 bg-purple-500 sm:w-[35%] rounded-tl-lg rounded-bl-lg flex flex-col justify-center items-center">
            <h1 class="text-3xl font-bold text-white md:text-[4xl] text-center">Welcome to <br> Dynamic Solution</h1>
            <!-- <p class="m-4 pt-[10px]  text-white">Join with us by filling your details.</p> -->
            <img src="Account.gif" class="h-auto sm:w-full ">
        </div>
        <form class="content flex justify-center w-[100%] sm:w-[65%] rounded-tr-lg rounded-br-lg bg-white" method="POST" action="/register" id="form">
            @csrf
            <div class="inputs py-5 px-0 flex flex-col items-center text-[#00bdaa] ">
                <h1 class="text-center font-bold text-purple-500 text-3xl tracking-wide">Create Account</h1>
                <img src="login-images\delete (1).png" class="text-center h-9 w-14">

                <div class="google-btn flex justify-center items-center gap-5 bg-slate-50 w-[300px] py-2 my-5 cursor-pointer rounded-lg text-zinc-800 hover:text-violet-600" style="transition: all 0s; transition-delay: 0s;" onclick="signIn()">
                    <div class="google-icon-wrapper h-8 w-8 rounded-full bg-white flex justify-center items-center">
                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                    </div>
                    <p class="btn-text "><b>Sign in with google</b></p>
                </div>
                <p class="subtext font-semibold text-gray-500">or manually register</p>
                <div class="relative">
                    <input type="text" id="name" name="name" placeholder="Name" class=" p-2 m-3 w-[270px] bg-[#edf9ed] pl-10 text-[13px] h-10" required>
                    <i class='fa text-purple-500 text-base fa-user absolute left-[26px] top-[23px] z-10 text-[13px]'></i>
                </div>
                <div class="relative">
                    <input type="email" id="emailid" name="email" placeholder="Email" class=" p-2 m-3 bg-[#edf9ed] w-[270px] pl-10 text-[13px] h-10" required>
                    <i class='fa text-purple-500 text-base fa-envelope absolute left-[26px] top-[23px] z-10 text-[13px]'></i>
                </div>
                <div class="relative">
                    <input type="password" id="pass" name="password" placeholder="Password" class=" p-2 m-3 bg-[#edf9ed] w-[270px] pl-10 text-[13px] h-10" required>
                    <i class='fa text-purple-500 text-base fa-unlock-alt absolute left-[26px] top-[23px] z-10 text-[13px]'></i>
                </div>
                <div class="relative">
                    <input type="password" id="cpass" name="cnfpassword" placeholder="Confirm Password" class=" p-2 m-3 bg-[#edf9ed] w-[270px] pl-10 text-[13px] h-10" required>
                    <i class='fa text-purple-500 text-base fa-unlock-alt absolute left-[26px] top-[23px] z-10 text-[13px]'></i>
                </div>
                <button id="submitbtn" class="px-5 mt-5 py-1.5 m-2 bg-purple-500 shadow-md hover:shadow-none shadow-purple-300 text-white text-xl font-semibold rounded-3xl  cursor-pointer hover:bg-purple-700  ">
                    SIGN UP</button>
                <p class="mt-3 text-xl lowercase text-gray-400">Already Have A Account ? <a href="login" class="text-purple-500 hover:text-purple-700 font-bold cursor-pointer">Log In</a></p>
            </div>
        </form>
    </section>
</div>

<script>
    const form = document.getElementById("form");
    let button = document.getElementById("submitbtn");

    button.addEventListener("click", (e) => {
        let pass = document.getElementById("pass").value;
        let cnfpass = document.getElementById("cpass").value;

        e.preventDefault();

        if (pass == cnfpass) {
            if (form.checkValidity()) {
                form.submit();
            } else {
                form.reportValidity();
            }
        } else {
            toastr.error('Password and Confirm Password should be same.', 'Error', {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-center'
            });
        }
    });

    function signIn() {
        var oauth2Endpoint = "https://accounts.google.com/o/oauth2/v2/auth";
        var form = document.createElement("form");
        form.setAttribute("method", "GET");
        form.setAttribute("action", oauth2Endpoint);
        var params = {
            client_id: "1010475604525-0npgbh9t2n2ouv4hq5tleh9jl2lfo3rf.apps.googleusercontent.com",
            redirect_uri: "https://b0fa-2409-4040-d8a-5af0-c4bd-7dc2-4556-90bf.in.ngrok.io/home",
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
</script>

@endsection