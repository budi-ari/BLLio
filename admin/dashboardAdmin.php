<?php
include "../db/config.php";
$admin = mysqli_query($con, "select count(id) as jumlah from admin");
$barang = mysqli_query($con, "select count(*) as produk from product");
$carousel = mysqli_query($con, "select count(*) as carousel from web_banner");
?>

<div class="container">
    <div class="row mx-auto">
        <div class="col">
            <div class="card m-2" style="width: 18rem;">
            <img src="../img/icon/boss.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-text">Admin : <?php 
            $jumlah = mysqli_fetch_array($admin);
            echo $jumlah['jumlah'] ?> orang</h3>
            </div>
            </div>
        </div>
    <br>
        <div class="col">
            <div class="card m-2" style="width: 18rem;">
            <img src="../img/icon/box.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-text">Barang : <?php 
            $jumlah = mysqli_fetch_array($barang);
            echo $jumlah['produk'] ?> unit</h3>
            </div>
            </div>
        </div>
    <br>
        <div class="col">
            <div class="card m-2" style="width: 18rem;">
            <img src="../img/icon/ui.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-text">Carousel : <?php 
            $jumlah = mysqli_fetch_array($carousel);
            echo $jumlah['carousel'] ?> unit</h3>
            </div>
            </div>
        </div>
    </div>
</div>


