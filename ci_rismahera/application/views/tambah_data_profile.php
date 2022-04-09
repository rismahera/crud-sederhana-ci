<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Tambah Data Profile </h1>
    <br>
    <div class="container">
  <div class="row">
    <div class="col">
    <form action="<?= base_url('Latihan/action_tambah_data') ?>" method="post">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <table class="table table-info table-hover table-bordered" >
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><input type="text" name="nama_depan" class="from-control"></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang" class="from-control"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tampat_lahir" class="from-control"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" class="from-control"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" id="" class="from-control">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" class="from-control"></td>
        </tr>
        <tr>
            <td>Jenjang Pendidikan</td>
            <td>:</td>
            <td>
                <select name="jenjang_pendidikan" id="" class="from-control">
                    <option value="SMK">SMK SEDERAJAT</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3" class="text-center">
                <button type="submit" class="btn btn-primary">simpan</button>
                <a href="" class="btn btn-primary">kembali</a>
            </td>
        </tr>
        </table>
    </form>
    </div>
    
</body>
</html>