<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/todolist/simpan" method="post">
        <?= csrf_field() ?>
        <label for="kegiatan">Masukkan Kegiatan:</label>
        <br><input type="text" name="kegiatan" id="kegiatan">
        <input type="submit" value="Simpan">
    </form>

    <h2>Daftar Kegiatan</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">List</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($daftarkegiatan) && is_array($daftarkegiatan)) :?>
                <?php foreach ($daftarkegiatan as $dft) : ?>
                    <tr>
                        <td><?= $dft['kegiatan'] ?? 'N/A' ?></td>
                        <td>
                            <div>
                                <a href="/todolist/selesai/<?= $dft['idkegiatan']?>">Selesai</a>&nbsp;
                                <a href="/todolist/hapus/<?= $dft['idkegiatan']?>">Hapus</a>
                                <a href="/todolist/edit/<?= $dft['idkegiatan'] ?>">Edit</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach?>
            
            <?php else : ?>

            <?php endif ?>
        </tbody>
    </table>
</body>
</html>