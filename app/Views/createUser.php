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
<form class="w-full max-w-sm" action="/user2DB" method="post">
  <div class="flex items-center border-b border-purple-500 py-2">
      <div>
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Username" aria-label="username" name="nama">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="password" placeholder="password" aria-label="password" name="password">
        <button class="flex-shrink-0 bg-purple-500 hover:bg-purple-700 border-purple-500 hover:border-purple-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">Create</button>
      </div>
    <button class="flex-shrink-0 border-transparent border-4 text-purple-500 hover:text-purple-800 text-sm py-1 px-2 rounded" type="button">
      <a href="/">Cancel</a>
    </button>
  </div>
</form>
</body>
</html>
