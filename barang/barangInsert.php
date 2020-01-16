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
            <div>
                <form class="form-container" action="barangDBInsert.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <h3 class="text-center"> Tambah Barang</h3>
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" required class="form-control" id="sku" placeholder="SKU">
                    <br>
                    <label for="gambar">Pilih Gambar</label>
                    <input type="file" name="gambar" id="gambar">
                    <br>
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" required class="form-control" id="nama" placeholder="Nama Produk">
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" required class="form-control" id="brand" placeholder="Brand">
                    <label for="waranty">Garansi (bulan)</label>
                    <input type="text" name="waranty" required class="form-control" id="waranty" placeholder="Garansi">
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" required class="form-control" id="stok" placeholder="Stock">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" required name="description" id="description" rows="3"></textarea>
                    </div>

                    <div class="text-center">
                        <a href="../admin/halaman_admin.php?page=barang"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Tambah</button>
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