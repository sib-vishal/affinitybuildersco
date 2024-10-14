<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Affinity Buildersco </title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="banner-wrapper">
            <div class="banner-video">
                <video src="images/banner/Ad.mp4" loop muted autoplay></video>
            </div>
            <div class="banner-text d-flex align-items-center justify-content-center">
                <div class="inner_content">
                    <h1 class="fontHeading large_heading text-white" data-aos="flip-up" data-aos-duration="1500">
                        Affinity Buildersco
                    </h1>
                    <!-- <p class="mt-4 text-white" data-aos="fade-up" data-aos-duration="1000">
                    Revitalize Your Space with Affinity Builders!
                    </p> -->
                    <p class="mt-4 text-white" data-aos="fade-up" data-aos-duration="1000">
                        Kitchen & Bath Remodeling | Home Additions | Outdoor Living
                    </p>
                    <a class="btn fontWeight600 header-btn mt-4" href="#" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        Explore More <i class="fa-solid fa-arrow-right ms-1 " style="rotate:-45deg"></i></a>
                </div>
            </div>
        </div>
        <!--Who we are start-->
        <section class="">
            <div class="containerFull">
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="mb-4">
                            <small class="text-uppercase ls-md fw-semibold text_primary">About Us</small>
                            <h2 class="fontHeading  mt-4 mb-3 fontWeight900 text_secondary">

                                WE ENHANCE THE QUALITY OF LIFE IN YOUR HOME</h2>
                            <p class="mb-3">is dedicated to providing extra care to each project from pre-construction
                                to project closeout. Owned and Operated in Philadelphia, we strive to revitalize not
                                only the Philadelphia area, but all of its surrounding counties. </p>
                            <p class="mb-0">Consequat mauris nunc congue nisi vitae
                                suscipit tellus mauris a. Amet mattis vulputate enim
                                nulla aliquet porttitor lacus.</p>
                        </div>
                        <div>
                            <a class="btn fontWeight600 header-btn" href=""><i class="fa-solid fa-phone me-1"></i>
                                Request a Quote</a>

                            <a href="#" class="ms-3 icon-link icon-link-hover simple_btn fontWeight600">
                                More about us
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                        <div class="row g-4">
                            <div class="col-lg-6 col-md-6 col-12">
                                <a href="#!">
                                    <div class="rounded-3 card-lift" style="
    background-image: url(https://images.pexels.com/photos/3926542/pexels-photo-3926542.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-repeat: no-repeat;
    height: 386px;
    background-size: cover;
"></div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <a href="#!">
                                    <div class="mb-4 rounded-3 card-lift" style="
    background-image: url(https://images.pexels.com/photos/6301168/pexels-photo-6301168.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-repeat: no-repeat;
    height: 180px;
    background-size: cover;
"></div>
                                </a>
                                <a href="#!">
                                    <div class="mb-2 rounded-3 card-lift" style="
    background-image: url(https://images.pexels.com/photos/6957087/pexels-photo-6957087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-repeat: no-repeat;
    height: 180px;
    background-size: cover;
"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Who we are end-->

        <!--Expert team start-->
        <section class="bg_secondary">
            <div class="containerFull">
                <div class="row border-top border-bottom">
                    <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                        <div class="text-center py-lg-5 p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff"
                                    class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white">Expert Team</h4>
                                <p class="mb-0 text-white mt-3">Vivamus eget neque lacus.
                                    Pellentesque egauris ex.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                        <div class="text-center py-lg-5 p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff"
                                    class="bi bi-trophy-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white">Award winning agency</h4>
                                <p class="mb-0 text-white mt-3">Lorem ipsum, dolor sit amet
                                    consectetur elitorceat .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                        <div class="text-center py-lg-5 p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff"
                                    class="bi bi-stars text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white">10 Year Exp.</h4>
                                <p class="mb-0 text-white mt-3">Pellen tesque eget, mauris lorem
                                    iupsum neque lacus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Expert team end-->

        <section class="bg-gray-light">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <div class="m-auto">
                                <h4 class="heading fontHeading fontWeight900">
                                    Lets Discuss
                                    Your Project!

                                </h4>
                                <p>
                                    Contact us today and take the next step building the home of your dreams!
                                </p>
                                <div class="mt-5">
                                    <img class="w-100" src="images/contact.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bannerForm_main">
                            <form action="" class="bg-white bannerForm">
                                <div class=" p-4 bg_primary text-white ">
                                    <h4 class="fontHeading fontWeight700">
                                        Speak To A Our Expert
                                    </h4>
                                    <p class="mt-1 text-white-50">
                                        Tell us about your project!
                                    </p>
                                </div>
                                <div class="p-4">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingName" placeholder="Name">
                                        <label for="floatingName">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingPassword"
                                            placeholder="Phone No.">
                                        <label for="floatingPassword">Phone No.</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here"
                                            style="height: 100px" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Message</label>
                                    </div>
                                    <button class="btn header-btn w-100 py-3 mt-3  " type="submit">
                                        Speak To A Design Specialist
                                    </button>
                                </div>
                                <div class="formfooter">
                                    <div class="d-flex justify-content-between">
                                        <div class="item_contact">
                                            <a href="https://api.whatsapp.com/send?phone=amp;text=Hi"><i
                                                    class="fab fa-whatsapp"></i>
                                                &nbsp; WhatsApp</a>
                                        </div>
                                        <div class="item_contact">
                                            <a href="tel:"><i class="fa fa-phone"></i> &nbsp; +91 929424344</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- our services -->
        <section>
            <div class="containerFull">
                <small class="text-uppercase title ls-md fw-semibold text_primary">

                    OUR SERVICES
                </small>
                <h4 class="fontHeading  heading mt-3 mb-3 fontWeight900 text_secondary">
                    WHAT SERVICE DO YOU NEED?
                </h4>
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item ">
                                <div class="imgStyles">
                                    <picture>
                                        <source
                                            srcset="https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            type="image/webp">
                                        <img src="https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            alt="">
                                    </picture>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box ">
                                    <h3 class="title fontHeading fontWeight600 text-center">KITCHENS</h3>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item ">
                                <div class="imgStyles">
                                    <picture>
                                        <source
                                            srcset="https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            type="image/webp">
                                        <img src="https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            alt="">
                                    </picture>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box ">
                                    <h3 class="title fontHeading fontWeight600 text-center">BATHROOM</h3>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item ">
                                <div class="imgStyles">
                                    <picture>
                                        <source
                                            srcset="https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            type="image/webp">
                                        <img src="https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            alt="">
                                    </picture>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box ">
                                    <h3 class="title fontHeading fontWeight600 text-center">Exterior and Interior
                                        Remodels</h3>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item ">
                                <div class="imgStyles">
                                    <picture>
                                        <source
                                            srcset="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            type="image/webp">
                                        <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&w=700&h=500&dpr=1"
                                            alt="">
                                    </picture>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box ">
                                    <h3 class="title fontHeading fontWeight600 text-center">BASEMENTS</h3>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
        </section>
        <!-- add ser -->
        <section class="bg-gray-light">
            <div class="containerFull">
                <small class="text-uppercase title ls-md fw-semibold text_primary">

                    Additional Services
                </small>
                <h4 class="fontHeading  heading mt-3 mb-3 fontWeight900 text_secondary">
                    Enhance Your Home with Our Comprehensive Solutions
                </h4>
                <div class="row mt-4">
                    <div class="col-lg-3">

                        <div class="add-services">
                            <div class="right_icon">
                                <img src="images/home/trangle.svg" alt="">
                            </div>
                            <div class="img-box mx-auto">
                                <img src="images/home/add-services.jpeg" alt="">

                            </div>

                            <h4 class="text-center text-white fontHeading mt-4">
                                Outdoor Living
                            </h4>

                            <div class="btn bg-white btn_arrow shadow">
                                <i class="fa-solid fa-arrow-up" style="rotate:90deg"></i>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="add-services">
                            <div class="right_icon">
                                <img src="images/home/trangle.svg" alt="">
                            </div>
                            <div class="img-box mx-auto">
                                <img src="images/home/add-services.jpeg" alt="">

                            </div>

                            <h4 class="text-center text-white fontHeading mt-4">
                                Decks
                            </h4>

                            <div class="btn bg-white btn_arrow shadow">
                                <i class="fa-solid fa-arrow-up" style="rotate:90deg"></i>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="add-services">
                            <div class="right_icon">
                                <img src="images/home/trangle.svg" alt="">
                            </div>
                            <div class="img-box mx-auto">
                                <img src="images/home/add-services.jpeg" alt="">

                            </div>

                            <h4 class="text-center text-white fontHeading mt-4">
                                Mudrooms
                            </h4>

                            <div class="btn bg-white btn_arrow shadow">
                                <i class="fa-solid fa-arrow-up" style="rotate:90deg"></i>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="add-services">
                            <div class="right_icon">
                                <img src="images/home/trangle.svg" alt="">
                            </div>
                            <div class="img-box mx-auto">
                                <img src="images/home/add-services.jpeg" alt="">

                            </div>

                            <h4 class="text-center text-white fontHeading mt-4">
                                Game Rooms
                            </h4>

                            <div class="btn bg-white btn_arrow shadow">
                                <i class="fa-solid fa-arrow-up" style="rotate:90deg"></i>

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- why -->

        <section class="">
            <div class="containerFull">
                <small class="text-uppercase title ls-md fw-semibold text_primary">

                    WHY CHOOSE US
                </small>
                <h4 class="fontHeading  heading mt-3 mb-3 fontWeight900 text_secondary">

                    AFFINITY BUILDERS ALWAYS OFFER
                </h4>


                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <div class="choose_card">
                                    <div class="img_box mx-auto">
                                        <img src="images/home/_almeidahomeremodeling.webp" alt="">
                                    </div>
                                    <h4 class="mt-4 text-center text_primary">

                                        Transparent Estimates
                                    </h4>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="choose_card">
                                    <div class="img_box mx-auto">
                                        <img src="images/home/_almeidahomeremodeling (1).webp" alt="">
                                    </div>
                                    <h4 class="mt-4 text-center text_primary">

                                        Professional Oversight
                                    </h4>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="choose_card">
                                    <div class="img_box mx-auto">
                                        <img src="images/home/_almeidahomeremodeling (2).webp" alt="">
                                    </div>
                                    <h4 class="mt-4 text-center text_primary">

                                        Satisfaction Guarantee
                                    </h4>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="choose_card">
                                    <div class="img_box mx-auto">
                                        <img src="images/home/_almeidahomeremodeling (3).webp" alt="">
                                    </div>
                                    <h4 class="mt-4 text-center text_primary">

                                        Timely <br> Completion
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why_video_div">
                            <!-- <video class="object-fit-cover w-100 " src="images/banner/choose.mp4"  loop muted autoplay></video> -->
                            <video class="myVideo" loop="" muted="" playsinline="" autoplay>
                                <source src="images/banner/choose.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--  -->
        <section class="bg_secondary">
            <div class="containerFull">
                <div class="col-lg-6">
                    <small class="text-uppercase title ls-md fw-semibold text-white-50"> Connect with us</small>
                    <h4 class="fontHeading  heading mt-3 mb-3 fontWeight900 text-white">
                        Let's Get Started With Us,
                        Further Info & Support Team
                    </h4>


                    <a class="btn fontWeight600 header-btn mt-4" href=""><i class="fa-solid fa-phone me-1"></i> +91-1234567890</a>
                </div>
                <div class="col-lg-6">
                

                </div>

            </div>

        </section>
    </div>

















    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".banner-slider", {
            spaceBetween: 0,
            // centeredSlides: true,
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            // pagination: {
            //   el: ".swiper-pagination",
            //   clickable: true,
            // },

            // navigation: {
            //   nextEl: ".swiper-button-next",
            //   prevEl: ".swiper-button-prev",
            // },
        });
    </script>
</body>

</html>