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
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>BLLio-admin</title>
</head>

<body>
    <!-- form login -->
    <section class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
            <form class="form-container" action="DB_admin/DBUpdate.php" method="POST">
            <h3 class="text-center"> Ubah Data Admin</h3>    
                
                <?php include "login/config.php";
 
                if(isset($_GET['id'])){ 
                    $sql=mysqli_query($con, "select * from admin where id ='$_GET[id]'");
                    $r=mysqli_fetch_array($sql);
                    ?>

                    <div class="form-group">                    
                    <label for="kode">ID Admin</label>
                    <input type="text" name="id" class="form-control" id="kode" placeholder="ID Admin"
                    value=<?php echo $r['id'];?> readonly>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama"
                    value=<?php echo $r['nama'];?>>
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                    value=<?php echo $r['username'];?>>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        value=<?php echo $r['password'];?>>
                        <small id="emailHelp" class="form-text text-muted">Jangan Lupakan Password Anda!</small>
                    </div>
                    <div class="text-center">
                        <a href="halaman_admin.php?page=admin"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>
                    <button type="submit" id="ubah" class="btn btn-primary">Ubah</button>
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