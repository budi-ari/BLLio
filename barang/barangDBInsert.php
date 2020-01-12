<?php 
include('../db/config.php');
$target_dir = "../img/produk    /";


// if(isset($_POST['sku'])){
// $tambah = mysqli_query($con, "Insert into product(sku, gambar, nm_product, brand, waranty, stock, description)
//                     values ('$_POST[sku]', '$_POST[gambar]', '$_POST[nama]', '$_POST[brand]', '$_POST[waranty]', '$_POST[stock]', '$_POST[description]') ");

//     if($tambah){
//         header('location:../admin/halaman_admin.php');
//     } else{
//         echo"Data gagal di simpan";
//     }
// }

if (isset($_POST['submit'])) {
    if (!isset($_FILES['gambar']['tmp_name'])) {
        echo "<script>alert('GAMBAR BELUM DIPILIH !');history.go(-1);</script>";
    } else {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];


        if ($file_size < 200000 && ($file_type == 'image/jpeg' || $file_type == 'image/png')) {
            
            $sql = "insert into product(sku, image, size, type, nm_product, brand, waranty, stock, description) 
            values('$_POST[sku]', '$file_name', '$file_size', '$file_type', '$_POST[nama]', '$_POST[brand]', '$_POST[waranty]', '$_POST[stock]', '$_POST[description]') ";
            $query = mysqli_query($con, $sql);
            if($query){
                move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_dir.$_FILES['gambar']['name']);
                //header("location:../admin/halaman_admin.php?page=barang");
                echo "<script>alert('Insert Barang Berhasil');window.location.href='../admin/halaman_admin.php?page=barang'</script>";
            }
            else{
                
                echo "<script>alert('Insert gagal, SKU sudah ada');history.go(-1);</script>";
            }

        } else {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>