<?php
session_start();
require('includes/header.php');
require('./admin/config/dbcon.php');
?>

<section class="home1">
    <div class="container-fluid p-0">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/home_bg_5.jpg" class="d-block w-100" alt="...">
                    <div class="text">
                        <h2 class="text-center" style="color: #ffe600;">We are Mahadev Developer's</h2>
                        <p class="text-center">Building dreams, exceeding expectations, and delivering excellence in real estate</p>
                        <h1 class="text-center">We can create your dream real</h1>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="images/home_bg_7.jpg" class="d-block w-100" alt="...">
                    <div class="text">
                        <h2 class="text-center" style="color: #ffe600;">We are Mahadev Developer's</h2>
                        <p class="text-center">Building dreams, exceeding expectations, and delivering excellence in real estate</p>
                        <h1 class="text-center">We can create your dream real</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/home_bg_6.jpg" class="d-block w-100" alt="...">
                    <div class="text">
                        <h2 class="text-center" style="color: #ffe600;">We are Mahadev Developer's</h2>
                        <p class="text-center">Building dreams, exceeding expectations, and delivering excellence in real estate</p>
                        <h1 class="text-center">We can create your dream real</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/home_bg_3.jpg" class="d-block w-100" alt="...">
                    <div class="text">
                        <h2 class="text-center" style="color: #ffe600;">We are Mahadev Developer's</h2>
                        <p class="text-center">Building dreams, exceeding expectations, and delivering excellence in real estate</p>
                        <h1 class="text-center">We can create your dream real</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/home_bg_8.jpg" class="d-block w-100" alt="...">
                    <div class="text">
                        <h2 class="text-center" style="color: #ffe600;">We are Mahadev Developer's</h2>
                        <p class="text-center">Building dreams, exceeding expectations, and delivering excellence in real estate</p>
                        <h1 class="text-center">We can create your dream real</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>




