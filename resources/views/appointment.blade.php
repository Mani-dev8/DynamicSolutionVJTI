@extends('welcome')
@section('content')

<style>
    #modalBackground {
        background-color: rgba(0, 0, 0, 0.4);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: none;
        background-color: rgb(51, 51, 51, 0.75);
        backdrop-filter: blur(10px);
    }

    #modal {
        background-color: white;
        width: 70%;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        border-radius: 10px;
    }

    #cancelModalBtn {
        display: block;
    }

    #modalBackground.show {
        display: block;
        backdrop-filter: blur(10px);
    }

    #loc-info p,
    #loc-info h4 {
        font-size: 1rem;
        font-weight: 500;
    }

    #loc-info h3 {
        font-size: 1.2rem;
        font-weight: bold;
    }


    /* ---------------------  checkbox ------------------------- */

    .inputGroup {
        background-color: #fff;
        display: block;
        margin: 10px 0;
        position: relative;
    }

    .inputGroup label {
        padding: 12px 30px;
        width: 100%;
        display: block;
        text-align: left;
        color: #3c454c;
        cursor: pointer;
        position: relative;
        z-index: 2;
        transition: color 200ms ease-in;
        overflow: hidden;
    }

    .inputGroup label:before {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        content: '';
        background-color: #5562eb;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale3d(1, 1, 1);
        transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        z-index: -1;
    }

    .inputGroup label:after {
        width: 32px;
        height: 32px;
        content: '';
        border: 2px solid #d1d7dc;
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
        background-repeat: no-repeat;
        background-position: 2px 3px;
        border-radius: 50%;
        z-index: 2;
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        transition: all 200ms ease-in;
    }

    .inputGroup input:checked~label {
        color: #fff;
    }

    .inputGroup input:checked~label:before {
        transform: translate(-50%, -50%) scale3d(56, 56, 1);
        opacity: 1;
    }

    .inputGroup input:checked~label:after {
        background-color: #54e0c7;
        border-color: #54e0c7;
        border-radius: 4px;
        height: 32px;
        width: 30px;
    }

    .inputGroup input {
        width: 32px;
        height: 32px;
        order: 1;
        z-index: 2;
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        visibility: hidden;
    }

    .form {
        padding: 0 16px;
        max-width: 550px;
        margin: 50px auto;
        font-size: 18px;
        font-weight: 600;
        line-height: 36px;
    }


    code {
        background-color: #9aa3ac;
        padding: 0 8px;
    }
</style>


<div class="flex flex-col gap-3 px-5 sm:px-20 py-10 mt-20" style="background: whitesmoke;">
    <div id="map" class="min-h-[400px] sm:min-h-[475px]"></div>
    <div class="flex gap-5 flex-row">
        <div class="flex gap-8 w-[70%]">
            <img src="appointment-images\map.png" class="h-12 w-12">
            <div class="flex flex-col justify-center items-start" id="loc-info">
                <p class="text block">Select any Point for Booking Appointment</p>
            </div>
            <div class="ratimgs h-full w-[20%] flex justify-center items-center">
                <div id='ratting' class="flex justify-center items-center rounded-md px-3 gap-2 ">

                </div>
            </div>
        </div>
        <div class="w-[30%] flex justify-end items-end px-5">
            <div class="overlay hidden"></div>
            <button onclick="dataPass(this)" class="btn hidden btn-open cursor-pointer font-bold text-white text-xl bg-violet-600 shadow-md shadow-violet-300 h-10 w-24 rounded-lg hover:bg-violet-800 hover:shadow-none" id="openModalBtn">NEXT</button>
        </div>
    </div>
</div>

<!-- <button id="openModalBtn">Open Modal</button> -->
<!-- <button id="cancelModalBtn">Cancel</button> -->

