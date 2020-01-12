<?php 
session_start();
include "login/config.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "select * from admin where username = '$username' and password = '$password'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

if($row["username"] == $username and $password == $row["password"] ){
	$_SESSION["session_username"] = $row["username"];
	$_SESSION["session_password"] = $row["password"];
	$_SESSION["session_nama"] = $row["nama"];
	echo "<script>alert('Login Berhasil');window.location.href='halaman_admin.php'</script>";

    //header("Location: halaman_admin.php");
    //header("Location: ../index.php");
}else{
	echo "<script>alert('Login Gagal, Username atau Password salah');window.location.href='index.php'</script>";
	//header("Location: index.php");
}
?>