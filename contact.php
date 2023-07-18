<?php
session_start();
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
                    <div class="col-md-6 pt-5">

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
                        <form action="./admin/connect.php" method="POST">
                            <div class="form-group px-3 pd-2">
                                <div class="input_group">
                                    <input type="text" id="name" name="name" onkeypress="return (event.charCode > 64 && 
                              event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || event.charCode == 32)" class="" required="" />
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
                                    <button type="submit" name="submit" style="--clr:#ffe600" class="btn w-100"><span>SEND</span><i></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.5830344509527!2d81.31262237410562!3d21.208716781575582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293d9795d974fb%3A0xa74f105981f99dca!2sPushpak%20nagar%20Bhilai!5e0!3m2!1sen!2sin!4v1689577125327!5m2!1sen!2sin"  style="border:0; width:100%; max-height:450px; height:357px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php require('includes/footer.php') ?>
<?php require('includes/script.php') ?>
