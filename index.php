<?php include('config.php');?>
<html>
    <head><title>data siswa</title></head>
    <body>
        <header><h3><daftar siswa</h3></header>
        <nav><a href="v_from.php"><button>tambah baru</button></a></nav>
        <br>
        <table border ="1" cellpadding = "8">
            <thread>
                <tr>
                    <th>NIS</th>
                    <th>nama</th>
                    <th>Alamat</th>
                    <th>jenis kelamin</th>
                    <th>no telopon</th>
                    <th>kelas</th>
                    <th>tindakan</th>
</tr>
</thread>
<tbody>
    <?php
    $sql = "select *from t_siswa";
    $squeey = mysqli_query($db, $sql);
    while($siswa = nysqli_fetch_array($query)){
        echo "<tr";
        echo "<td>".$siswa['nis']."</td>";
        echo "<td>".$siswa['nama_lengkap']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['no_telp']."</td>";
        echo "<td>".$siswa['kelas']."</td>";
        echo "<td>";
        echo "<a href= 'v_from.php?nis=".$siswa['nis']."'>edit</a> | ";
        echo "<a href= 'v_hapus.php?nis=".$siswa['nis']."'>hapus</a>";
        echo "</td>";
        echo ",/tr>";

    }
    ?>
    </tbody>
</table>
<p>total:
    <<?php echo mysqli_num_rows($query) ?>
</p>
</body>
</html>
    