<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elezione | Login</title>

    <!-- include common data php file-->
    <?php include_once "components/common.php" ?>

  </head>
  <body class="bg-gray-100">
    <div
      class="h-auto min-h-screen flex py-10 justify-center items-center bg-gradient-to-br from-sky-300 to-fuchsia-700"
    >
      <!-- logo -->
      <a
        href="/"
        class="absolute top-3 start-2 sm:start-3 md:start-4"
      >
        <h1 class="text-3xl font-bold text-white font-belanosima">Elezione</h1>
      </a>
      <div
        class="grid grid-cols-1 py-10 h-fit w-full lg:grid-cols-2 place-items-center"
      >
        <!-- login page image -->
        <img
          src="resources/login.svg"
          alt="login"
          class="hidden w-96 h-fit lg:block xl:w-[26rem] 2xl:w-[30rem] animate-upDown"
        />
        <!-- login card -->
        <div
          class="w-11/12 md:ms-10 sm:w-[25] max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8"
        >
          <form class="space-y-6" action="#">
            <h5 class="text-xl font-medium text-gray-900">
              Sign in to
              <span class="font-belanosima text-2xl text-sky-600"
                >Elezione</span
              >
            </h5>
            <div>
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Your email</label
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
                >Your password</label
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
            <div class="flex items-start">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input
                    id="remember"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                    required
                  />
                </div>
                <label
                  for="remember"
                  class="ml-2 text-sm font-medium text-gray-900"
                  >Remember me</label
                >
              </div>
              <a href="#" class="ml-auto text-sm text-blue-700 hover:underline"
                >Forgot Password?</a
              >
            </div>
            <button
              type="submit"
              class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              Login to your account
            </button>
            <div class="text-sm font-medium text-gray-500">
              Not registered?
              <a href="/views/register.php" class="text-blue-700 hover:underline"
                >Create account</a
              >
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>