<main>
    <section class="about">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about_area col-md-8 d-flex align-items-center justify-content-center flex-column">
                    <div class="img" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="images/home_about_profile_1.jpg" alt="">
                    </div>

                    <div class="text">
                        <h1 class="text-center">About Company</h1>
                        <p class="text-justify px-3" style="text-align: justify;">Mahadev Developers is a leading provider of exceptional planning and construction services in
                            the real estate industry. With a strong commitment to quality and a passion for creating
                            extraordinary houses, we strive to turn your dreams into reality. Our expertise lies in managing
                            projects with T&C (Township and Country Planning) approval and RERA (Real Estate Regulatory
                            Authority) certification. With over
                            22 years of experience, we have honed our skills and resources to deliver outstanding results for
                            both residential and commercial projects.</p>
                    </div>
                    <div class="home_about_btns d-flex  align-items-center justify-content-center">
                        <a href="tel:9993840444"> Call Now</a>
                        <a href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container-fluid">
            <div class="head_text py-3">
                <h1 class="text-center">What we Provide?</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ullam hic culpa iure velit.</p>
            </div>
            <div class="row d-flex align-items-center justify-content-center gap-5 px-2">
                <div class="col-md-3 " data-aos="fade-up" data-aos-delay="100">
                    <div class="services_box p-3">
                        <div class="logo">
                            <img src="./images/land.png" alt="plotting">
                        </div>
                        <div class="text">
                            <h4>Plotting</h4>
                            <p>Find your ideal piece of land with our expert analysis of location, accessibility,
                                infrastructure, and zoning laws.</p>
                            <div class="home_services_btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-offset="100" data-aos-delay="500">
                    <div class="services_box p-3 ">

                        <div class="logo">
                            <img src="./images/planning.png" alt="plotting">
                        </div>
                        <div class="text">
                            <h4>Planning &Designing</h4>
                            <p>Collaborate with our team to create innovative and practical designs
                                that reflect your unique vision.</p>
                            <div class="home_services_btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 " data-aos="fade-up" data-aos-delay="700">
                    <div class="services_box">

                        <div class="logo">
                            <img src="./images/building.png" alt="plotting">
                        </div>
                        <div class="text">
                            <h4>Construction</h4>
                            <p>Experience high-caliber construction expertise delivering exceptional projects,
                                from commercial buildings to residential complexes.</p>
                            <div class="home_services_btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 d-flex align-items-center justify-content-center gap-5 px-1">
                <div class="col-md-3 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="800">
                    <div class="services_box">

                        <div class="logo">
                            <img src="./images/investment.png" alt="plotting">
                        </div>
                        <div class="text">
                            <h4>Investment consultant</h4>
                            <p> Gain expert advice and market insights to make informed real estate
                                investment decisions.</p>
                            <div class="home_services_btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="900">
                    <div class="services_box">

                        <div class="logo">
                            <img src="./images/social-care.png" alt="plotting">
                        </div>
                        <div class="text">
                            <h4>Financial assistance</h4>
                            <p>Access tailored financial solutions through our partnerships with trusted
                                finance institutions.</p>
                            <div class="home_services_btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gallery">
            <h1>Gallery</h1>
            <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, ratione!</p>
            <section id="gallery_area" class="section_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery_slider_area text-center owl-carousel owl-theme">

                                <div class="box-area card">
                                    <img src="images/home_bg_1.jpg" class="card-img-top" alt="...">
                                    <a href="images/home_bg_1.jpg" data-fancybox="gallery1" title="" itemprop="url"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="box-area card">
                                    <img src="images/home_bg_3.jpg" class="card-img-top" alt="...">
                                    <a href="images/home_bg_3.jpg" data-fancybox="gallery1" title="" itemprop="url"><i class="fa-solid fa-eye"></i></a>

                                </div>
                                <div class="box-area card">
                                    <img src="images/home_bg_2.jpg" class="card-img-top" alt="...">
                                    <a href="images/home_bg_2.jpg" data-fancybox="gallery1" title="" itemprop="url"><i class="fa-solid fa-eye"></i></a>

                                </div>
                                <div class="box-area card">
                                    <img src="images/home_bg_4.jpg" class="card-img-top" alt="...">
                                    <a href="images/home_bg_4.jpg" data-fancybox="gallery1" title="" itemprop="url"><i class="fa-solid fa-eye"></i></a>

                                </div>
                                <div class="box-area card">
                                    <img src="images/home_services_bg_1.jpg" class="card-img-top" alt="...">
                                    <a href="images/home_bg_1.jpg" data-fancybox="gallery1" title="" itemprop="url"><i class="fa-solid fa-eye"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
            <div class="text-center mt-4">
                <a href="gallery.php" class="btn btn-sm">More</a>
            </div>
        </div>
    </section>
    <section>
        <div class="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="img" data-aos="zoom-in-down" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="100">
                            <img src="images/home_contact_bg1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 ">

                        <div class="text">
                            <h1 class="text-center">We <span>Hear</span> for you</h1>
                            <p class="text-center">send your details</p>
                        </div>
                        <?php
                        if (isset($_SESSION['cons_msg'])) {
                            echo "<script>alert('.$_SESSION[cons_msg] .')</script>";
                            unset($_SESSION['cons_msg']);
                        }
                        ?>
                        <form action="./admin/connect.php" method="post">
                            <div class="form-group px-3 pd-2">
                                <div class="input_group">
                                    <input type="text" id="name" name="name" class="" onkeypress="return (event.charCode > 64 && 
                              event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || event.charCode == 32)" required="" />
                                    <label class="label_field ps-1" for="name">Name</label>
                                </div>
                                <div class="input_group">
                                    <input type="tel" maxlength="10" onkeyup="validateNumber(this,'msg_alert1')" id="phone" name="phone" class="" required="" />
                                    <label class="label_field ps-1" for="phone">Phone <span id="msg_alert1" style="color:red;"></span></label>
                                </div>
                                <div class="input_group">
                                    <input type="email" id="name" name="email" class="" required="" />
                                    <label class="label_field ps-1" for="email">Email</label>
                                </div>

                                <div class="input_group">
                                    <textarea id="message" name="message" class="" cols="30" rows="5" required=""></textarea>
                                    <label class="label_field ps-1" for="message">Message</label>
                                </div>
                                <div class="input_group">
                                    <button type="submit" name="submit_index" style="--clr:#ffe600" class="btn w-100"><span>SEND</span><i></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require('includes/footer.php') ?>
<?php require('includes/script.php') ?>