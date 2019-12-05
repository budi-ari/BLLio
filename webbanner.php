<?php
include('db/config.php');
if (isset($_POST['submit']) ) {
    if (!isset($_FILES['image']['tmp_img'])) {
        echo '<span style= "color:red"><b><u> <i> PILIH FILE GAMBAR!</i> </u> </b> </span>';
    } else {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];

        if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png') ) {
            $image =  addslashes(file_get_contents($_FILES['image'][tmp_img]));
            $sql = ;
            mysqli_query($con,$sql);
        } else {
            # code...
        }
        
    }
    

} else {
    # code...
}


?>


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
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama</td>
                <td> <input type="text" placeholder="isikan nama banner" name="name"> </td>
            </tr>
            <tr>
                <td>Pilih Gambar</td>
                <td> <input type="file" name="image" required /> </td>
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

</html>