<!DOCTYPE html>
<html>
<head>
	<title>Nur'hikmah</title>
</head>
<body>
 
	<h2>DAFTAR DATA PEGAWAI</h2>
	<br/>
	<br/>
	<br/>
	<h3>EDIT DATA PEGAWAI</h3>
 



    <?php
    include 'koneksi.php';
$id= $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM crudpegawai WHERE id ='$id'");
while($pegawai = mysqli_fetch_array($result)){
   

?>

    

    <form name="update_data" action ="update.php" method = "post">
        <table>
           <tr>
                
                <td><label for="nama">Nama : </label></td>
                <input type = "hidden" name= "id" id="id" value = "<?php echo $pegawai['id'];?>">
                <td><input type ="text" name ="nama" id="nama"
                required
                value="<?php echo $pegawai ["nama"]; ?>"></td>
            </tr>
          <tr>
                <td><label for="nip">NIP : </label></td>
                <td><input type ="text" name ="nip" id="nip"
                required
                value="<?php echo $pegawai ["nip"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="no_hp">No Hp : </label></td>
                <td><input type ="text" name ="no_hp" id="no_hp"
                required
                value="<?php echo $pegawai ["no_hp"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email : </label></td>
                <td><input type ="text" name ="email" id="email"
                required
                value="<?php echo $pegawai ["email"]; ?>"></td>
            </tr>
               
              <input type="submit"  value="ubah data">
            
    </table>
    </from>

</body>
</html>

		</form>
		<?php 
	}
	?>
 
</body>
</html>