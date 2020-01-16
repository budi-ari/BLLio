<?php include "carouselDB.php";?>
<!doctype html>
<html lang="en" id="beranda">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLLio-admin</title>
    <link rel="shortcut icon" href="../img/icon/favicon-32x32.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../admin/login.css">

    <title>BLLio-admin</title>
</head>

<body>
    <!-- form login -->
    <section class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form-container" action="carouselDB.php" method="POST" enctype="multipart/form-data">
                    <h3 class="text-center">Upload Carousel</h3>
                    <div class="form-group">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td> <input type="text" required placeholder="isikan nama Carousel" name="nm_banner"/> </td>
                            </tr>
                            <tr>
                                <td>Pilih Gambar</td>
                                <td> <input type="file" name="gambar"/> 
                                <small>Ukuran ideal 1110x450</small>    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-center">
                                    <button type="submit" id="submit" name="submit">submit</button>
                                    </div>
                                    <a href="../admin/halaman_admin.php?page=carousel"><button type="button">Batal</button></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
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