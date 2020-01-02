<?php 
    include "../db/config.php";
    //echo"Data disimpan";
    if(isset($_POST['sku'])){
    $ubah = mysqli_query($con, "Update product set sku = '$_POST[sku]', nm_product = '$_POST[nama]', brand = '$_POST[brand]', 
                                waranty = '$_POST[waranty]', stock = '$_POST[stock]' where sku = '$_POST[sku]'");

        if($ubah){
            header('Location: ../admin/halaman_admin.php');
            
        } else{
            echo"Data gagal di simpan";
        }
    }
    ?>