<?php 
include "../login/config.php";

if(isset($_POST['nama'])){
$tambah = mysqli_query($con, "Insert into admin(nama, username, password)
                    values ('$_POST[nama]', '$_POST[username]', '$_POST[password]') ");

    if($tambah){
        header('Location: ../halaman_admin.php');
    } else{
        echo"Data gagal di simpan";
    }
}
?>