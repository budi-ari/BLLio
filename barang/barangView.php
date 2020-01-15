<?php
include "../db/config.php";
$tampilBarang = mysqli_query($con, "Select * from product");
?>

<div class="container">
    <h3>Tabel Barang</h3>
    <a href="../barang/barangInsert.php">
    <button type="button" class="btn btn-secondary"><i class="fas fa-plus-square mr-2"></i>Tambah Barang</button></a>
    <form class="form-inline my-2 my-lg-0" method="POST" action="halaman_admin.php?page=barang">
      <input class="form-control mr-sm-2 mt-sm-1" type="text" name="key" placeholder="Cari Barang" aria-label="cari">
      <button class="btn btn-outline-primary my-2 my-sm-0 mt-sm-1" type="submit" name="cariAdmin" value="cari">Cari</button>      
    </form>
    <table class="table mt-2" id="tabelBarang">
        <thead>
            <tr>
            <th class="text-left">No</th>
            <th class="text-left">Gambar</th>
            <th class="text-left">SKU</th>
            <th class="text-left">Nama Barang</th>
            <th class="text-left">Merk</th>
            <th class="text-left">Garansi (bln)</th>
            <th class="text-left">Stock</th>
            <th class="text-left">Deskripsi</th>
            <th class="text-right">Opsi</th>
            <th class="text-left"></th>
        </thead>
        <tbody>
        <!-- datanya nanti disini -->
        <?php    
            if(isset($_POST["key"])){
                $key = $_POST["key"];
                $where = "nm_product like '%$key%' ";
            }else{
                $where =    "1 = 1";

            }
            $halaman = 5;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $result = mysqli_query($con, "SELECT * FROM product where $where");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);            
            $query = mysqli_query($con, "select * from product where $where order by id desc LIMIT $mulai, $halaman");
            $no =$mulai+1;
            //$no=1; 
            while($r=mysqli_fetch_array($query)){
                echo"
                <tr>
                <td>$no</td>";?>
                <td class="text-center"> 
                    <img src="../img/produk/<?php echo $r['image'];?>" alt="gambar <?php echo $no;?>" width="60px">
                </td>
                <td class="text-center"><?php echo $r['sku'] ?></td>
                <td class="text-left"><?php echo $r['nm_product'] ?></td>
                <td class="text-left"><?php echo $r['brand'] ?></td>
                <td class="text-center"><?php echo $r['waranty'] ?></td>
                <td class="text-center"><?php echo $r['stock'] ?></td>
                <td class="text-left"><?php echo $r['description'] ?></td>
                <td class="text-right">
                <a href=<?php echo'../barang/barangEdit.php?id=' . $r['id'] ?>>
                <button type='button' class='btn btn-primary'><i class="fas fa-edit"></i></button></a>
                </td>
                <td class="text-left">
                <a href=<?php echo '../barang/barangDelete.php?id=' . $r['id'] ?>>
                <button onclick="return confirm('Hapus Barang?')" type='button' class='btn btn-danger'><i class="fas fa-trash-alt"></i></button></a>
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
      <li class="page-item"><a class="page-link" href="halaman_admin.php?page=barang&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
  </ul>
</div>