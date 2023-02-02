<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>meetIn</title>
    @vite('resources/css/app.css')
</head>
<body>
    @component('components.nav')
        Log out
    @endcomponent
    @component('components.title')
        @slot('title')
            Request booking room
        @endslot
    @endcomponent
    <p class="mt-4 font-inter text-center text-meetGray text-xl">Please fill out the form below to make a request meeting room bookings</p>
    <form action="get" class="flex mt-8 px-20">
        <ul class="flex flex-col mr-6 w-full">
            <li>
                @component('components.inputs.text')
                    Order name
                    @slot('placeholder')
                        Petra Sola
                    @endslot
                @endcomponent
            </li>
            <li>
                @component('components.inputs.dete')
                    Loan Date
                    @slot('placeholder')
                        -
                    @endslot
                @endcomponent
            </li>
            <li>
                @component('components.inputs.text')
                    Room name
                    @slot('placeholder')
                        Bugenvil
                    @endslot
                @endcomponent
            </li>
            <li>
                @component('components.inputs.text')
                    Number of people
                    @slot('placeholder')
                        12
                    @endslot
                @endcomponent
            </li>
        </ul>
        <ul class="flex flex-col ml-6 w-full">
            <li>
                @component('components.inputs.text')
                    Departement
                    @slot('placeholder')
                        IT
                    @endslot
                @endcomponent
            </li>
            <li>
                @component('components.inputs.text')
                    Necessity
                    @slot('placeholder')
                        Launcing web
                    @endslot
                @endcomponent
            </li>
            <li class="">
                @component('components.inputs.select')
                    Time’s up
                @endcomponent
            </li>
            <li>
                @component('components.inputs.text')
                    Information
                    @slot('placeholder')
                        -
                    @endslot
                @endcomponent
            </li>
            <li class="flex justify-end"><a class="btn btn-primary px-4 py-2 mt-8" style="--bs-btn-bg: #2E31FB; --bs-btn-hover-bg: #2E31FB;" href="/list" role="button">Submit</a></li>
        </ul>
    </form>
</body>
</html>