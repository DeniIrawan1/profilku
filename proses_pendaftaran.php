<?php
include("config.php");
//cek apakah tombol simpan sudah diklik atau belum
if($-server['request_method'] == "post"){
    //ambil data dari from
    $nis = $_post['nis';];
    $nama = $_post['nama_lengkap';];
    $alamat = $_post['alamat';];
    $jk = $_post['jenis_kelamin';];
    $no_telp = $_post['no_telp';];
    $kelas = $_post['kelas';];
    //buat query
    $sql = "insert into t_siswa(nis, nama_lengkap, alamat, jenis kelamin, no_telp, kelas)
    value('$nis,'$nama','$alamat','$jk','$no_telp','$kelas')";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //apakah query update berhasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses header('location:index.php?status=sukses');
    }else{
        //kalau berhasil, alihkan ke halaman index.php dengan status=gagal header('location:index.php?status=gagal');
    }
}else{
    die("akses dilarang ...");
}
?>