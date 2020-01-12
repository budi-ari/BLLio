<?php 
include "../db/config.php";

if(isset($_GET['id'])){
$hapus = mysqli_query($con, "Delete from web_banner where id= '$_GET[id]'");

    if($hapus){
//        header('Location: ../admin/halaman_admin.php?page=carousel');
        echo "<script>alert('Carousel dihapus');window.location.href='../admin/halaman_admin.php?page=carousel'</script>";
    } else{
        echo"Data gagal dihapus";
    }
}
?>