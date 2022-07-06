<?php

include "koneksi.php";

function addStack($kon,  $sql) {
    $hasil=mysqli_query($kon, $sql);

}

$nama_pasien=$_POST["nama_pasien"];
$nik=$_POST["nik"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$no_antrian=$_POST["no_antrian"];
$no_handphone=$_POST["no_handphone"];
$alamat=$_POST["alamat"];

$sqlAntrian="SELECT * FROM antrian";
$antrian=mysqli_query($kon, $sqlAntrian);

foreach($antrian -> fetch_all() as $data){
    echo "Nama Pasien : $data[0] <br />NIK : $data[1] <br />jenis Kelamin : $data[2] <br />No Antrian : $data[3] <br />No Handphone : $data[4] <br />Alamat : $data[5]<br />";
};

?>