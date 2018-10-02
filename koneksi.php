<?php
 $hostname ="localhost";
 $username = "root";
 $pass     = "";
 $db       = "Pendaftaran Mahasiswa";
 $con     = new mysqli($hostname, $username, $pass, $db);
 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nim=$_POST['Nim'];
   $nama=$_POST['Nama'];
   $email=md5($_POST['Email']);
 
 $sql="INSERT INTO Pendaftaran Mahasiswa(Nim,Nama,Email) VALUES ('$nim','$nama','$email')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
   }
   else{
    echo "error";
   }
}
 ?>