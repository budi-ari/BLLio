<?php 
include "../login/config.php";

if(isset($_POST['nama'])){
$ubah = mysqli_query($con, "Update admin set nama = '$_POST[nama]', username = '$_POST[username]', password = '$_POST[password]'
                            where nama = '$_POST[nama]'");

    if($ubah){
        header('Location: ../halaman_admin.php');
    } else{
        echo"Data gagal di simpan";
    }
}
?>