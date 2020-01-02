<?php
include "../db/config.php";
$tampilBarang = mysqli_query($con, "Select * from product");
?>

<div class="container">
    <h3>Tabel Barang</h3>
    <a href="../barang/barangInsert.php">
    <button type="button" class="btn btn-secondary">Tambah Barang</button></a>
    <form class="form-inline my-2 my-lg-0" method="GET" action="barangView.php">
      <input class="form-control mr-sm-2 mt-sm-1" type="text" name="cari" placeholder="cari" aria-label="cari">
      <button class="btn btn-outline-primary my-2 my-sm-0 mt-sm-1" type="submit" id="cari">Cari</button>      
    </form>
    <table class="table mt-2" id="tabelBarang">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">SKU</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Merk</th>
            <th scope="col">Garansi (bln)</th>
            <th scope="col">Stock</th>
            <th scope="col">Opsi</th>
        </thead>
        <tbody>
        <!-- datanya nanti disini -->
        <?php
            $no=1; 
            while($r=mysqli_fetch_array($tampilBarang)){
                echo"
                <tr>
                <td>$no</td>
                <td>$r[sku]</td>
                <td>$r[nm_product]</td>
                <td>$r[brand]</td>
                <td>$r[waranty]</td>
                <td>$r[stock]</td>";?>
                
                <td>
                <a href=<?php echo'../barang/barangEdit.php?id=' . $r['id'] ?>>
                <button type='button' class='btn btn-primary'> Ubah </button></a>
                <a href=<?php echo '../barang/barangDelete.php?id=' . $r['id'] ?>>
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
