<?php
$id = $_REQUEST["id"];
include "db/config.php";

$sql = mysqli_query($con, "select * from product where id='$id'");
$row = mysqli_fetch_array($sql);
?>
<!-- pop up detail -->
<div class="row">
    <div class="col-md-6 ">
    <img src="img/produk/<?php echo $row['image'];?>" class="card-img-top " id="imgproduct" width="10px">
    </div>
    <div class="col-md-6 ">
        <table class="table table-borderless">
            <tr>
                <th>Nama Produk</th>
                <td><?php echo $row['nm_product'];?></td>
            </tr>
            <tr>
                <th>Merk/Type</th>
                <td><?php echo $row['brand'];?></td>
            </tr>
            <tr>
                <th>Garansi</th>
                <td><?php echo $row['waranty'];?> bulan</td>
            </tr>
            <tr>
                <th>Stok Produk</th>
                <td><?php echo $row['stock'];?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?php echo $row['description'];?></td>
            </tr>
        </table>
    </div>
</div>
            <!-- akhir pop up detail -->