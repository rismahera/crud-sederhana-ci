
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align='center'>
        PROFILE SISWA
    </h1>
    <table border='1' align='center'>
        <thead>
            <tr>
                <th>ID</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>

        <?php $no = 1; foreach($siswa as $p) { ?>

            <tr>
                <td align="center"><?= $no ?></td>
                <td align="center"><?= $p->siswa_id ?></td>
                <td align="center"><?= $p->siswa_nisn ?></td>
                <td align="center"><?= $p->siswa_nama_lengkap ?></td>
                <td align="center"><?= $p->siswa_tempat_lahir ?></td>
                <td align="center"><?= $p->siswa_tgl_lahir ?></td>
                <td align="center"><?= $p->siswa_nohp ?></td>
                <td align="center"><?= $p->program_id ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>

    