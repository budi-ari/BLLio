<?php
include "../db/config.php";
$tampilAdmin = mysqli_query($con, "Select * from admin");
?>

<div class="container">
    <h3>Tabel Admin</h3>
    <a href="formTambahAdmin.php">
    <button type="button" class="btn btn-secondary">Tambah Admin</button></a> 
    <form class="form-inline my-2 my-lg-0" method="POST" action="halaman_admin.php?page=admin">
      <input class="form-control mr-sm-2 mt-sm-1" type="text" name="key" placeholder="Cari Admin" aria-label="cari">
      <button class="btn btn-outline-primary my-2 my-sm-0 mt-sm-1" type="submit" name="cariAdmin" value="cari">Cari</button>      
    </form>
    
    

    <table class="table mt-2" id="tabelAdmin">
        <thead>
            <tr>
            <th class="text-center">No</th>
            <th class="text-center">ID Admin</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Username</th>
            <th class="text-right">Opsi</th>
            <th class="text-left"> </th>
        </thead>
        <tbody>
            <?php
            $halaman = 5;      
            if(isset($_POST["key"])){
                $key = $_POST["key"];
                $where = "nama like '%$key%' ";
            }else{
                $where =    "1 = 1";

            }
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $result = mysqli_query($con, "SELECT * FROM admin where $where");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);  
            $query = mysqli_query($con, "select * from admin where $where order by id desc LIMIT $mulai, $halaman");
            $no =$mulai+1;
            //$no=1; 
            //while($r=mysqli_fetch_array($tampilAdmin)){
                while($r=mysqli_fetch_array($query)){?>

                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $r['id'] ?></td>
                    <td class="text-center"><?php echo $r['nama'] ?></td>
                    <td class="text-center"><?php echo $r['username'] ?></td>
                    <td class="text-center">
                    <a href=<?php echo'formUpdateAdmin.php?id=' . $r['id'] ?>>
                    <button type='button' class='btn btn-primary'> Ubah </button></a>
                    </td>
                    <td class="text-left">
                    <a>
                    <?php
                    if($_SESSION["session_nama"] == $r['nama']){
                        echo"Anda Sedang Login";
                    }
                    else{ ?>
                        <a href=<?php echo 'DB_admin/DBDelete.php?id=' . $r['id'] ?>>
                        <button onclick="return confirm('Hapus Admin?')" type='button' id='hapus' class='btn btn-danger'>Hapus</button> </a>
                        
                    <?php
                    }
                    ?>
                    </a>
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
      <li class="page-item"><a class="page-link" href="halaman_admin.php?page=admin&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
  </ul>
</div>
