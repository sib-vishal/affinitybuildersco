<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Affinity Builders</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
    <?php include 'include/header.php'; ?>
    <div class="wrapper">
        <div class="contact-banner">
            <div class="containerFull w-100">
                <div class="banner-inner  ">
                    <h1 class="fontHeading ">
                        Contact Us

                    </h1>
                    <p class="mt-3 text-white">
                    connect with us. We will be sure to reply promptly. 
                    </p>

                </div>
            </div>



        </div>
        <section class="Contact_details">
            <div class="containerFull">

                <div class="row ">

                    <div class="col " style="">
                        <div class="">
                            <div class="">
                                <img width="70" class=" mb-20px icon " src="images/location.svg" alt="">
                            </div>
                            <div class=" ">
                                <span class="d-block mt-2  mb-5px heading fontWeight700">Office
                                    location</span>
                                <p class="w-80 xl-w-100 md-w-75 mx-auto snall">407 South 10TH ST Suite 103 

Philadelphia, PA 19147 </p>
                            </div>
                        </div>
                    </div>


                    <div class="col" style="">
                        <div class="">
                            <div class="">
                                <img width="70" class=" mb-20px icon " src="images/message.svg" alt="">
                            </div>
                            <div class=" last-paragraph-no-margin">
                                <span class="d-block mt-2  mb-5px heading fontWeight700">Send a
                                    message</span>
                                <div class="w-100 d-block">
                                    <a href="mailto:info@affinity-builders.com" class=" text-black  ">info@affinity-builders.com </a><br>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col " style="">
                        <div class="">
                            <div class="">
                                <img width="70" class=" mb-20px icon " src="images/phone.svg" alt="">
                            </div>
                            <div class="">
                                <span class="d-block mt-2  mb-5px heading fontWeight700">Let's talk with
                                    us</span>
                                <div class="w-100 d-block">
                                    <span class="d-block">Phone: <a href="tel:267-645-9005"
                                            class=" text-black">267-645-9005</a></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col" style="">
                        <div class="">
                            <div class="">
                                <img width="70" class=" mb-20px icon " src="images/team.svg" alt="">
                            </div>
                            <div class="">
                                <span class="d-block mt-2  mb-5px heading fontWeight700">Join our
                                    team</span>
                                <p class="w-80 lg-w-100 md-w-75 sm-w-85 xs-w-75 mx-auto ">Connect with Us
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="" style="background:#f6f6f6">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="leftContact">
                            <h4 data-aos="zoom-in-up"
                                class="large_heading fontWeight800 fontHeading aos-init aos-animate ">Contact
                                us</h4>
                            <p class="title mt-3 aos-init aos-animate" data-aos="zoom-in-up">Connect with Us for
                                Support, Inquiries, and
                                Feedback.</p>

                            <div data-aos="zoom-in-up" class="aos-init mt-4 aos-animate">
                                <iframe class="w-100 shadow "
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7737332.333742825!2d71.46959102657826!3d18.753791478416602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1724676484004!5m2!1sen!2sin"
                                    width="600" height="460" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                   
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 aos-init contact_page aos-animate" data-aos="zoom-in-up">
                        <div class="contactForm1 w-100">

                            <div class="row ">
                                <div class="col-lg-6">
                                    <div class="itemForm">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" placeholder="John" id="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="itemForm">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" placeholder="Smith" id="lname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="itemForm">
                                        <label for="email">E-mail Address</label>
                                        <input type="email" name="email" placeholder="johnsmith@tapar.com" id="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="itemForm">
                                        <label for="phone">Phone</label>
                                        <input type="tel" name="phone" placeholder="+91 999999999" id="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="itemForm">
                                        <label for="message">Your Message</label>
                                        <textarea name="message" id="message"
                                            placeholder="Write your message here..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class=" send_btn py-3 w-100 bg-white border-0 fontWeight600">Send
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>

</html>