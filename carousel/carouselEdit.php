<!doctype html>
<html lang="en" id="beranda">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLLio-admin</title>
    <link rel="shortcut icon" href="../img/favicon-32x32.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../admin/login.css">

    <title>BLLio-carousel</title>
</head>

<body>

    <!-- form login -->
    <section class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
            <form class="form-container" action="carouselDBEdit.php" method="POST">
            <h3 class="text-center"> Ubah Data Carousel</h3>    
                
                <?php include "../db/config.php";
 
                if(isset($_GET['id'])){ 
                    $sql=mysqli_query($con, "select * from web_banner where id ='$_GET[id]'");
                    $r=mysqli_fetch_array($sql);
                    ?>

                    <div class="form-group">                    
                    <label for="kode">ID Carousel</label>
                    <input type="text" name="id" class="form-control" id="id"
                    value=<?php echo $r['id'];?> readonly>
                    <label for="nama">Nama Carousel</label>
                    <input type="text" name="nama" class="form-control" id="nama" 
                    value=<?php echo $r['nm_banner'];?>>
                    <label for="gambar">Gambar</label> <br>
                    <img src="../img/banner/<?php echo $r['image'];?>" alt="slide <?php echo $no;?>" style="height: 100px">
                    </div>
                    <div class="text-center">
                        <a href="../admin/halaman_admin.php"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
                <?php 
                }
                ?>
            <div class="col-md-3"></div>
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