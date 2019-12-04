<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>BLLio - Admin</title>
</head>

<body>
   <!-- navbar -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:lightgray">
        <div class="container">
            <h3><i class="fas fa-shopping-bag text-dark mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#beranda">
                <img src="../img/bllio.png" alt="logo-bllio" style="width:80px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ubah <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Lihat Halaman User <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="icon mt-2 ml-3">
                    <h5>
                    <a href="login/logout.php" class="logout"><i class="fas fa-sign-out-alt text-dark ml-3" href="" data-toggle="tootip" title="Logout">
                    <?php
                    include "login/cek_login.php";
                    echo $_SESSION["session_nama"];
                    ?>
                    </i></a>
                    </h5>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!--pembagian kolom data -->
    <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light" style="backgroung-color: bisque;">
            <div class="list-group list-group-flush p-1 pt-3">    
                <a href="#" class="list-group-item list-group-item-action active font-weight-bold"> <i class="fas fa-list mr-2"></i>OPSI ADMIN</a>
                <a href="login/tambah_admin.php" class="list-group-item list-group-item-action"><i class="fas fa-angle-right"></i> Tambah</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-right"></i> Ubah</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-right"></i> Hapus</a>
            </div>
        </div>

        <div class="col-md-10">
        <!--nanti isinya database ada di sini semua -->
        </div>
    </div>
        <!-- akhir pembagian kolom data -->

    <!-- footer -->
    <footer class="bg-dark text-white ">
        <div class="copyright text-center font-weight-bold bg-dark text-white p-2 mt-3 ">
            <p class="mt-3 "><i class="far fa-copyright "></i> copyright 2019 | Pemrograman Web</p>
        </div>
    </footer>
    <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/85a2f234d7.js " crossorigin="anonymous "></script>
</body>

</html>