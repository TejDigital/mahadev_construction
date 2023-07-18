<?php
require('includes/header.php');
require('./admin/config/dbcon.php');
?>
<section>
    <div class="gallery_home">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="banner-con text-center">
                        <h1>Gallery</h1>
                        <p class="text-justify"> <a href="index.php" class="me-2">Home</a><i class="fa-solid fa-forward"></i><span>Gallery</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_slick">
    <div class="container">
        <div class="heading">
            <h1 class="text-center">Check out what<span> we have done</span></h1>
            <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente?</p>
        </div>
        <div class="row p-0 m-0">
            <div class="col-md-12">
                <div id="page">
                    <div class="row">
                        <div class="column small-11 small-centered">
                            <div class="slider slider-single">
                                <?php
                                $query = "SELECT * FROM gallery_tbl";
                                $sql  = mysqli_query($con, $query);
                                if (mysqli_num_rows($sql)) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                        <div class="img">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                            <img src="./admin/admin_img_upload/<?= $data['image_name'] ?>" alt="">
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <!-- <div class="img">
                                    <img src="images/home_bg_1.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="images/home_bg_4.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="images/home_bg_3.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="images/home_bg_4.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="images/home_bg_3.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="images/home_bg_4.jpg" alt="">
                                </div>
                                <div class="img">
                                    <img src="images/home_bg_3.jpg" alt="">
                                </div> -->
                            </div>
                            <div class="slider slider-nav mt-2">
                            <?php
                                $query = "SELECT * FROM gallery_tbl WHERE status = '1'";
                                $sql  = mysqli_query($con, $query);
                                if (mysqli_num_rows($sql)) {
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                        <div class="img_nav">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                            <img src="./admin/admin_img_upload/<?= $data['image_name'] ?>" alt="">
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <!-- <div class="img_nav">
                                    <img src="images/home_bg_1.jpg" alt="">
                                </div>
                                <div class="img_nav">
                                    <img src="images/home_bg_4.jpg" alt="">
                                </div>
                                <div class="img_nav">
                                    <img src="images/home_bg_3.jpg" alt="">
                                </div>
                                <div class="img_nav">
                                    <img src="images/home_bg_4.jpg" alt="">
                                </div>
                                <div class="img_nav">
                                    <img src="images/home_bg_3.jpg" alt="">
                                </div>
                                <div class="img_nav">
                                    <img src="images/home_bg_4.jpg" alt="">
                                </div>
                                <div class="img_nav">
                                    <img src="images/home_bg_3.jpg" alt="">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('includes/footer.php') ?>
<?php require('includes/script.php') ?>