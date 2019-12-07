<?php
include "../db/config.php";
$tampilAdmin = mysqli_query($con, "Select * from admin");
?>

<div class="container">
    <h3>Tabel Admin</h3>
    <a href="formTambahAdmin.php">
    <button type="button" class="btn btn-secondary">Tambah Admin</button></a>
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
                <button type='button' class='btn btn-primary'> Edit </button></a>
                <a href=<?php echo 'DB_admin/DBDelete.php?id=' . $r['id'] ?>>
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
