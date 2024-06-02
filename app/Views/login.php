<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

    <style>
    
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

    </style>
</head>
<body>
<div class="mx-auto w-full max-w-sm">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 border">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="username" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Username</label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text" name="nama" id="username">
                
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="pw" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Password</label>
            </div>

            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="password" id="pw" name="password">
            </div>
        </div>

        <div class="md:flex flex-col md:items-center mb-2">
            <div class="md:w-1/3">
                <button class="shadow bg-purple-500 text-white font-bold rounded py-2 px-4 hover:bg-purple-400 focus:shadow-outline focus:outline-none">Sign in</button>
            </div>
            <div class="md:w-2/3 text-center mt-5">
                <span class="text-sm">Don't have an account? <a href="/createUser" class="text-blue-500">Create here...</a></span>
            </div>
        </div>

  </form>
</div>
</body>
</html>