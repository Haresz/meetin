<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>meetIn</title>
    @vite('resources/css/app.css')
</head>

<body>
    @component('components.nav')
        Log out
    @endcomponent
    <main>
        @component('components.title')
            @slot('title')
                Meeting room booking details
            @endslot
        @endcomponent
        <ul>
            <li class="flex justify-between mt-8 px-20 text-lg">
                <p class="">No. Loan : <b>A35DB35F</b></p>
                <p class="">Order date: <b>14/02/2022</b></p>
            </li>
            <li>
                <hr class="mx-20 my-10" style="margin-top: 20px;">
            </li>
            <li class=" mx-20 my-10 ">
                <img src="progress-submit.svg" alt="">
            </li>
            <li class="flex px-20 justify-between">
                <p>Loan Status : <b>The request is approved and is being processed.</b></p>
                <div class="flex items-center">
                    <p class="mb-0 mr-6 font-meetGray">Status :</p>
                    @component('components.status')
                        @slot('nameStatus')
                            Accepted
                        @endslot
                        @slot('bg')
                            #D8F4D7
                        @endslot
                        #34B532
                    @endcomponent
                </div>
            </li>
        </ul>
        <div class="bg-[#FAFAFA] mx-20 my-6 font-inter">
            <h1 class="p-4 text-meetGray text-xl font-medium">Order Detail</h1>
            <div class="flex justify-between bg-white m-8 mx-20 p-4 mb-[8px]">
                <table>
                    <tr class="py-8">
                        <td>Order Name</td>
                        <td class="px-4">:</td>
                        <td><b>John Doe</b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Loan Date</td>
                        <td class="px-4">:</td>
                        <td><b>16/04/2022</b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Start Time</td>
                        <td class="px-4">:</td>
                        <td><b>16/04/2022, 10.00 </b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Room Name</td>
                        <td class="px-4">:</td>
                        <td><b>Bugenvil</b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Number of people</td>
                        <td class="px-4">:</td>
                        <td><b>12 People</b></td>
                    </tr>
                </table>
                <table>
                    <tr class="py-8">
                        <td>Department</td>
                        <td class="px-4">:</td>
                        <td><b>IT</b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Necessity</td>
                        <td class="px-4">:</td>
                        <td><b>Prepare live</b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Time's up</td>
                        <td class="px-4">:</td>
                        <td><b>16/04/2022, 13.00 </b></td>
                    </tr>
                    <tr class="py-8">
                        <td>Information</td>
                        <td class="px-4">:</td>
                        <td><b>-</b></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
        </div>
    </main>
</body>

</html>
