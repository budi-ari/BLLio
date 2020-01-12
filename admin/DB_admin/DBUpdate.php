<?php 
include "../login/config.php";

if(isset($_POST['id'])){
$ubah = mysqli_query($con, "Update admin set id = '$_POST[id]', nama = '$_POST[nama]', username = '$_POST[username]', password = '$_POST[password]'
                            where id = '$_POST[id]'");

    if($ubah){
        //header('Location: ../halaman_admin.php?page=admin');
        echo "<script>alert('Admin diubah');window.location.href='../halaman_admin.php?page=admin'</script>";
    } else{
        echo"Data gagal di simpan";
    }
}
?>