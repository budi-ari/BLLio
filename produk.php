<h4 class="produk text-center font-weight-bold m-4" id="produkKami">PRODUK KAMI</h4>
<!-- baris produk 1 -->
<!-- <div class="container" id="listproduct">
    <div class="row mx-auto">
        <div class="card mr-2 ml-2" style="width: 14rem;">
            <img src="img/produk/vakumLaptop.jpg" class="card-img-top ">
            <div class="card-body bg-light ">
                <h5 class="card-title ">Vakum Laptop</h5>
                <p class="card-text ">Vakum pendingin laptop</p>

                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star-half-alt "></i>
                <i class="far fa-star "></i><br>
                <a href="# " class="btn btn-primary mt-1" data-target="#produk1" data-toggle="modal">Detail</a>
                <a href="#" class="btn btn-success mt-1">Beli</a>
            </div>
        </div>
        <div class="card mr-2 ml-2 " style="width: 14rem; ">
            <img src="img/produk/headphone.jpg" class="card-img-top ">
            <div class="card-body bg-light ">
                <h5 class="card-title ">Headphone</h5>
                <p class="card-text ">Headphone kekinian</p>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="fas fa-star "></i>
                <i class="far fa-star "></i><br>
                <a href="# " class="btn btn-primary mt-1" data-target="#produk2" data-toggle="modal">Detail</a>
                <a href="# " class="btn btn-success mt-1 ">Beli</a>
            </div>
        </div>-->

<!--baris produk 1 -->
<?php
include "db/config.php";
$sql =  "select * from product";
$viewProduct = mysqli_query($con, $sql);
?>


<div id="listproduct">
    <!-- <h4 class="produk text-center font-weight-bold mb-5" id="produkKami">PRODUK KAMI</h4> -->
    <div class="row mx-auto rowproduct">
        <?php
        while ($result = mysqli_fetch_array($viewProduct)) {
        ?>
            <div class="col">
                <div class="card m-2" style="width: 14rem;">
                    <img src="img/produk/<?php echo $result['image'];?>" class="card-img-top " id="imgproduct">
                    <div class="card-body bg-light ">
                        <h5 class="card-title "><?php echo $result['nm_product'];?></h5>
                        <p class="card-text "><?php echo $result['description'];?></p>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                        <i class="far fa-star "></i><br>
                        <a href="# " class="btn btn-primary mt-1" data-target="#produk1" data-toggle="modal">Detail</a>
                        <!-- <a href="#" class="btn btn-success mt-1">Beli</a> -->
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>
