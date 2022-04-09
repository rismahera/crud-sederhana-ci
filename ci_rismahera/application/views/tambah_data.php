<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAH DATA</h1>
    <form action="<?= base_url('Latihan/simpan')?>" method="post">
    <table class="table table-dark">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="namaa"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamatt" id="" cols="35" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>No hp</td>
            <td>:</td>
            <td><input type="number" name="nohpp"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="emaill"></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>:</td>
            <td><input type="text" name="sekolahh"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jeniskelamin" id="">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
                <input type="radio" name="status" value="menikah">menikah
                <input type="radio" name="status" value="lajang">lajang
                <input type="radio" name="status" value="duda">duda
                <input type="radio" name="status" value="janda">janda
            </td>
        </tr>
        <tr>
            <td>hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="hobi" value="menari">menari
                <input type="checkbox" name="hobi" value="membaca">membaca
                <input type="checkbox" name="hobi" value="melukis">melukis
                <input type="checkbox" name="hobi" value="olahraga">olahraga
            </td>
        </tr>
        <tr> 
            <td>Update foto</td>
            <td>:</td>
            <td><input type="file" ></td>
        </tr>

        </table>
        <button name="simpan">simpan</button>
    </form>
</body>
</html>