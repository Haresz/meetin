<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>meetIn</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="font-inter px-20 mb-16">
        <ul class="flex justify-between w-full py-10">
            <li><img src="logo.png" alt=""></li>
            <li>
                <ul class="flex justify-around w-80">
                    <li>Home</li>
                    <li>About</li>
                    <li>Gallery</li>
                    <li>List</li>
                </ul>
            </li>
            <li>
                <ul class="flex justify-around w-60">
                    <li>
                        <a href="/login" type="button" class="btn btn-outline-primary"
                            style="--bs-btn-color: #2E31FB; --bs-btn-hover-bg: #2E31FB;">
                            Login
                        </a>
                    </li>
                    <li><a class="btn btn-primary" style="--bs-btn-bg: #2E31FB; --bs-btn-hover-bg: #2E31FB;"
                            href="#" role="button">Try For Free</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <main class="flex justify-between px-20">
        <div class="font-inter">
            <p class="text-meetPurpel font-medium text-xl">👋 Welcome to Meetin</p>
            <h1 class="text-meetBlack font-medium text-7xl py-8">
                Free and <a class="text-meetPurpel">instant</a> <br> <a class="text-meetPurpel">meeting</a> room <br>
                breaker only here
            </h1>
            <p class="text-meetGray font-medium text-xl">Eu amet risus arcu malesuada purus in. Vitae nunc massa
                facilisi<br> adipiscing at dignissim. Nibh elit fermentum magna viverra sodales<br> ornare habitasse in
                eros. </p>
            <div class="input-group flex-nowrap w-full pt-20">
                <input type="text" class="form-control" placeholder="Email address...." aria-label="Username"
                    aria-describedby="addon-wrapping"
                    style="border: none;
                                background-color: #FAFAFA;
                                border-radius: none;">
                <span class="input-group-text" id="addon-wrapping"
                    style="background-color: #2E31FB;
                       color: #FFFF;
                       ">
                    Try For Free
                </span>
            </div>
        </div>
        <div class="bg-[#F8F8F8] rounded-[8%]">
            <img class=" p-12 " src="landing-conten.png" alt="">
        </div>
    </main>
</body>

</html>
