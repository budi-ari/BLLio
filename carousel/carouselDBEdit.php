<?php 
    include "../db/config.php";
    //echo"Data disimpan";
    if(isset($_POST['id'])){
    $ubah = mysqli_query($con, "Update web_banner set id = '$_POST[id]', nm_banner = '$_POST[nama]' where id = '$_POST[id]'");

        if($ubah){
            //header('Location: ../admin/halaman_admin.php?page=carousel');
            echo "<script>alert('Carousel diubah');window.location.href='../admin/halaman_admin.php?page=carousel'</script>";
        } else{
            echo"Data gagal di simpan";
        }
    }
    ?>