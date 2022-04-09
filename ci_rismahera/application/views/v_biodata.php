<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">
        ~MY BIODATA~ 
    </h1>
    <a href="<?= base_url('Latihan/tambah_data') ?>">input data</a>
    <table border="1" width ="35%" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nm ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $alt ?></td>
        </tr>
        <tr>
            <td>NO hp</td>
            <td>:</td>
            <td><?= $nohp ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $eml ?></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>:</td>
            <td><?= $skl ?></td>
        </tr>
        <tr>
            <td>jenis</td>
            <td>:</td>
            <td><?= $jk ?></td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><?= $tempat ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><?= $tanggal ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $status ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?= $hobi ?></td>
        </tr>
        <tr>
            <td>Update foto</td>
            <td>:</td>
            <td><?= $file ?></td>
        </tr>
    </table>
</body>
</html>