@extends('welcome')
@section('content')
<div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32 mt-20">
    <a href="#" class="text-2xl font-bold text-gray-800">Appliances repair </a>
    <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
        <div class="relative">
            <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
                <li class="flex items-center space-x-3 text-left sm:space-x-4">
                    <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></a>
                    <span class="font-semibold text-gray-900">Services</span>
                </li>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
                <li class="flex items-center space-x-3 text-left sm:space-x-4">
                    <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2" href="#">2</a>
                    <span class="font-semibold text-gray-900">Checkout</span>
                </li>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
                <li class="flex items-center space-x-3 text-left sm:space-x-4">
                    <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-400 text-xs font-semibold text-white" href="#">3</a>
                    <span class="font-semibold text-gray-500">Payment</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32 sm:gap-5">
    <form action="order" id="orderForm" method="post">
        @csrf
        <input type="text" name="t_name" value="{{session('technician')}}">
        <input type="text" name="service_date" value="{{session('date_selected')}}">

        <input type="text" name="rapid_service" value="{{session('rapid_slot')}}">
        <input type="text" name="time_slot" value="{{session('slot')}}">

        <div class="px-4 pt-8">
            <p class="text-xl font-medium">Payment Details</p>
            <p class="text-gray-400">Complete your order by providing your payment details.</p>
            <div class="">
                <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                <div class="relative">
                    <input required type="email" id="email" name="email" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="your.email@gmail.com" />
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </div>
                </div>

                <label for="contact_no" class="mt-4 mb-2 block text-sm font-medium">Contact Number</label>
                <div class="relative">
                    <input type="text" maxlength="10" minlength="10" required onkeypress="return  event.charCode >= 48 && event.charCode <= 57" id="contact_no" name="contact_no" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="9876543299" />
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">

                        <img class="h-5 w-5 object-contain opacity-40" src="https://img.icons8.com/external-those-icons-lineal-those-icons/48/null/external-call-mobile-telephone-those-icons-lineal-those-icons.png" alt="" />
                    </div>
                </div>

                <label for="u_address" class="mt-4 mb-2 block text-sm font-medium">Address</label>
                <div class="flex flex-col sm:flex-row">
                    <div class="relative flex-shrink-0 w-full">
                        <textarea required id="billing-address" name="u_address" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Enter your complete current address"></textarea>
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-5 w-5 object-contain opacity-40" src="https://img.icons8.com/ios/50/null/user-location.png" alt="" />
                        </div>
                    </div>

                </div>
                <label for="card-no" class="mt-4 mb-2 block text-sm font-medium">Payment Type</label>
                <div class="flex py-2 items-center justify-start">
                    <div class="grid w-60 sm:w-full grid-cols-1 gap-2">
                        <div class="relative">
                            <input onclick="paymentOption()" class="peer hidden" id="radio_1" type="radio" name="radio" checked value='card' />
                            <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-indigo-500"></span>
                            <label class="flex cursor-pointer flex-col rounded-lg border border-gray-300 p-4 peer-checked:border-2 peer-checked:border-indigo-700" for="radio_1">
                                <span class="text-xs font-semibold uppercase">Card</span>
                                <span class="mt-2 text-xl font-bold">Credit / Debit</span>

                            </label>
                        </div>
                        <div class="relative">
                            <input onclick="paymentOption()" class="peer hidden" id="radio_2" type="radio" name="radio" value='upi' />
                            <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-indigo-500"></span>
                            <label class="flex cursor-pointer flex-col rounded-lg border border-gray-300 p-4 peer-checked:border-2 peer-checked:border-indigo-700" for="radio_2">
                                <span class="text-xs font-semibold uppercase">UPI</span>
                                <span class="mt-2 text-xl font-bold">Google / Paytm / PhonePe</span>

                            </label>
                        </div>
                        <div class="relative">
                            <input onclick="paymentOption()" class="peer hidden" id="radio_3" type="radio" name="radio" value='wallet' />
                            <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-indigo-500"></span>

                            <label class="flex cursor-pointer flex-col rounded-lg border border-gray-300 p-4 peer-checked:border-2 peer-checked:border-indigo-700" for="radio_3">
                                <span class="text-xs font-semibold uppercase">wallets</span>
                                <span class="mt-2 text-xl font-bold">Paytm / PhonePe</span>

                            </label>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </form>

    <!-- ============= -->

    <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
        <p class="text-xl font-medium">Order Summary</p>
        <p class="text-gray-400">Check your items. And select a suitable payment method.</p>
        <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="{{session('image')}}" alt="" />
                <div class="flex w-full flex-col px-4 py-4 ">
                    <span class="font-semibold">Appliances </span>
                    <table class="w-full text-sm">
                        <tr>
                            <td>
                                <span class="float-right text-gray-400">Technician:</span>
                            </td>
                            <td>

                                <span class="float-right text-gray-400">{{session('technician')}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="float-right text-gray-400">Selected-Date:
                            </td>
                            <td>

                                <span class="float-right text-gray-400">{{session('date_selected')}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="float-right text-gray-400">Time-Slot:</span>
                            </td>
                            <td>

                                <span class="float-right text-gray-400">{{session('slot')}}</span>
                            </td>
                        </tr>
                    </table>
                    <p class="text-lg font-bold">₹<span id='charges'>900</span></p>
                </div>
            </div>

        </div>
        <!-- Total -->
        <div class="mt-6 border-t border-b py-2">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Subtotal</p>
                <p class="font-semibold text-gray-900">₹ <span id="subtotal"></span></p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Tax</p>
                <p class="font-semibold text-gray-900">₹ <sapn id="tax"></sapn>
                </p>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between">
            <p class="text-sm font-medium text-gray-900">Total</p>
            <p class="text-2xl font-semibold text-gray-900">₹ <span id="total"></span></p>
        </div>
        <button onclick="makePayment()" class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place Order</button>
    </div>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    const charges = parseInt(document.querySelector('#charges').innerText);


    console.log(charges)
    const subtotal = document.querySelector('#subtotal');
    const tax = document.querySelector('#tax');
    const total = document.querySelector('#total');
    subtotal.innerText = charges;
    tax.innerText = charges * 0.18

    total.innerText = charges + (charges * 0.18)
    var paymentModel;

    function paymentOption() {
        paymentModel = document.querySelector("input[name='radio']:checked").value;
        console.log(paymentMode)
    }
    // payment razorpay
    const options = {
        key: "rzp_test_Grv1o7LNqxaeov",
        // "key": "rzp_test_JCywnsPVe9XeZf", // Enter the Key ID generated from the Dashboard
        "amount": (charges + (charges * 0.18)) * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Dynamic Solution",
        "description": "Test Transaction",
        payment_method: {
            'method': 'card'
        },
        "image": "https://raw.githubusercontent.com/Mani-dev8/DynamicSolutionVJTI/21e6990c6c872f0ee63fff247c0974f84f5dd2ee/public/login-images/dynamic_solution_logo.svg",
        "handler": function(response) {
            const payment_id = response.razorpay_payment_id;
            if (response.razorpay_payment_id != null) {
                console.log(charges)

                order_amount = charges + (charges * 0.18);
                console.log(order_amount)
                console.log(payment_id)
                const orderForm = document.querySelector('#orderForm');
                const formData = new FormData(orderForm)
                formData.append('order_no', payment_id);
                formData.append('o_amount', order_amount);
                fetch('/order', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => console.log("data==="+data))
                    .catch(error => console.error(error));
                // const succ= document.querySelector('.succ');
                // succ.innerHTML = ` <div style="" class="h-40 w-40 bg-green-500 rounded-full ">successful</div> `;
            }
        },
        "prefill": {
            "name": "Gaurav Kumar",
            "email": "gaurav.kumar@example.com",
            "contact": "9000090000"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#805ad5"
        }
    };

    const rzp = new Razorpay(options);

    function makePayment() {

        rzp.on('payment.success', function(payment_id) {
            console.log('Payment success!', payment_id);
            // Handle payment success
        });
        rzp.on('payment.error', function(error) {
            console.error('Payment failed', error);
            // Handle payment failure
        });
        const orderForm = document.querySelector('#orderForm');
        if (orderForm.checkValidity()) {
            rzp.open();
        } else {
            orderForm.reportValidity()
        }
    }
</script>
@endsection