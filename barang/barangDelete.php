<?php 
include "../db/config.php";

if(isset($_GET['id'])){
$hapus = mysqli_query($con, "Delete from product where id= '$_GET[id]'");

    if($hapus){
        header('Location: ../admin/halaman_admin.php');
    } else{
        echo"Data gagal dihapus";
    }
}
?>