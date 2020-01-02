<?php
include "../db/config.php";
$tampilAdmin = mysqli_query($con, "Select * from admin");
?>

<div class="container">
    <h3>Tabel Admin</h3>
    <a href="formTambahAdmin.php">
    <button type="button" class="btn btn-secondary">Tambah Admin</button></a> 
    <form class="form-inline my-2 my-lg-0" method="GET" action="halaman_admin.php">
      <input class="form-control mr-sm-2 mt-sm-1" type="text" name="cari" placeholder="cari" aria-label="cari">
      <button class="btn btn-outline-primary my-2 my-sm-0 mt-sm-1" type="submit" value="cari">Cari</button>      
    </form>
    
    <table class="table mt-2" id="tabelAdmin">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID Admin</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Opsi</th>
        </thead>
        <tbody>
            <?php
            $no=1; 
            while($r=mysqli_fetch_array($tampilAdmin)){
                echo"
                <tr><td>$no</td>
                <td>$r[id]</td>
                <td>$r[nama]</td>
                <td>$r[username]</td>";
                ?>
                <td>
                <a href=<?php echo'formUpdateAdmin.php?id=' . $r['id'] ?>>
                <button type='button' class='btn btn-primary'> Ubah </button></a>
                <a href=<?php echo 'DB_admin/DBDelete.php?id=' . $r['id'] ?>>
                <button type='button' id="hapus" class='btn btn-danger'> Hapus </button></a>
                </td>            
                </tr>
                <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $("#hapus").click(function(){
        
            alert("data admin di hapus")
        

    })
    </script>