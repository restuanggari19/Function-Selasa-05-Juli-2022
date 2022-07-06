<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>Daftar Pasien | Puskesmas</title>
</head>
<body>
    <div class="container">
<h2>Daftar Pasien</h2>
<table>
    <form action="hasil.php" method="post">
        <tr>
           <td><label>Nama Pasien: </label></td>
            <td><input type="text" name="nama_pasien"  placeholder="Masukan Nama Pasien" /></td>
        </tr>
        
        <tr>
           <td><label>NIK: </label></td>
            <td><input type="number" name="nik"  placeholder="Masukan NIK" /></td>
        </tr>

        <tr>
           <td><label>Jenis Kelamin: </label></td>
            <td><input type="text" name="jenis_kelamin"  placeholder="Masukan Jenis Kelamin" /></td>
        </tr>

        <tr>
           <td><label>No Antrian: </label></td>
            <td><input type="number" name="no_antrian"  placeholder="Masukan No Antrian" /></td>
        </tr>

        <tr>
           <td><label>No Handphone: </label></td>
            <td><input type="number" name="no_handphone"  placeholder="Masukan No Handphone" /></td>
        </tr>

        <tr>
           <td><label>Alamat: </label></td>
            <td><input type="text" name="alamat"  placeholder="Masukan Alamat" /></td>
        </tr>

        <tr>
            <td><button type="submit" name="submit" class="btn btn-primary">Kirim</button></td>
        </tr>
    </form>
</table>
</div>
</body>
</html>
