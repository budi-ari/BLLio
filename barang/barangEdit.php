<!doctype html>
<html lang="en" id="beranda">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLLio-barang</title>
    <link rel="shortcut icon" href="../img/favicon-32x32.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../admin/login.css">


</head>

<body>
    <!-- form login -->
    <section class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form-container" action="barangDBEdit.php" method="POST">
                    <div class="form-group">
                    <h3 class="text-center"> Ubah Data Barang</h3>

                    <?php include "../db/config.php"; 
                    if(isset($_GET['id'])){ 
                        $sql=mysqli_query($con, "select * from product where id ='$_GET[id]'");
                        $r=mysqli_fetch_array($sql);
                    ?>

                    <label for="gambar">Gambar</label> <br>
                    <img src="../img/produk/<?php echo $r['image'];?>" alt="slide <?php echo $no;?>" style="height: 150px">
                    <br>
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" class="form-control" id="sku" value=<?php echo $r['sku'];?> readonly>
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" id="nama" value=<?php echo $r['nm_product'];?>>
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" class="form-control" id="brand" value=<?php echo $r['brand'];?>>
                    <label for="waranty">Garansi</label>
                    <input type="text" name="waranty" class="form-control" id="waranty" value=<?php echo $r['waranty'];?>>
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" class="form-control" id="stock" value=<?php echo $r['stock'];?>>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?php echo $r['description'];?></textarea>
                    </div>

                    <div class="text-center">
                        <a href="../admin/halaman_admin.php?page=barang"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
            <?php 
                }
                ?>
            <div class="col-md-4"></div>
        </div>    
    </section>
    <!-- akhir form login -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://kit.fontawesome.com/85a2f234d7.js " crossorigin="anonymous "></script>

</body>

</html>