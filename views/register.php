<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Elezione | Easy Voting Solution</title>

      <!-- include common data php file-->
      <?php include_once "components/common.php" ?>
  </head>
  <body class="bg-gray-100">
    <div
      class="h-auto min-h-screen flex py-10 justify-center items-center bg-gradient-to-br from-teal-800 to-lime-300"
    >
      <!-- logo -->
      <a href="/" class="absolute top-3 start-2 sm:start-3 md:start-4">
        <h1 class="text-3xl font-bold md:text-4xl text-white font-belanosima">
          Elezione
        </h1>
      </a>

      <div
        class="grid grid-cols-1 h-fit w-full py-10 place-items-center lg:grid-cols-2"
      >
        <!-- login page image -->
        <img
          src="resources/register.svg"
          alt="login"
          class="hidden w-96 h-fit lg:block xl:w-[26rem] 2xl:w-[30rem] animate-upDown"
        />

        <div
          class="w-11/12 md:ms-10 sm:w-[28rem] md:w-[30rem] max-w-lg bg-white border border-gray-200 rounded-lg shadow"
        >
          <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50"
            id="regtab"
          >
            <li class="mr-2">
              <button
                id="reg-voter"
                type="button"
                class="inline-block p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100"
              >
                Voter
              </button>
            </li>
            <li class="mr-2">
              <button
                id="reg-org"
                type="button"
                class="inline-block p-4 hover:bg-gray-100"
              >
                Organization
              </button>
            </li>
          </ul>
          <!-- user registration -->
          <form class="space-y-6 p-4 sm:p-6 md:p-8" action="#" id="voter-form">
            <h5 class="text-xl font-medium text-gray-900">
              Register to
              <span class="font-belanosima text-2xl text-sky-600"
                >Elezione</span
              >
            </h5>
            <div>
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Your name <span class="text-red-500">*</span></label
              >
              <input
                type="text"
                name="name"
                id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Peter Elwin"
                required
              />
            </div>
            <div>
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Your email <span class="text-red-500">*</span></label
              >
              <input
                type="email"
                name="email"
                id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@company.com"
                required
              />
            </div>
            <div>
              <label
                for="password"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Your password <span class="text-red-500">*</span></label
              >
              <input
                type="password"
                name="password"
                id="password"
                placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required
              />
            </div>
            <div>
              <label
                for="conf_password"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Confirm password <span class="text-red-500">*</span></label
              >
              <input
                type="password"
                name="conf_password"
                id="conf_password"
                placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required
              />
            </div>
            <button
              type="submit"
              class="relative group mt-4 w-full self-center bg-transparent z-[0] text-blue-700 hover:text-white border-blue-700 border-2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-8 py-2 text-center overflow-hidden"
            >
              Register to Elezione
              <span
                class="z-[-1] absolute w-full h-full -left-full top-0 bg-blue-700 group-hover:left-0 duration-200 ease-in"
              ></span>
            </button>
            <div class="text-sm font-medium text-gray-500">
              Already registered?
              <a href="/views/login.php" class="text-blue-700 hover:underline"
                >Login account</a
              >
            </div>
          </form>

          <!-- organization registration -->
          <form
            class="space-y-6 hidden p-4 sm:p-6 md:p-8"
            action="#"
            id="org-form"
          >
            <h5 class="text-xl font-medium text-gray-900">
              Register to
              <span class="font-belanosima text-2xl text-sky-600"
                >Elezione</span
              >
            </h5>

            <!-- form input area -->
            <div class="my-2">
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Organization name <span class="text-red-500">*</span>
              </label>
              <input
                type="text"
                name="name"
                id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Peter Elwin"
                required
              />
            </div>
            <div class="my-2">
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Organization email <span class="text-red-500">*</span>
              </label>
              <input
                type="email"
                name="email"
                id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@company.com"
                required
              />
            </div>
            <div class="my-2">
              <label
                for="package"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Package type <span class="text-red-500">*</span></label
              >
              <select
                id="package"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option value="silver" selected>Silver</option>
                <option value="gold">Gold</option>
                <option value="platinam">Platinam</option>
              </select>
            </div>
            <div class="my-2">
              <label
                for="password"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Password <span class="text-red-500">*</span>
              </label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="••••••••"
                required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              />
            </div>
            <div class="my-2">
              <label
                for="conf_password"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Confirm password <span class="text-red-500">*</span>
              </label>
              <input
                type="password"
                name="conf_password"
                id="conf_password"
                placeholder="••••••••"
                required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              />
            </div>

            <!-- next button -->
            <p class="mb-4 mt-8 text-center italic text-emerald-700">
              No need to pay today. All accounts have 7 days free trial.
            </p>

            <button
              type="submit"
              class="relative group mt-4 w-full self-center bg-transparent z-[0] text-blue-700 hover:text-white border-blue-700 border-2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-8 py-2 text-center overflow-hidden"
            >
              Register to Elezione
              <span
                class="z-[-1] absolute w-full h-full -left-full top-0 bg-blue-700 group-hover:left-0 duration-200 ease-in"
              ></span>
            </button>

            <div class="text-sm font-medium text-gray-500">
              Already registered?
              <a
                href="/views/login.php"
                class="text-blue-700 hover:text-green-600 duration-200 ease-in"
                >Login account</a
              >
            </div>
          </form>
        </div>

        <!-- form change script -->
        <script>
          const voterBtn = document.getElementById("reg-voter");
          const orgBtn = document.getElementById("reg-org");
          const voterForm = document.getElementById("voter-form");
          const orgForm = document.getElementById("org-form");
          voterBtn.addEventListener("click", () => {
            voterForm.classList.remove("hidden");
            orgForm.classList.add("hidden");
            voterBtn.classList.add("text-blue-600");
            orgBtn.classList.remove("text-blue-600");
          });
          orgBtn.addEventListener("click", () => {
            voterForm.classList.add("hidden");
            orgForm.classList.remove("hidden");
            orgBtn.classList.add("text-blue-600");
            voterBtn.classList.remove("text-blue-600");
          });
        </script>
      </div>
    </div>
  </body>
</html>