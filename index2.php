<!DOCTYPE html>
<html lang="en" id="beranda">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLLio - Tampilan User</title>
    <link rel="shortcut icon" href="img/icon/favicon-32x32.png" type="image/png">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <?php
    include "navbar2.php";
    ?>
    <div class="container" id="contenthome">
        <?php
        include "carousel/carousel.php";
        ?>
        <?php
        include "produk.php";
        ?>
        <?php
        //include "popup.php";
        ?>
    </div>

    <!-- footer -->
    <footer>
        <div class="copyright text-center font-weight-bold text-white p-2 mt-3 ">
            <p class="mt-3 "><i class="far fa-copyright "></i> copyright 2019 | Pemrograman Web</p>
        </div>
    </footer>
    <!-- akhir footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://kit.fontawesome.com/85a2f234d7.js " crossorigin="anonymous "></script>
    

    <script>
$(".modal-product").click(function (){
    id = $(this).attr("data-id");
    $(".modal-body").load("popup.php?id="+id);
})
</script>

</body>

</html>