<div id="modalBackground">
    <div id="modal" class="flex flex-col relative">
        <button class="h-10 w-10 rounded-full bg-gray-300 font-semibold absolute right-3 top-3" id="cancelModalBtn">⨉</button>

        <form action="summary" id='form_model' method=''>

            <input type="hidden" name="selected_slot" id="slot" value=''>
            <input type="hidden" name="selected_technician" id="hf_technician" value=''>
            <div class="flex w-full justify-between items-center">
                <div class="flex gap-5 px-5">
                    <i class="fa fa-calendar-day text-xl text-indigo-900"></i>
                    <p class="font-semibold text-lg text-black ">Appointment Timings</p>
                </div>
            </div>
            <div class~="flex">
                <h2 id="t_name_model" class="flex gap-2 w-[60%] px-5 py-3 text-lg sm:text-xl font-bold">Suraj <p class="text-lg font-semibold mt-[1px]">( Electrician )</p>
                </h2>
                <div class="w-[40%] flex justify-center items-center gap-3">
                    <i class="fa-sharp fa-solid fa-people-arrows text-xl text-slate-700"></i>
                    <p id="t_dis_model" class="font-semibold text-green-500 text-sm sm:text-base">5 km away</p>
                </div>
            </div>

            <div class="inputGroup w-full">
                <input id="option1" name="rapid_radio" type="checkbox" value="0" onchange="validateCheckbox()" />
                <label for="option1" class="font-semibold text-gray-500 rounded-md text-sm sm:text-base">Home service available within 2 Hours</label>
            </div>

            <p class="text-base sm:text-lg font-semibold text-indigo-900">OR SELECT TIMINGS</p>

            <div class="flex flex-row gap-2 pt-2">
                <div class="flex flex-col w-[50%]">
                    <label for="date" class="text-sm sm:text-base font-semibold py-1">Select a date:</label>
                    <input type="date" id="date" name='date_selected' min="" max="" onchange="populateTimeslots()" class="border-2 h-10 px-2 border-zinc-300 rounded-md text-gray-500 font-semibold">
                </div>

                <div class="flex flex-col w-[50%]">
                    <label for="timeslot" class="text-sm sm:text-base font-semibold py-1">Select a time slot:</label>
                    <select id="time" class="border-2 h-10 px-2 border-zinc-300 rounded-md text-gray-500 font-semibold">
                        <option value="" disabled selected hidden>Select A Date First</option>
                    </select>
                </div>
            </div>

            <p class="text-sm sm:text-base font-semibold text-violet-500 py-4">After sucessfull payment our agent will contact you and visit your Home for Service.</p>

            <!-- <div class="pt-5 pb-10 w-full h-12"> -->
            <input id="submit" type="submit" value='proceed to checkout' onclick="processData(this)" class=" cursor-pointer  w-full rounded-md text-white sm:text-lg font-semibold bg-purple-600 shadow-md shadow-purple-300 hover:bg-purple-800 h-12 hover:shadow-none">
            <!-- </div> -->
        </form>
    </div>
</div>
<input type="hidden" id="tdata" data-data="{{ json_encode($t_data) }}">

