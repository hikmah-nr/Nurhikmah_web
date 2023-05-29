
<!DOCTYPE html>
<html>  
<head>
    <title>Nur'Hikmah</title>
</head>
<body>

<h1>Daftar Pegawai</h1>

<a href ="tambah.php">Tambah</a>
<br><br>

<table border = "1" cellpadding = "10" cellspacing ="0">

    <tr> 
        <th>No.</th>
        <th>Nama</th>
        <th>Nip</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

   <?php
    include 'koneksi.php';
    $no=1;

    $data=mysqli_query($koneksi, "SELECT * FROM crudpegawai ");
    while($d=mysqli_fetch_array($data)){


    
   ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $d ['nama'];?></td>
        <td><?php echo $d ['nip'];?></td>
        <td><?php echo $d ['no_hp'];?></td>
        <td><?php echo $d ['email'];?></td>
        <td>
            <a href ="edit.php?id=<?php echo $d ['id'];?>">ubah</a> 
            <a href="hapus.php?id=<?php echo $d ['id'];?>">hapus</a>
        </td>  
    </tr>
        <?php
    }
        ?>
</table>
</body>
</html>