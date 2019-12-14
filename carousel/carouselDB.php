<?php
include('../db/config.php');
$target_dir = "../img/banner/";
// $target_file = $target_dir . $_FILES['gambar']['name'];

if (isset($_POST['submit'])) {
    if (!isset($_FILES['gambar']['tmp_name'])) {
        // echo '<span style= "color:red"><b><u> <i> PILIH FILE GAMBAR!</i> </u> </b> </span>';
        echo "<script>alert('GAMBAR BELUM DIPILIH !');history.go(-1);</script>";
    } else {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];


        if ($file_size < 200000 && ($file_type == 'image/jpeg' || $file_type == 'image/png')) {
            $nm_banner = $_POST['nm_banner'];
            $desc = $_POST['desc'];
            $sql = "insert into web_banner(nm_banner, image, size, type, isactive) 
            values('$nm_banner', '$file_name', '$file_size', '$file_type', '1') ";
            mysqli_query($con, $sql);
            move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_dir.$_FILES['gambar']['name']);
            header("location:../admin/halaman_admin.php");
            echo "<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
        } else {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}


// ini sudah fix, untuk upload image banner
?>


