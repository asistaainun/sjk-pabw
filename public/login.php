<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>

    <!-- Header Section Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#" class="font-bold text-lg text-slate-800 block py-6">
                        SOKIN
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300
                        ease-in-out origin-top-left "></span>
                        <span class="hamburger-line transition duration-300
                        ease-in-out"></span>
                        <span class="hamburger-line transition duration-300
                        ease-in-out origin-bottom-left "></span>

                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white
                    shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block
                    lg:static lg:bg-transparent lg:max-w-full
                    lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="../index.php" class="text-base text-slate-800 py-2 mx-8 group-hover:text-bgsign flex">Home</a>
                            </li>
                            <li class="group">
                                <a href="login.php" class="text-base text-slate-800 py-2 mx-8 group-hover:text-bgsign flex">Login</a>
                            </li>
                            <li class="group">
                                <a href="signup.php" class="text-base text-slate-800 py-2 mx-8 group-hover:text-bgsign flex">Sign up</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Background Start-->
    <section class="pt-36">
        <div class="flex flex-wrap">
            <div class="w-full pt-36 h-1/2 bg-bgawal rounded-t-[75px] fixed bottom-0 -z-10">
            </div>
        </div>
    </section>
    <!-- Background End-->
    
    <!-- Background Biru start-->
    <section class="flex items-center justify-center">
        <div class="bg-bgsign flex flex-nowrap rounded-3xl shadow-lg max-w-2xl justify-center p-5">
            <!-- form start -->
            <div class="w-full sm:w-1/2">
                    <h2 class="font-bold text-2xl text-white text-center underline">Login</h2>
                    <form action="../dist/php/loginx.php" method="post">
                        <label for="username" class="block mx-8 mt-4">
                        <span class="block font-semibold mb-1 text-white ml-1">Username</span>
                        <input
                            required
                            name="username"
                            type="text"
                            id="username"
                            placeholder="Masukan Username"
                            class="bg-text-white px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
                        />
                        </label>
                        <label for="pass" class="block mx-8 mt-4">
                        <span class="block font-semibold mb-1 text-white ml-1">Password</span>
                        <input
                            required
                            name="pass"
                            type="password"
                            id="password"
                            placeholder="Masukan Password"
                            class="bg-text-white px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
                        />
                        </label>
                        <input type="submit" name="submit" value="Login" class="my-10 bg-white text-slate-700 px-5 py-2 rounded-full font-semibold block mx-auto hover:bg-sky-500 hover:text-white active:bg-sky-600 active:text-slate-700 focus:ring focus:ring-sky-200">
                    </form>                    
            </div>

            <!-- form end -->
            <!-- img start -->
            <div class="sm:w-1/2 flex sm:bg-white sm:p-5 sm:rounded-2xl">
                <img class=" hidden sm:flex sm:w-full  sm:mx-auto sm:my-auto sm:max-h-full sm:object-center" src="../dist/img/saly.png" alt="signup">
            </div>
            <!-- img end -->
            
        </div>
    </section>
    <!-- Background Biru End-->

    <script src="../dist/js/script.js"></script>

</body>

</html>