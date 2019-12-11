<?php
include "db/config.php";
$tampilCarousel = mysqli_query($con, "Select * from web_banner");
?>

<div class="container">
    <h3>Tabel Carousel</h3>
    <a href="../carouselUpload.php">
    <button type="button" class="btn btn-secondary">Tambah Carousel</button></a>
    <table class="table mt-2" id="tabelCarousel">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Type</th>
            <th scope="col">Gambar</th>
            <th scope="col">Opsi</th>
        </thead>
        <tbody>
<!-- data table -->

        </tbody>
    </table>
</div>
