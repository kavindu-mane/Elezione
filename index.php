<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Voting Website</title>
 <script src="https://cdn.tailwindcss.com"></script>

 <!-- google icons -->
      <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Kumbh+Sans&display=swap" rel="stylesheet">
     <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
           belanosima:['Belanosima', 'sans-serif']
          }
        }
      }
    }
  </script>
</head>

<body class="bg-gray-100">

<script>
      let menuOpen = false;
      const menuSettings = (e) => {
        const MENU = document.getElementById("menu");
        if (menuOpen) {
          MENU.classList.remove("right-0");
          MENU.classList.add("-right-80");
          menuOpen = false;
          e.target.innerHTML = "menu";
        } else {
          MENU.classList.remove("-right-80");
          MENU.classList.add("right-0");
          menuOpen = true;
          e.target.innerHTML = "close";
        }
      };
    </script>

  <!-- Navigation -->

      <header class="bg-blue-500 py-4 px-8 flex justify-center">
      <div class="container mx-0 md:mx-auto flex justify-between items-center">
        <a href="/"><h1 class="text-3xl font-bold text-white font-belanosima">Elezione</h1></a> 
        <nav class="flex items-center">
          <button onclick="menuSettings(event)" id="menu-btn" class="z-50">
            <span class="material-symbols-outlined text-white md:hidden">
              menu
            </span>
          </button>

          <!-- header link area -->
          <div
            id="menu"
            class="fixed -right-80 top-0 z-40 flex h-screen flex-col bg-blue-400 pe-4 ps-3 pt-10 duration-300 shadow-md shadow-slate-500 md:shadow-none md:relative md:right-0 md:h-auto md:flex-row md:bg-transparent md:pt-0"
          >
            <a
              href="#"
              class="mx-4 my-3 w-60 font-semibold text-white hover:text-amber-200 md:my-0 md:w-auto"
              >Home</a
            >

            <a
              href="#"
              class="mx-4 my-3 w-60 font-semibold text-white hover:text-amber-200 md:my-0 md:w-auto"
              >Pricing</a
            >

            <a
              href="#"
              class="mx-4 my-3 w-60 font-semibold text-white hover:text-amber-200 md:my-0 md:w-auto"
              >About</a
            >

            <a
              href="#"
              class="mx-4 my-3 w-60 font-semibold text-white hover:text-amber-200 md:my-0 md:w-auto"
              >Contact</a
            >

            <a
              href="#"
              class="mx-4 my-3 w-60 font-semibold text-white hover:text-amber-200 md:my-0 md:w-auto"
              >FAQ</a
            >
          </div>
        </nav>
      </div>
    </header>

  <!-- Hero Section -->
  <header class="py-20 bg-white">
    <div class="container mx-auto px-8 sm:px-16 md:px-24 lg:px-32 xl:px-40">
      <h1 class="text-4xl md:text-6xl font-bold text-center text-gray-800 mb-6">Welcome to <span class="font-belanosima text-sky-600">Elezione</span></h1>
      <p class="text-lg md:text-xl text-center text-gray-600 mb-12">Cast your vote conveniently from anywhere, anytime.</p>
      <div class="flex justify-center">
        <a href="#" class="bg-blue-500 text-white py-3 px-8 rounded-lg shadow-lg hover:bg-emerald-500 transition-colors duration-300">Get Started</a>
      </div>
    </div>
  </header>

  <!-- Features Section -->
  <section class="bg-gray-200 py-20">
    <div class="container mx-auto px-8 sm:px-16 md:px-24 lg:px-32 xl:px-40">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg p-8 shadow-xl duration-300 ease-in hover:scale-105 hover:bg-emerald-400 hover:shadow-emerald-400/50 text-gray-600 hover:text-gray-800">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Easy to Use</h2>
          <p>Our online voting platform is user-friendly and designed to make the voting process as simple as possible.</p>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-xl duration-300 ease-in hover:scale-105 hover:bg-emerald-400 hover:shadow-emerald-400/50 text-gray-600 hover:text-gray-800">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Secure and Reliable</h2>
          <p>We prioritize the security and integrity of your votes. Our platform ensures a reliable and tamper-proof voting experience.</p>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-xl duration-300 ease-in hover:scale-105 hover:bg-emerald-400 hover:shadow-emerald-400/50 text-gray-600 hover:text-gray-800">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Accessible Anytime, Anywhere</h2>
          <p>With our online voting system, you can cast your vote from the comfort of your home or on the go using any device.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 py-8">
    <p class="text-center text-white">© 2023 Elezione. All rights reserved.</p>
  </footer>

</body>

</html>
