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
            <th scope="col">Status Aktif</th>
            <th scope="col">Gambar</th>
            <th scope="col">Opsi</th>
        </thead>
        <tbody>
<!-- data table -->
<?php
            $no=1; 
            while($r=mysqli_fetch_array($tampilCarousel)){
                echo"
                <tr>
                <td>$no</td>
                <td>$r[nm_banner]</td>
                <td>$r[isactive]</td>";?>
                <td> 
                    <img src="../img/banner/<?php echo $r['image'];?>" alt="slide <?php echo $no;?>" style="height: 80px">
                </td>
                
                <td>
                <a href="#">
                <button type='button' class='btn btn-primary'> Ubah </button></a>
                <a href="#">
                <button type='button' class='btn btn-danger'> Hapus </button></a>
                </td>            
                </tr>
                <?php
                $no++;
            }
            ?>

        </tbody>
    </table>
</div>
