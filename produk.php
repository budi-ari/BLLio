<h4 class="produk text-center font-weight-bold m-4" id="produkKami">PRODUK KAMI</h4>
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
                        <p class="card-text "><?php echo $result['brand'];?></p>
                        <br>
                        <a href="# " class="btn btn-primary mt-1 modal-product" data-id="<?php echo $result['id']; ?>"  data-target="#produk1" data-toggle="modal">Detail</a>
                        <!-- <a href="#" class="btn btn-success mt-1">Beli</a> -->
                    </div>
                </div>
            </div>
        <?php }; ?>   
    </div>
</div>
<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body" id="content">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>