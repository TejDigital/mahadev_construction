<?php
require('includes/header.php');
?>
<section>
    <div class="contact_home">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="banner-con text-center">
                        <h1>Contact</h1>
                        <p class="text-justify"> <a href="index.php" class="me-2">Home</a><i class="fa-solid fa-forward"></i><span>Contact</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
        <div class="contact_contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="img">
                            <img src="images/contact_bg_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="text">
                            <h1 class="text-center">We are <span>Hear</span> you</h1>
                            <p class="text-center">Contact us for query's</p>
                        </div>
                        <form action="">
                            <div class="form-group px-5 pd-2">
                                <div class="input_group">
                                    <input type="text" id="name" name="name" class="" required="" />
                                    <label class="label_field ps-1" for="name">Name</label>
                                </div>
                                <div class="input_group">
                                    <input type="text" id="name" name="name" class="" required="" />
                                    <label class="label_field ps-1" for="email">Email</label>
                                </div>
                                <div class="input_group">
                                    <input type="text" id="phone" name="phone" class="" required="" />
                                    <label class="label_field ps-1" for="phone">Phone</label>
                                </div>
                                <div class="input_group">
                                    <textarea id="message" name="message" class="" cols="30" rows="5" required=""></textarea>
                                    <label class="label_field ps-1" for="message">Message</label>
                                </div>
                                <div class="input_group">
                                    <button style="--clr:#ffe600" class="btn w-100"><span>SEND</span><i></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require('includes/footer.php') ?>
<?php require('includes/script.php') ?>
