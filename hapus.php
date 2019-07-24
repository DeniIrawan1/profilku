<?php
include("config.php");
if(isset($_GET['nis'])){
    //ambil nis dari query string
    $nis = $_GET['nis'];
    //buta query hapus
    $sql = "DELETE FROM t_siswa WHERE nis=$nis";
    $sql = mysqli_query($db, $sql) or die(mysqli_error($db));
    // apakah query update berhasil?
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('location;index.php?status=sukses');

    }else{
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal header('location;index.php?status=gagal');
    }
} else {
    die("akses dilarang...");
}

?>