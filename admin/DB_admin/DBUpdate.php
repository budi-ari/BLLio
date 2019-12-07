<?php 
include "../login/config.php";

if(isset($_POST['id'])){
$ubah = mysqli_query($con, "Update admin set nama = '$_POST[nama]', username = '$_POST[username]', password = '$_POST[password]'
                            where id='$_POST[id]'");

    if($ubah){
        header('Location: ../halaman_admin.php');
    } else{
        echo"Data gagal di simpan";
    }
}
?>