<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>MeetIn</title>
    @vite('resources/css/app.css')
</head>
<body class="flex w-full font-inter">
    <ul class="left flex flex-col px-20 w-1/2">
        <li>
            <img class="w-1/5 mt-8" src="logo.png" alt="">
        </li>
        <li class="mt-28 mb-16">
            <h1 class="text-meetBlack text-4xl" >Welcome Back 👋</h1>
            <p class="text-meetGray text-xl" >Welcome, Please Enter Your Details.</p>
        </li>
        <li>
            <ul >
                <li class="pb-4" >
                    <label class="pb-2" for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping"
                        style= "border: none;
                                background-color: #F5F5F5;
                                border-radius: 0;">
                </li>
                <li class="pb-2">
                <label class="pb-2" for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="" aria-label="Password" aria-describedby="addon-wrapping"
                        style= "border: none;
                                background-color: #F5F5F5;
                                border-radius: 0;">
                </li>
                <li class="flex justify-between py-4" >
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Rememberme">
                        <label class="form-check-label" for="Rememberme">
                            Remember me
                        </label>
                    </div>
                    <p class="text-meetRed" >Forgot Password?</p>
                </li>
                <li class=""><a class="btn btn-primary w-full" style="--bs-btn-bg: #2E31FB; --bs-btn-hover-bg: #2E31FB;" href="/list" role="button">Masuk</a></li>
            </ul>
        </li>
        <li class="text-center mt-48" > 
            <p>Don't have account yet? <a class="text-meetPurpel" href="/registrasi">Create Account</a></p>
        </li>
    </ul>
    <img class="w-1/2 h-screen" src="login-conten.png" alt="">
</body>
</html>