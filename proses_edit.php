<?php
include("config.php");
if($_server['request_method'] == "post"){
    //ambil data dari from
    $nis = $_post['nis'];
    $nama = $_post['nama_lengakap'];
    $alamat = $_post['nama_lengakap'];
    $jk = $_post['jenis_kelamin'];
    $no_telp = $_post['no_telp'];
    $kelas = $_post['kelas'];
    // buat query update
    $sql = "update t_siswa set nama_lengkap='$nama', amalat='$alamat',
    jenis_kelamin='$jk', no_telp='$no_telp', kelas ='$kelas' where nis = $nis";
    //apakah update berhasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('location;index.php?status=sukses');
    } else{
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal header('location:index.php?status=gagal);
    }
}else{
        die("akses dilarang ...");
    }
    
?>