<script>
    var time_slot = document.getElementById("time");
    hf_slot = document.querySelector('#slot')
    console.log(time_slot)
    time_slot.addEventListener('change', () => {
        const selectedvalue = time_slot.value;
        console.log('sellected' + selectedvalue)
        hf_slot.value = selectedvalue;
        console.log(hf_slot)
    });

    function dataPass(e) {
        var t_name = document.querySelector('#t_name');
        var t_dis = document.querySelector('#t_dis');
        document.querySelector('#hf_technician').value = t_name.innerText;
        console.log(document.querySelector('#hf_technician').value)

        var t_name_model = document.querySelector('#t_name_model');
        var t_dis_model = document.querySelector('#t_dis_model');
        t_name_model.innerText = t_name.innerHTML
        t_dis_model.innerText = t_dis.value + "km away";
    }
    var map;
    var myDiv = document.getElementById("loc-info");
    var dataElement = document.querySelector('#tdata');
    var technician = []
    JSON.parse(dataElement.dataset.data).forEach(e => {
        technician.push({
            lat: parseFloat(e.lat),
            lng: parseFloat(e.lng),
            name: e.name,
            place: e.t_place,
            ratting: e.ratting,
            job: e.s_category,
            icon: e.icon
        });
    });

    console.log(technician.length)

    function initMap() {
        var simpleStyle = [{
                elementType: "labels",
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                elementType: "geometry",
                stylers: [{
                    color: "#ebe3cd"
                }]
            },
            {
                elementType: "geometry.fill",
                stylers: [{
                    color: "#b6ad9a"
                }]
            },
            {
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#ebe3cd"
                }]
            },
        ];

        var nightStyle = [{
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#ffffff"
                }]
            },
            {
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#000000"
                }, {
                    visibility: "off"
                }],
            },
            {
                elementType: "geometry",
                stylers: [{
                    color: "#000000"
                }]
            },
            {
                elementType: "geometry.fill",
                stylers: [{
                    color: "#1b1b1b"
                }]
            },
            {
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#2c2c2c"
                }]
            },
        ];

        var retroStyle = [{
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#806b63"
                }]
            },
            {
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#ffffff"
                }]
            },
            {
                elementType: "geometry",
                stylers: [{
                    color: "#f5f1e6"
                }]
            },
            {
                elementType: "geometry.fill",
                stylers: [{
                    color: "#d9b38c"
                }]
            },
            {
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#f5f1e6"
                }]
            },
        ];

        var custom = [{
                featureType: "all",
                elementType: "geometry",
                stylers: [{
                    color: "#202c3e",
                }, ],
            },
            {
                featureType: "all",
                elementType: "labels.text.fill",
                stylers: [{
                        gamma: 0.01,
                    },
                    {
                        lightness: 20,
                    },
                    {
                        weight: "1.39",
                    },
                    {
                        color: "#ffffff",
                    },
                ],
            },
            {
                featureType: "all",
                elementType: "labels.text.stroke",
                stylers: [{
                        weight: "0.96",
                    },
                    {
                        saturation: "9",
                    },
                    {
                        visibility: "on",
                    },
                    {
                        color: "#000000",
                    },
                ],
            },
            {
                featureType: "all",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off",
                }, ],
            },
            {
                featureType: "landscape",
                elementType: "geometry",
                stylers: [{
                        lightness: 30,
                    },
                    {
                        saturation: "9",
                    },
                    {
                        color: "#29446b",
                    },
                ],
            },
            {
                featureType: "poi",
                elementType: "geometry",
                stylers: [{
                    saturation: 20,
                }, ],
            },
            {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [{
                        lightness: 20,
                    },
                    {
                        saturation: -20,
                    },
                ],
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                        lightness: 10,
                    },
                    {
                        saturation: -30,
                    },
                ],
            },
            {
                featureType: "road",
                elementType: "geometry.fill",
                stylers: [{
                    color: "#193a55",
                }, ],
            },
            {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [{
                        saturation: 25,
                    },
                    {
                        lightness: 25,
                    },
                    {
                        weight: "0.01",
                    },
                ],
            },
            {
                featureType: "water",
                elementType: "all",
                stylers: [{
                    lightness: -20,
                }, ],
            },
        ];

        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 19.022480011,
                lng: 72.855026245
            },
            zoom: 14,
            // mapId: "8e0a97af9386fef",
            styles: custom,
        });

        var openInfoWindow = null;
        var selectedMarker = null;
        var selectedInfoWindow = null;


        var data = JSON.parse(dataElement.dataset.data);
        console.log(data.length)




        for (var i = 0; i < technician.length; i++) {
            var appliances =
                "https://cdn-icons-png.flaticon.com/32/4003/4003447.png";
            var acRepair =
                "https://img.icons8.com/color/48/null/user-location.png";
            var plumbers =
                "";
            console.log(technician)

            var markerImage = acRepair;
            (function() {
                var electrician = technician[i];

                var marker = new google.maps.Marker({
                    position: {
                        lat: electrician.lat,
                        lng: electrician.lng
                    },
                    map: map,
                    title: electrician.name,
                    icon: electrician.icon,
                    animation: google.maps.Animation.BOUNCE,
                });

                navigator.geolocation.getCurrentPosition(function(position) {
                    var userLatLng = new google.maps.LatLng(
                        position.coords.latitude,
                        position.coords.longitude
                    );

                    var markerLatLng = new google.maps.LatLng(
                        electrician.lat,
                        electrician.lng
                    );
                    var distance =
                        google.maps.geometry.spherical.computeDistanceBetween(
                            userLatLng,
                            markerLatLng
                        ) / 1000;

                    var infoWindow = new google.maps.InfoWindow({
                        content: `<div style="text-align: center; max-width: 160px" class='pr-1.5'> <h1 class="text-base font-bold text-indigo-900 flex  flex-wrap justify-center items-center gap-x-3 ">
                        ${electrician.name}
                        <p  class='text-sm font-bold text-green-500'>
                        ${ distance.toFixed(0)}
                         km</p> </h1> <h4 class='pt-2 font-semibold text-xs'>
                        ${electrician.place} </h4></div> <br />
                                `,
                    });

                    marker.addListener("click", function() {
                        if (selectedMarker && selectedInfoWindow) {
                            selectedInfoWindow.close();
                            selectedMarker.setAnimation(google.maps.Animation.BOUNCE);
                        }

                        infoWindow.open(map, marker);
                        marker.setAnimation(google.maps.Animation.DROP);

                        selectedMarker = marker;
                        selectedInfoWindow = infoWindow;
                        openModalBtn.classList.remove('hidden')
                        openModalBtn.classList.add('block')
                        ratting = document.querySelector('#ratting');
                        ratting.classList.add('border', 'border-gray-500')
                        ratting.innerHTML = `<i class="fa-solid fa-star text-green-700"></i>
                        <p id="ratting" class="text-xl font-semibold text-green-700">${electrician.ratting}</p>`
                        myDiv.innerHTML =
                            `<div class='flex justify-center items-center gap-3 flex-col md:flex-row'>

                                <h3 id='t_name' class='w-fit'> 
                                    ${electrician.name }
                                </h3>
                                <p class='pt-[2px]'>(${electrician.job})</p>  
                            </div>
                            </br>
                            <h4 id='t_place'>
                                ${electrician.place} 
                            </h4> 
                            <input id='t_dis' type='hidden' class='' value='${distance.toFixed(0)}'></input>`;
                    });
                });
            })();
        }






        // data.forEach(function(item) {
        //     console.log(item)
        //     var electric =
        //         "https://img.icons8.com/color/48/null/user-location.png";
        //     var acRepair =
        //         "https://img.icons8.com/color/48/null/user-location.png";
        //     var plumbers =
        //         "https://img.icons8.com/color/48/null/user-location.png";

        //     var markerImage = acRepair;
        //     (function() {
        //         console.log(item.name)
        //         console.log(item.lat)
        //         console.log(item.lng)
        //         var latitude = parseInt(item.lat);
        //         var longitude = parseInt(item.lng);
        //         var marker = new google.maps.Marker({
        //             position: {
        //                 lat: latitude,
        //                 lng: longitude
        //             },
        //             map: map,
        //             title: item.name,
        //             icon: markerImage,
        //             animation: google.maps.Animation.BOUNCE,
        //         });

        //         navigator.geolocation.getCurrentPosition(function(position) {
        //             var userLatLng = new google.maps.LatLng(
        //                 position.coords.latitude,
        //                 position.coords.longitude
        //             );

        //             var markerLatLng = new google.maps.LatLng(latitude, longitude

        //             );
        //             var distance =
        //                 google.maps.geometry.spherical.computeDistanceBetween(
        //                     userLatLng,
        //                     markerLatLng
        //                 ) / 1000;

        //             var infoWindow = new google.maps.InfoWindow({
        //                 content: '<div style="text-align: center; max-width: 150px"> <h1 class="text-lg font-bold text-indigo-900 flex justify-center items-center gap-3">' +
        //                     item.name +
        //                     "<p class='text-md font-bold text-green-500'>" +
        //                     distance.toFixed(0) +
        //                     " km</p> </h1> <h4 class='font-semibold text-md'>" +
        //                     item.t_place +
        //                     "</h4></div> <br />",
        //             });

        //             marker.addListener("click", function() {
        //                 if (selectedMarker && selectedInfoWindow) {
        //                     selectedInfoWindow.close();
        //                     selectedMarker.setAnimation(google.maps.Animation.BOUNCE);
        //                 }

        //                 infoWindow.open(map, marker);
        //                 marker.setAnimation(google.maps.Animation.DROP);

        //                 selectedMarker = marker;
        //                 selectedInfoWindow = infoWindow;

        //                 myDiv.innerHTML =
        //                     "<h3 class='flex justify-center items-center gap-3 flex-col md:flex-row'>" +
        //                     item.t_id +
        //                     " <p class='pt-[2px]'>( " +
        //                     item.job +
        //                     " )</p> </h3>" +
        //                     "<h4>" +
        //                     item.t_place +
        //                     "</h4>";
        //             });
        //         });
        //     })();
        // });
        // for (var i = 0; i < electricians.length; i++) {
        //     var electric =
        //         "https://cdn-icons-png.flaticon.com/32/4003/4003447.png";
        //     var acRepair =
        //         "https://cdn-icons-png.flaticon.com/32/6265/6265237.png ";
        //     var plumbers =
        //         "";

        //     var markerImage = acRepair;
        //     (function() {
        //         var electrician = ac[i];
        //         var marker = new google.maps.Marker({
        //             position: {
        //                 lat: electrician.lat,
        //                 lng: electrician.lng
        //             },
        //             map: map,
        //             title: electrician.name,
        //             icon: markerImage,
        //             animation: google.maps.Animation.BOUNCE,
        //         });

        //         navigator.geolocation.getCurrentPosition(function(position) {
        //             var userLatLng = new google.maps.LatLng(
        //                 position.coords.latitude,
        //                 position.coords.longitude
        //             );

        //             var markerLatLng = new google.maps.LatLng(
        //                 electrician.lat,
        //                 electrician.lng
        //             );
        //             var distance =
        //                 google.maps.geometry.spherical.computeDistanceBetween(
        //                     userLatLng,
        //                     markerLatLng
        //                 ) / 1000;

        //             var infoWindow = new google.maps.InfoWindow({
        //                 content: '<div style="text-align: center; max-width: 150px"> <h1 class="text-lg font-bold text-indigo-900 flex justify-center items-center gap-3">' +
        //                     electrician.name +
        //                     "<p class='text-md font-bold text-green-500'>" +
        //                     distance.toFixed(0) +
        //                     " km</p> </h1> <h4 class='font-semibold text-md'>" +
        //                     electrician.place +
        //                     "</h4></div> <br />",
        //             });

        //             marker.addListener("click", function() {
        //                 if (selectedMarker && selectedInfoWindow) {
        //                     selectedInfoWindow.close();
        //                     selectedMarker.setAnimation(google.maps.Animation.BOUNCE);
        //                 }

        //                 infoWindow.open(map, marker);
        //                 marker.setAnimation(google.maps.Animation.DROP);

        //                 selectedMarker = marker;
        //                 selectedInfoWindow = infoWindow;

        //                 myDiv.innerHTML =
        //                     "<h3 class='flex justify-center items-center gap-3 flex-col md:flex-row'>" +
        //                     electrician.name +
        //                     " <p class='pt-[2px]'>( " +
        //                     electrician.job +
        //                     " )</p> </h3>" +
        //                     "<h4>" +
        //                     electrician.place +
        //                     "</h4>";
        //             });
        //         });
        //     })();
        // }

        map.addListener("click", function(event) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                location: event.latLng
            }, function(results, status) {
                if (status === "OK") {
                    if (results[0]) {
                        document.getElementById("location").value =
                            event.latLng.lat() + ", " + event.latLng.lng();
                        document.getElementById("title").value = results[0].formatted_address;
                    } else {
                        window.alert("No results found");
                    }
                } else {
                    window.alert("Geocoder failed due to: " + status);
                }
            });
        });
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        document.getElementById("current-location").value =
            latitude + ", " + longitude;
    }

    // -------------  Modal  -------------------
    const openModalBtn = document.getElementById("openModalBtn");
    const modalBackground = document.getElementById("modalBackground");
    const cancelModalBtn = document.getElementById("cancelModalBtn");

    function validateCheckbox() {
        var checkstate = document.getElementById("option1");
        if (checkstate.checked) {
            checkstate.value = "1"
            console.log(checkstate.value)

            document.getElementById("date").disabled = true;
        } else {
            checkstate.value = "0"
            console.log(checkstate.value)

            document.getElementById("date").disabled = false;
        }
    }

    openModalBtn.addEventListener("click", function() {
        modalBackground.classList.add("show");
        document.getElementById("option1").checked = false;
        document.getElementById("date").value = "";
        document.getElementById("time").disabled = true;
        document.getElementById("time").innerHTML =
            '<option value="" disabled selected hidden>Select A Date First</option>';
    });

    modalBackground.addEventListener("click", function(event) {
        if (event.target === modalBackground) {
            modalBackground.classList.remove("show");
            // reset modal values here
        }
    });

    cancelModalBtn.addEventListener("click", function() {
        modalBackground.classList.remove("show");
        // reset modal values here
    });

    // ---------------------- select slot ---------------------

    var today = new Date();
    var next15Days = new Date(today.getTime() + 15 * 24 * 60 * 60 * 1000);
    var minDate = today.toISOString().slice(0, 10);
    var maxDate = next15Days.toISOString().slice(0, 10);
    document.getElementById("date").setAttribute("min", minDate);
    document.getElementById("date").setAttribute("max", maxDate);

    // populate the timeslots select input with 3 time slots for each day
    function populateTimeslots() {
        var timeslotSelect = document.getElementById("timeslot");
        var selectedDate = new Date(document.getElementById("date").value);
        timeslotSelect.innerHTML = "";
        for (var i = 0; i < 3; i++) {
            var option = document.createElement("option");
            option.text = formatDate(selectedDate) + " " + formatTime(i);
            option.value = i;
            timeslotSelect.add(option);
        }

        enableButton();
    }

    // enable the submit button when a time slot is selected
    function enableButton() {
        var timeslotSelect = document.getElementById("timeslot");
        var submitButton = document.getElementById("submit");
        if (timeslotSelect.value !== "") {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }

    const dateInput = document.getElementById("date");
    const timeInput = document.getElementById("time");
    const submitButton = document.getElementById("submit");

    submitButton.disabled = true;

    dateInput.addEventListener("change", function() {
        if (dateInput.value !== "") {
            timeInput.disabled = false;
            submitButton.disabled = false;
        } else {
            timeInput.disabled = true;
            submitButton.disabled = true;
        }
    });

    timeInput.addEventListener("change", function() {
        if (timeInput.value !== "") {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });

    function processData(e) {
        const selectedDate = dateInput.value;
        const selectedTime = timeInput.value;
        var e = document.getElementById("time");
        var text = e.options[e.selectedIndex].text;
        var form_model = document.querySelector('#form_model');
        console.log(form_model)
    }

    document.getElementById("time").disabled = "true";

    // --------------  new --------------

    dateInput.addEventListener("change", function() {
        const selectedDate = new Date(dateInput.value);
        const currentDate = new Date();
        const currentDateTime = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            currentDate.getDate(),
            currentDate.getHours(),
            0,
            0,
            0
        );

        if (selectedDate.getTime() === currentDateTime.getTime()) {
            const currentHour = currentDate.getHours();
            const availableTimes = ["4pm-6pm", "9pm-11pm"].filter((time) => {
                const startHour = parseInt(time.split("-")[0]);
                return startHour >= currentHour + 1;
            });
            populateSelectBox(availableTimes);
        } else if (selectedDate > currentDateTime) {
            const availableTimes = ["10am-1pm", "4pm-6pm", "7pm-11pm"];
            populateSelectBox(availableTimes);
        } else {
            timeInput.innerHTML =
                '<option value="" disabled selected hidden>No slots avialable</option>';
        }
    });

    function populateSelectBox(times) {
        timeInput.innerHTML =
            "<option value='' disabled selected hidden>Time slots</option>";
        for (let i = 0; i < times.length; i++) {
            const option = document.createElement("option");
            option.value = times[i];
            option.text = times[i];
            timeInput.appendChild(option);
        }
    }
</script>
<script async='false' defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbO90cT0yC58yZySAryqrikz2hBfxPnqo&libraries=geometry&callback=initMap"></script>
@endsection