<?php 
    include "../db/config.php";
    //echo"Data disimpan";
    if(isset($_POST['sku'])){
    $ubah = mysqli_query($con, "Update product set sku = '$_POST[sku]', nm_product = '$_POST[nama]', brand = '$_POST[brand]', 
                                waranty = '$_POST[waranty]', stock = '$_POST[stock]', description = '$_POST[description]' where sku = '$_POST[sku]'");

        if($ubah){
            //header('Location: ../admin/halaman_admin.php?page=barang');
            echo "<script>alert('Barang diubah');window.location.href='../admin/halaman_admin.php?page=barang'</script>";
        } else{
            echo"Data gagal di ubah";
        }
    }
    ?>