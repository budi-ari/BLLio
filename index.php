<!doctype html>
<html lang="en" id="beranda">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="produk/produk.html">

    <title>BLLio</title>
</head>

<body>
	<?php
		include "navbar.php";
	?>
    <!-- pembagian kolom -->
    <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light" style="background-color: bisque;">
            <div class="list-group list-group-flush p-1 pt-3">
                <a href="#" class="list-group-item list-group-item-action active font-weight-bold"> <i class="fas fa-list mr-2"></i>KATEGORI PRODUK</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-right"></i> Buku</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-right"></i> IT/Komputer</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-right"></i> Alat Peraga Pendidikan</a>
            </div>
        </div>
        <div class="col-md-10">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel/carousel1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/carousel2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/carousel3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/carousel4.jpg" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <?php
            include "produk.php";
            ?>

            <?php
            include "popup.php";
            ?>            

        </div>
    </div>
    <!-- akhir pembagian kolom -->

    <!-- footer -->
    <footer class="bg-dark text-white ">
        <div class="copyright text-center font-weight-bold bg-dark text-white p-2 mt-3 ">
            <p class="mt-3 "><i class="far fa-copyright "></i> copyright 2019 | Pemrograman Web</p>
        </div>
    </footer>
    <!-- akhir footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://kit.fontawesome.com/85a2f234d7.js " crossorigin="anonymous "></script>

</body>

</html>