<?php 
include "../login/config.php";

if(isset($_GET['id'])){
$hapus = mysqli_query($con, "Delete from admin where id= '$_GET[id]'");

    if($hapus){
        header('Location: ../halaman_admin.php');
    } else{
        echo"Data gagal dihapus";
    }
}
?>