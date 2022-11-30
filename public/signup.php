<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../dist/css/style.css" />
  </head>
  <body>
    <!-- Header Section Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#" class="font-bold text-lg text-slate-800 block py-6"> SOKIN </a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="../index.php" class="text-base text-slate-800 py-2 mx-8 group-hover:text-bgsign flex">Home</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- Background Page Start-->
    <section class="pt-36">
      <div class="flex flex-wrap">
        <div class="w-full pt-36 h-1/2 bg-bgawal rounded-t-[75px] fixed bottom-0 -z-10"></div>
      </div>
    </section>
    <!-- Background Page End-->

    <!-- Background Form Start-->
    <section class="flex items-center justify-center">
      <div class="bg-bgsign flex flex-nowrap rounded-3xl shadow-lg max-w-2xl justify-center p-5">
        <!-- form start -->
        <div class="w-full sm:w-1/2">
          <div class="grid grid-cols-2 mb-4">
            <a href="login.php" class="my-4 font-semibold text-white hover:border-b-2 hover:border-white hover:font-bold focus:border-b-2 focus:border-white focus:font-bold">Login</a>
            <a href="signup.php" class="my-4 font-semibold text-white hover:border-b-2 hover:border-white hover:font-bold focus:border-b-2 focus:border-white focus:font-bold">Sign Up</a>
          </div>
          <h2 class="font-bold text-2xl text-white text-center">Sign Up</h2>
          <div>
            <label for="username" class="block mx-8 mt-4">
              <span class="block font-semibold mb-1 text-white ml-1">Username</span>
              <input
                type="text"
                id="username"
                placeholder="Masukan Username"
                class="bg-text-white px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
              />
            </label>
          </div>
          <div>
            <label for="email" class="block mx-8 mt-4">
              <span class="block font-semibold mb-1 text-white ml-1">Email</span>
              <input
                type="email"
                id="email"
                placeholder="Masukan Email"
                class="bg-text-white px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-red-600 invalid:focus:ring-red-600 invalid:focus:border-red-600 peer"
              />
              <p class="text-sm mt-1 text-white hidden peer-invalid:flex">Email tidak valid</p>
            </label>
          </div>
          <div>
            <label for="password" class="block mx-8 mt-4">
              <span class="block font-semibold mb-1 text-white ml-1">Password</span>
              <input
                type="password"
                id="password"
                placeholder="Masukan Password"
                class="bg-text-white px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-500 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
              />
            </label>
          </div>
          <div>
            <button class="my-10 bg-white text-slate-700 px-5 py-2 rounded-full font-semibold block mx-auto hover:bg-sky-500 hover:text-white active:bg-sky-600 active:text-slate-700 focus:ring focus:ring-sky-200">Sign Up</button>
          </div>
        </div>

        <!-- form end -->
        <!-- img start -->
        <div class="sm:w-1/2 flex sm:bg-white sm:p-5 sm:rounded-2xl">
          <img class="hidden sm:flex sm:w-full sm:mx-auto sm:my-auto sm:max-h-full sm:object-center" src="../dist/img/1.png" alt="signup" />
        </div>
        <!-- img end -->
      </div>
    </section>
    <!-- Background Form End-->

    <script src="dist/js/script.js"></script>
  </body>
</html>
