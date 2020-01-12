<?php
include "../db/config.php";
$query = mysqli_query($con, "select count(id) as jumlah from admin");

?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="../img/ubuntu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-text">Total Admin : <?php 
            $jumlah = mysqli_fetch_array($query);
            echo $jumlah['jumlah'] ?> orang</h3>
            </div>
            </div>
        </div>
<br>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="../img/ubuntu2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-text">Barang : </h3>
            </div>
            </div>
        </div>
<br>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="../img/windows.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-text">Carousel</h3>
            </div>
            </div>
        </div>
    </div>
</div>
