<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1 align="center">
        PROFILE 
    </h1>
    <center><a href="<?= base_url('Latihan/tambah_data_profile') ?>"><button class="btn btn-primary">Input Data</button></a></center>
    <br>
    <div class="container">
  <div class="row">
    <div class="col">
    <table class="table table-info table-striped table-bordered">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Tempat lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jenjang Pendidikan</th>
                    <th colspan='2'>Aksi</th>
                </tr>
        </thead>
            <tbody>

                <?php $no = 1; foreach($profile as $p) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $p->nama_depan ?></td>
                    <td ><?= $p->nama_belakang ?></td>
                    <td ><?= $p->tempat_lahir ?></td>
                    <td ><?= $p->tanggal_lahir ?></td>
                    <td ><?= $p->jenis_kelamin ?></td>
                    <td ><?= $p->alamat ?></td>
                    <td ><?= $p->jenjang_pendidikan ?></td>
                    <td>
                        <a href="<?= base_url('Latihan/update_data/'.$p->id) ?>">Edit</a>
                    </td> 
                    <td><a href="<?= base_url('Latihan/hapus_data/'.$p->id) ?>">Hapus</a></td>    
                </tr>
                <?php $no++; } ?>
            </tbody>
    </table>
    </div>
    
       
</body>
</html>