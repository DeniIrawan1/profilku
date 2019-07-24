<?php
include("config.php");
if (isset($_get['nis'])){
    $title = "edit";
    $url = 'proses_edit.php';
    $id = $_get['nis'];
    //buat query untuk ambil data dari database
    $sql = "select * from t_siswa where nis = $id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);
    //jika data yang di edit tidak ditemukan
    if (mysqli_num_rows($query) < 1){
        die ("data tidak ditemukan...";
    }
    //url jika edit data
}else{
    $title = "add";
    //url jika tambah data
    $url ='proses_pendaftaran.php';
}
?>
<html>
    <head><title>formulir siswa</title></head>
    <body>
        <header><h3>formulir siswa</h3></header>
        <form action = "proses_pendaftran.php" method = "post">
            <fieldset>
                <legend><h2>form siswa</h2></legend>
                <div>
                    <label for = 'nis'>nis: </label><br>
                    <input type ="text" nama = "nis" value ="<?php if (isset($_get['nis'])){ echo $siswa['nis'];}?>"/>
</div>
<div>
    <label for = 'nama'>nama: </label><br>
    <input type = "text" nama = "nama_lengkap" value ="<?php if (isset($_get['nis'])){ echo $siswa['nama_lengkap'];}?>'/>
</div>
<div>
    <lebel for = 'alamat'>alamat: </label><br>
    <textarea nama = "alamat" row ="5" ="<?php if (isset($_get['nis'])){ echo $siswa['alamat'];}?>c</textarea>
</div>
<div>
    <label for ="jenis_kelamin">jenis kelamin: </label><br>
    <?php if(isset($_get['nis'])){$jk = $siswa['jenis_kelamin'];?>
    <td>
        <input name= "jenis_kelamin" type = "radio" value="laki_laki"
        <?php if($jk=='laki_laki'){echo 'cheked';}?>>laki_laki
        <input name="jenis_kelamin" type = "radio" value="perempuan"
        <?php if($jk=='perempuan'){echo'checked';}?>>perempuan</td>
    <?php }else{?>
    <td><br>
<input name ="jenis_kelamin" type = "radio" value = "laki_laki">laki_laki
<input name = "jenis_kelamin" type = "radio" value = "perempuan">perempuan
    </td>
    <?php } ?>
    </div>
    <div>
        <label for = "no_telp">no telepon: <label><br>
        <input type ="text" name = "no_telp" value ="<?php if(isset($_get['nis']))
        { echo $siswa['no_telp'];} ?>" />
        </div>
        <div>
        <label for = "kelas">kelas: <label><br>
        <input type ="text" name = "kelas" value ="<?php if(isset($_get['nis' ]))
        { echo $siswa['kelas'];}?>" />
        </div>
        <hr>
        <div>
        <input type = "submit" value = "simpan" name = "simpan"/>
        </div>
        </fieldset
        </form>
        </body>
        </html>


        }     