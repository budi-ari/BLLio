<?php
include "db/config.php";
$sql = "select image from web_banner where isactive = 1";
$query = mysqli_query($con, $sql);
?>

<div id="carouselHome" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner" id="myslide">
        <?php
        $no = 0;
        while ($result = mysqli_fetch_array($query)) {
            if ($no == 0) {
                ?>
                <div class="carousel-item active">
                    <img src="img/banner/<?php echo $result['image']; ?>" alt="slide1" class="img-fluid rounded mx-auto d-block">
                </div>
            <?php } else {
                    ?>
                <div class="carousel-item">
                    <img src="img/banner/<?php echo $result['image']; ?>" alt="slide1" class="img-fluid rounded mx-auto d-block">
                </div>
        <?php
            }
            $no++;
        } ?>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#carouselHome" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carouselHome" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>