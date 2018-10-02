<form action="prosesregris.php" method="POST">
	<html>
<head>
<title>Daftar</title>
</head>

<body>
<center>
<h2>Pendaftaran Mahasiswa</h2>

<table>
<tr>
    <td>Nim</td>
    <td>:
    <input type="text"></td>
</tr>

<tr>
    <td>Nama</td>
    <td>:
    <input type="text"></td>
</tr>

<tr>
<td height="26">Email</td>
      <td>:
          <input name="text" type="Email" id="email" />
      </td>
</tr>

<tr>
    <td><center><input type="submit" name="submit" value="Save"></td>
    <td><input type="reset" name="reset" value="Reset"></td>
</tr>

</table>
</center>
</body>
</html>  

<?php
if(isset($_POST['submit'])){
	$nim = $_POST['Nim'];
	$nama = $_POST['Nama'];
	$email = $_POST['Email'];
	$error = array();

	if(strlen($_POST['Nim']) <= 10){
	}
	else{
		$error['Nim']=="Nim Harus 10 Karakter";
	}
	if(strlen($_POST['Nama']) <= 25){
	}
	else{
		$error['Nama']=="Nama Harus 25 Karakter";
	}
	if(empty($_POST['Email'])){

	}
	else{
		$error['Email']=="Email Harus Terisi";
	}

	}
		include "koneksi.php";
	$sql = "INSERT INTO Pendaftaran Mahasiswa where Nim='".$nim."',  Nama='".$nama."', Email='".$email."'";
	mysqli_query($con, $sql);

	if(mysql_query($con, $sql)){
		echo "Database Sukses";
	}
	else{
		echo "ERROR";
	}

	?>
