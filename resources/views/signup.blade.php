@extends('welcome')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/dist/" rel="stylesheet"/>
<div class="Main  flex justify-center items-center h-screen bg-violet-200">
        <div class="sub  grid grid-cols-1 rounded-xl w-[95%]  bg-white sm:grid-cols-2">
            
                <div class=" flex flex-col items-center justify-center bg-violet-500 rounded-l-xl w-[100%] sm:w-[70%]">
                   <h1 class="text-3xl font-semibold text-white md:text-[4xl]">Hello, Friend!</h1>
                  <p class="m-4 pt-[10px]">Enter your personal details <br>and start your journey with us</p>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="1000.000000pt" height="66.000000pt" viewBox="0 0 1000.000000 694.000000" preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,694.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                    <path d="M7590 6003 c-459 -245 -755 -408 -754 -417 1 -7 272 -528 604 -1157 331 -629 700 -1329 819 -1556 119 -227 219 -413 224 -413 6 0 1505 796 1516 806 3 3 -1637 3124 -1648 3135 -3 3 -346 -176 -761 -398z m1303 -2404 c82 -22 147 -110 147 -199 0 -110 -97 -210 -205 -210 -108 0 -205 100 -205 211 0 61 19 104 64 148 55 54 124 71 199 50z"/>
                    <path d="M1398 5843 c-141 -269 -512 -972 -823 -1563 -312 -591 -567 -1078 -568 -1083 -1 -4 70 -45 158 -90 88 -46 403 -209 700 -362 297 -154 545 -281 551 -283 6 -2 88 142 181 320 168 319 1024 1945 1326 2518 l156 294 -117 62 c-191 100 -1301 674 -1304 674 -2 0 -119 -219 -260 -487z m-273 -2244 c177 -48 205 -290 45 -379 -87 -48 -206 -24 -263 52 -67 90 -60 195 18 273 58 59 121 76 200 54z"/>
                    <path d="M4170 5900 c-61 -19 -146 -58 -460 -213 -184 -91 -371 -180 -414 -199 l-79 -33 -519 -980 c-285 -539 -548 -1036 -584 -1104 -36 -68 -61 -120 -56 -117 19 11 562 385 1956 1345 251 173 307 216 349 269 28 34 54 62 58 62 5 0 41 -25 81 -55 60 -45 266 -160 316 -176 11 -4 7 -29 -17 -119 -72 -269 -94 -550 -57 -720 36 -169 130 -300 259 -365 38 -19 75 -35 82 -35 20 0 65 59 92 118 13 30 55 147 94 260 39 114 106 295 149 402 170 426 201 592 134 722 -47 93 -253 304 -449 461 -264 212 -591 405 -789 466 -71 22 -104 25 -146 11z"/>
                    <path d="M4861 5880 c-46 -10 -63 -20 -45 -27 7 -2 72 -45 145 -94 243 -165 458 -347 605 -509 157 -174 206 -277 205 -434 0 -153 -42 -305 -173 -636 -39 -96 -101 -267 -140 -380 -74 -219 -147 -382 -198 -443 -62 -73 -145 -99 -237 -72 -169 49 -309 167 -388 327 -78 159 -89 218 -89 468 0 195 3 228 28 348 15 73 29 138 32 146 6 16 -152 110 -172 102 -16 -6 -90 -56 -694 -470 -1186 -811 -1772 -1226 -1843 -1305 -81 -90 -151 -244 -163 -359 -12 -114 44 -225 137 -273 142 -72 393 -35 674 100 55 26 358 207 674 401 315 194 586 357 601 363 51 19 120 -31 120 -87 0 -50 -26 -69 -603 -423 -318 -195 -606 -376 -639 -401 -157 -118 -236 -300 -194 -445 46 -159 197 -241 378 -204 42 8 102 28 134 44 33 17 340 204 683 416 634 393 653 403 702 377 50 -28 59 -108 16 -147 -12 -11 -290 -186 -617 -388 -327 -202 -604 -376 -615 -386 -17 -16 -20 -32 -19 -93 0 -62 5 -83 36 -147 50 -104 103 -161 196 -206 76 -38 76 -38 202 -38 207 1 198 -4 839 423 300 200 555 365 568 368 49 13 113 -39 113 -90 0 -46 -39 -75 -546 -413 -588 -391 -537 -344 -489 -450 54 -120 150 -183 290 -191 101 -5 177 13 308 75 l97 47 -6 90 c-13 178 36 327 141 432 118 118 275 152 456 98 14 -4 16 7 17 72 1 98 16 161 60 254 44 94 135 188 219 228 52 24 69 27 166 27 l107 0 0 65 c1 210 143 398 358 472 54 18 88 23 177 22 119 0 197 -20 276 -70 28 -17 40 -21 43 -12 2 7 9 33 16 58 36 134 124 239 247 298 76 36 81 37 188 37 95 -1 119 -5 178 -28 116 -45 245 -146 333 -260 l29 -38 162 120 161 120 -67 128 c-38 70 -270 511 -516 978 -246 468 -533 1012 -637 1210 -104 198 -196 365 -204 371 -26 21 -838 247 -1198 334 -361 87 -543 116 -625 100z"/>
                    <path d="M7150 2648 c-53 -18 -134 -104 -153 -163 -26 -78 -30 -128 -18 -198 10 -58 28 -92 153 -292 l141 -227 43 5 c113 12 288 136 346 245 84 156 44 325 -117 488 -105 107 -179 146 -285 150 -41 2 -91 -2 -110 -8z"/>
                    <path d="M6353 2332 c-100 -36 -161 -92 -205 -188 -30 -67 -30 -176 2 -259 31 -81 346 -535 384 -553 15 -8 53 -18 84 -22 201 -28 417 111 479 306 l16 52 -159 258 c-173 281 -222 341 -319 388 -79 39 -202 46 -282 18z"/>
                    <path d="M5781 1790 c-53 -13 -113 -61 -149 -120 -45 -76 -57 -121 -56 -225 0 -73 5 -102 27 -154 36 -88 165 -298 197 -321 15 -11 61 -31 103 -45 237 -79 431 32 444 255 l3 65 -168 240 -168 240 -64 32 c-73 36 -119 45 -169 33z"/>
                    <path d="M5115 1214 c-48 -26 -95 -75 -122 -129 -31 -60 -42 -181 -24 -266 23 -108 136 -263 235 -320 44 -25 61 -29 129 -29 90 0 136 18 185 75 44 50 71 106 88 184 25 118 21 138 -47 253 -75 125 -113 167 -193 209 -51 28 -74 33 -141 36 -60 3 -87 -1 -110 -13z"/>
                    </g>
                    </svg>
                </div>
            
            <div class="content flex justify-center  w-[100%] sm:w-[70%]">
                <div class=" p-11 flex flex-col items-center text-[#00bdaa] ">
                <h1 class="text-center font-bold text-violet-500 text-3xl">Create Account</h1>
                <p class="p-5">
                    <span class="w-[50px] h-[50px] border-2 rounded-[34px] inline-block text-center"><a><i class="fa fa-facebook-f text-[20px] p-[14px] "></i></a></span>
                    <span class="w-[50px] h-[50px] border-2 rounded-[34px] inline-block text-center"><a><i class="fa fa-twitter text-[20px] p-[14px]"></i></i></a></span>
                    <span class="w-[50px] h-[50px] border-2 rounded-[34px] inline-block text-center"><a><i class="fa fa-instagram text-[20px] p-[14px]"></i></i></a></span>
                </p>
                <p class="subtext">or use your email for registration</p>
                <div class="relative">
                  <input type="text" id="name" placeholder="Name" class=" p-2 m-3 w-[270px] bg-[#edf9ed] pl-10 text-[13px] ">
                  <i class='fa fa-user absolute left-[23px] top-[24px] z-10 text-[13px]'></i>
                </div>
                <div class="relative">
                  <input type="email" id="emailid" placeholder="Email" class=" p-2 m-3 bg-[#edf9ed] w-[270px] pl-10 text-[13px]">
                  <i class='fa fa-envelope absolute left-[23px] top-[24px] z-10 text-[13px]'></i>
                </div>
                <div class="relative">
                  <input type="password" id="pass" placeholder="Password" class=" p-2 m-3 bg-[#edf9ed] w-[270px] pl-10 text-[13px]">
                  <i class='fa fa-unlock-alt absolute left-[23px] top-[24px] z-10 text-[13px]'></i>
                </div>
                <div class="relative">
                  <input type="password" id="cpass" placeholder="Comfrim password" class=" p-2 m-3 bg-[#edf9ed] w-[270px] pl-10 text-[13px]">
                  <i class='fa fa-unlock-alt absolute left-[23px] top-[24px] z-10 text-[13px]'></i>
                </div>
                <button class="p-2 m-2 border-2 rounded-full bg-violet-500 text-white w-[200px]">SIGN UP</button>
            </div>
            </div>
        </div>
    </div>
    @endsection