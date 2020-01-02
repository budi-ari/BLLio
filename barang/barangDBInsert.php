<?php 
include "../db/config.php";

if(isset($_POST['sku'])){
$tambah = mysqli_query($con, "Insert into product(sku, nm_product, brand, waranty, stock, description)
                    values ('$_POST[sku]', '$_POST[nama]', '$_POST[brand]', '$_POST[waranty]', '$_POST[stock]', '$_POST[Description]') ");

    if($tambah){
        header('location:../admin/halaman_admin.php');
    } else{
        echo"Data gagal di simpan";
    }
}
?>