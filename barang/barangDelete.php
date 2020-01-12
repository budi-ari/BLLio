<?php 
include "../db/config.php";

if(isset($_GET['id'])){
$hapus = mysqli_query($con, "Delete from product where id= '$_GET[id]'");

    if($hapus){
        //header('Location: ../admin/halaman_admin.php?page=barang');
        echo "<script>alert('Barang dihapus');window.location.href='../admin/halaman_admin.php?page=barang'</script>";
    } else{
        echo"Data gagal dihapus";
    }
}
?>