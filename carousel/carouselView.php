<?php
include "../db/config.php";
$tampilCarousel = mysqli_query($con, "Select * from web_banner");
?>

<div class="container">
    <h3>Tabel Carousel</h3>
    <a href="../carousel/carouselUpload.php">
    <button type="button" class="btn btn-secondary">Tambah Carousel</button></a>
    <!-- <form class="form-inline my-2 my-lg-0" method="GET" action="">
      <input class="form-control mr-sm-2 mt-sm-1" type="text" name="cari" placeholder="cari" aria-label="cari">
      <button class="btn btn-outline-primary my-2 my-sm-0 mt-sm-1" type="submit" id="cari">Cari</button>      
    </form> -->
    <table class="table mt-2" id="tabelCarousel">
        <thead>
            <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Status Aktif</th>
            <th class="text-center">Gambar</th>
            <th class="text-right">Opsi</th>
            <th class="text-center"> </th>
        </thead>
        <tbody>
<!-- data table -->
            <?php
            $halaman = 5;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $result = mysqli_query($con, "SELECT * FROM web_banner");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);            
            $query = mysqli_query($con, "select * from web_banner order by id desc LIMIT $mulai, $halaman");
            $no =$mulai+1;
            //$no=1; 
            while($r=mysqli_fetch_array($query)){
                echo"
                <tr>
                <td>$no</td>";?>
                <td class="text-center"><?php echo $r['nm_banner'] ?></td>
                <td class="text-center"><?php echo $r['isactive'] ?></td>
                <td class="text-center"> 
                    <img src="../img/banner/<?php echo $r['image'];?>" alt="slide <?php echo $no;?>" style="height: 80px">
                </td>
                <td class="text-center">
                <a href=<?php echo'../carousel/carouselEdit.php?id=' . $r['id'] ?>>
                <button type='button' class='btn btn-primary'> Ubah </button></a>
                </td>
                <td class="text-left">
                <a href=<?php echo '../carousel/carouselDelete.php?id=' . $r['id'] ?>>
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

<div aria-label="Page navigation">
    <ul class="pagination justify-content-center">
    <?php for ($i=1; $i<=$pages ; $i++){ ?>
      <li class="page-item"><a class="page-link" href="halaman_admin.php?page=carousel&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
  </ul>
</div>