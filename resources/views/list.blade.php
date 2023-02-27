<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>meetIn</title>
    
</head>
<body class="" >
    @component('components.nav')
        Log out
    @endcomponent
    @component('components.title')
        @slot('title')
            Meeting room booking details
        @endslot
        <a class="btn w-32 btn-primary absolute" style="--bs-btn-bg: #2E31FB; --bs-btn-hover-bg: #2E31FB; margin-left: 81%;" href="/form" role="button">Add request</a> 
    @endcomponent
    <main class="mx-20 bg-[#F4F4F4] font-inter p-8 mt-16 rounded-2xl ">
        <nav class="nav nav-pills flex-column flex-sm-row text-center bg-[#F1F1F1] p-4 rounded-2xl font-medium text-xl">
            <a class="flex-sm-fill text-sm-center nav-link active ml-8" 
                aria-current="page" href="#"
                style="background-color: #2E31FB;">
                My submission
            </a>
            <a class="flex-sm-fill text-sm-center nav-link" 
                href="#"
                style="color: #1A1A1AB2;">History</a>
        </nav>
        <p class="ml-14 py-2 text-meetGray font-medium text-lg" >Number of requests</p>
        <div class="conten mx-14 ">
            {{$bookingData}}
            @component('components.cardList')
                @slot('id') A35DB53F @endslot
                @slot('dateF') 14/02/2022 @endslot
                @slot('name') 14/02/2022  @endslot
                @slot('devision') IT @endslot
                @slot('position') Front - End Developer @endslot
                @slot('dateL') 14/02/2022 @endslot
                @component('components.status')
                        @slot('nameStatus')
                            Accepted
                        @endslot
                        @slot('bg')
                            #D8F4D7
                        @endslot
                            #34B532
                @endcomponent
            @endcomponent
            @component('components.cardList')
                @slot('id') A35DB53F @endslot
                @slot('dateF') 14/02/2022 @endslot
                @slot('name') 14/02/2022  @endslot
                @slot('devision') IT @endslot
                @slot('position') Front - End Developer @endslot
                @slot('dateL') 14/02/2022 @endslot
                @component('components.status')
                        @slot('nameStatus')
                            Submit
                        @endslot
                        @slot('bg')
                            #CDCEFE
                        @endslot
                            #2E31FB
                @endcomponent
            @endcomponent
        </div>
    </main>
</body>
</html>