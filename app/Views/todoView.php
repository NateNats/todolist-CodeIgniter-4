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
<div class="container mx-auto border">
    <div class="mx-auto block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
    <div>
        <button class="mb-6 bg-blue-500 text-white hover:bg-blue-700 py-2 px-4 rounded"><a href="/logout">Log out</a></button>
    </div>

        <form action="/todolist/simpan" method="post">
            <div class="flex space-x-2 mb-4">
                <input type="text" name="kegiatan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Input todo">
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded cursor-pointer" value="Submit">   
            </div>
        </form>
        
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-fixed">
            <tbody>
               <?php if (!empty($daftarkegiatan) && is_array($daftarkegiatan)) : ?>
                    <?php foreach ($daftarkegiatan as $dft) : ?>
                         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="w-1/2 p-2">
                                <?= $dft['kegiatan'] ?>
                            </th>
                            <td class="w-1/2 p-2">
                                <div class="flex space-x-2">
                                    <button class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                                        <a href="/todolist/selesai/<?= $dft['idkegiatan'] ?>">Selesai</a>
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">
                                        <a href="/todolist/hapus/<?= $dft['idkegiatan'] ?>">Hapus</a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <?php else : ?>
               <?php endif ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>