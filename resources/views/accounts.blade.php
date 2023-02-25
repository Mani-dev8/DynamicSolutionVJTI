@extends('welcome')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />
<style>
    * {
        font-family: 'Source Sans Pro';
    }
</style>

<div class="mx-4 min-h-screen max-w-screen-xl sm:mx-8 xl:mx-auto">
    <div class="flex flex-row items-center justify-between border-b ">
        <h1 class="py-6 text-3xl md:text-4xl font-semibold">Settings</h1>
        <div class="flex flex-row items-center justify-center gap-2 ">
            <a href="home">
                <div class="flex sm:hover:text-violet-800  cursor-pointer text-gray-400  flex-row items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                    &nbsp;<span class="font-semibold mr-0.5">Home </span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                    </svg>
                </div>
            </a>
            <div class="flex flex-row text-violet-800 items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
                </svg>
                &nbsp;<span class="font-semibold">Settings</span>
            </div>

        </div>
    </div>
    <div class="grid grid-cols-12 pt-3 sm:grid-cols-12">


        <div class="col-span-12 overflow-hidden rounded-xl sm:bg-gray-50 sm:px-8 sm:shadow">
            <div class="pt-4">
                <h1 class="py-2 text-2xl font-semibold ">Account details</h1>
                <!-- <p class="font- text-slate-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p> -->
            </div>
            <hr class="mt-4 mb-8" />
            <p class="py-2 text-xl font-semibold">Email Address</p>
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <p class="text-gray-600">Your email address is <strong>{{session('email')}}</strong></p>
                <button class="inline-flex text-sm font-semibold text-violet-600 underline decoration-2">Change</button>
            </div>
            <hr class="mt-4 mb-8" />
            <p class="py-2 text-xl font-semibold">Password</p>
            <div class="flex items-center">
                <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3">
                    <label for="login-password">
                        <span class="text-sm text-gray-500">Password</span>
                        <div class="flex flex-row items-center justify-center">
                            <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                                <input type="password" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
                            </div>
                            
                        </div>
                    </label>
                </div>
            </div>
            <p class="mt-2">Can't remember your current password. <a class="text-sm font-semibold text-violet-600 underline decoration-2" href="#">Change Password</a></p>
            <a href="logout">
                <button class="mt-4 rounded-lg bg-violet-600 px-6 py-3 shadow-md shadow-violet-300 hover:shadow-none hover:bg-violet-600 text-white font-semibold">Log Out</button>
            </a>
            <hr class="mt-4 mb-8" />

            <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Billing History</p>
                <table class="w-full">
                    <thead>
                        <td class="text-center font-semibold">Date</td>
                        <td class="text-center font-semibold">Description</td>
                        <td class="text-center font-semibold">Amount</td>
                        <td class="text-center font-semibold"></td>
                    </thead>
                    <tbody>
                        @if(session('user'))
                        @foreach(session('accounts_data') as $data)
                        <tr>

                            <td class="border-b py-2 text-center text-sm pl-2">{{$data->created_at}}</td>
                            <td class="border-b py-2 text-center text-sm px-4">Appliance repaired by {{$data->t_name}} between {{$data->time_slote}} </td>
                            <td class="border-b py-2 text-center text-sm">₹ {{$data->o_amount}}</td>
                            <td class="border-b py-2 text-center text-sm pr-2"><button class="text-sm text-violet-600 underline" onclick="downloadPDF()">PDF</button></td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    function downloadPDF() {
        fetch('/generate-pdf')
            .then(response => response.blob())
            .then(blob => {
                const url = window.URL.createObjectURL(new Blob([blob], {
                    type: 'application/pdf'
                }));

                const link = document.createElement('a');
                link.href = url;
                link.download = 'example.pdf';

                link.click();

                window.URL.revokeObjectURL(url);
            })
            .catch(error => console.error(error));

        console.log(" hii");
    }
</script>
@endsection