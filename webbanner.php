<?php include "uploadBanner.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Banner</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css"> -->
</head>

<body>
    <form method="POST" action="uploadBanner.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama</td>
                <td> <input type="text" placeholder="isikan nama banner" name="nm_banner"/> </td>
            </tr>
            <tr>
                <td>Pilih Gambar</td>
                <td> <input type="file" name="gambar"/> </td>
            </tr>
            <tr>
                <td>Descriptions</td>
                <td><textarea name="desc" id="" cols="20" rows="3"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button type="submit" name="submit">sumbit</button>
                    </center>
                </td>
            </tr>
        </table>
    </form>

</body>


<!-- hanya contoh form yang bisa di masukan ke halaman admin.
yang paling di perhatikan adalah pada tag "<form></form>" -->
</html>