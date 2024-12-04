<?php $page = 'services'; ?>
<?php
$services = [
    [
        'title' => 'KITCHENS',
        'image' => 'https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'kitchens-details.php',
        "id" => 'kitchen-details',
        'description' => "The kitchen is the heart of the home. It's where meals are prepared, and families gather. This is why at Affinity Builders, we take extra care in making the kitchen of your dreams. Hence, with inspired ideas, we're sure to create a livable and lovable kitchen. ",
        'additional_info' => ' Large Traditional Kitchens, Contemporary and Modern Kitchens, Kitchen Wall Removal for an Open Living Concept, Small and Compact City Kitchens with Innovative Storage Solutions '


    ],
    [
        'title' => 'BATHROOM',
        'image' => 'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'bathroom-details.php',
        "id" => 'bathroom-details',
        'description' => 'Bathrooms transform into your personal oasis. We work to create your perfect bathroom using the best tubs, tile, fixtures, and lighting. Once we work with you to finalize your vision, installation and execution will proceed, your dream bathroom will become a reality.',
        'additional_info' => '  Traditional Guest Bathrooms. Custom Walk-in Showers, Basement Bathroom Additions, Contemporary and Modern Bathrooms, Tub-to-Shower Conversions '
    ],
    [
        'title' => 'Exterior and Interior Remodels',
        'image' => 'https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'remodels-details.php',
        "id" => 'remodels-details',
        'description' => 'Does your property need an entire overhaul of its Exterior, Interior or in some cases both? At Affinity Builders we work with you to add value to your property and to your way of life through a complete remodel.  ',
        'additional_info' => ' Window Installation, Exterior and Interior Door Installations, Structural Support and Framing, Flooring (Tile and Hardwood) , Expert Installation of Finish Materials   '

    ],

    [
        'title' => 'REMIDIATION    ',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
        'id' => 'remidiation-detail',
        'description' => 'Do you have a small, old, or outdated property that you need to redesign? We work with you to make your property a modern, beautiful, and livable place.   ',
        'additional_info' => ' Remodeling to a New Standard, Redesigning to a New Look, Redesigning to a New Functionality, Redesigning to a New Design   '


    ],
    [
        'title' => 'DECKS     ',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
        'id' => 'decks-detail',
        'description' => 'Do you need a deck to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
        'additional_info' => ' Deck Installation, Deck Replacement, Deck Removal, Deck Repair, Deck Design   '

    ],
    [
        'title' => 'BASEMENT REDESIGN     ',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
        'id' => 'basement-redesign-detail',
        'description' => 'Do you need a basement to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
        'additional_info' => ' Basement Installation, Basement Replacement, Basement Removal, Basement Repair, Basement Design   '
    ],
    [
        'title' => 'BASEMENT REDESIGN     ',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
        'id' => 'basement-redesign-detail',
        'description' => 'Do you need a basement to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
        'additional_info' => ' Basement Installation, Basement Replacement, Basement Removal, Basement Repair, Basement Design   '
    ],
    [
        'title' => 'BASEMENT REDESIGN     ',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
        'id' => 'basement-redesign-detail',
        'description' => 'Do you need a basement to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
        'additional_info' => ' Basement Installation, Basement Replacement, Basement Removal, Basement Repair, Basement Design   '
    ],
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | Affinity Builders</title>
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
                        Our Services

                    </h1>
                    <p class="mt-3 text-white">

                    </p>

                </div>
            </div>
        </div>
        <section class="" style="background:#f6f6f6">
            <div class="containerFull ">
                <h4 class="fontHeading heading fontWeight700">
                    Our Remodeling Services
                </h4>
                <p class="mt-4">
                    Affinity Builders Our services cover all aspects of the construction project including intense
                    preliminary planning in order to get the project on the right track. It is important to us to give
                    the client a clear vision of what the job is going to look like, how it is going to get done, and
                    when every aspect of the job will be completed. You can expect the highest level of quality and
                    expert guidance every step of the way because we are committed to ensuring each client’s building
                    experience is both enjoyable and exceptional.
                </p>
                <div class="row mt-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-3">
                            <div>
                                <div class="services_item">
                                    <div class="imgStyles">
                                        <a href="<?php echo $service['link']; ?>">
                                            <picture>
                                                <source srcset="<?php echo $service['image']; ?>" type="image/webp">
                                                <img src="<?php echo $service['image']; ?>" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                        <h3 class="title fontHeading fontWeight600 text-center">
                                            <a class="text-white"
                                                href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- <section class="bg_secondary">
            <div class="containerFull">
                <small class="text_primary_light title fontWeight700">
                    Our Services
                </small>
                <h4 class="text_third heading fontHeading mt-3 ">
                    Explore Our Services: Crafted for You
                </h4>
                <div class="row mt-5">
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="kitchens-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="kitchens-details.php">KITCHENS</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="bathroom-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="bathroom-details.php">BATHROOM</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="remodels-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="remodels-details.php">Exterior and Interior
                                            Remodels</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="basements-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="basements-details.php">BASEMENTS</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="basements-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="basements-details.php">BEDROOMS</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="basements-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="basements-details.php">DINING ROOMS</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="basements-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="basements-details.php">OUTDOOR SPACES</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="services_item">
                                <div class="imgStyles">
                                    <a href="basements-details.php">
                                        <picture>
                                            <source
                                                srcset="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                type="image/webp">
                                            <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1"
                                                alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                    <h3 class="title fontHeading fontWeight600 text-center">
                                        <a class="text-white" href="basements-details.php">HOME OFFICES</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <section>
            <div class="containerFull">
                <div class="row services_navigation">
                    <div class=" col-lg-4">
                        <ul class="">
                            <?php foreach ($services as $service): ?>
                                <li>
                                    <a class="services_navigation_link" href="#<?= htmlspecialchars($service['id']); ?>">
                                      
                                        <h3 class="title"><?php echo $service['title']; ?></h3>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>


                    </div>
                    <div class=" col-lg-8 ps-5 ">
                        <?php foreach ($services as $service): ?>
                            <div class="row shadow b mb-4 services_box_main  services-scroll-margin"
                                id="<?= htmlspecialchars($service['id']); ?>">
                                <div class="col-md-4  m-0 p-0   ">
                                    <div class="imgbox_services">
                                        <img src="<?= $service['image']; ?>"
                                            alt="<?= htmlspecialchars($service['title']); ?>">
                                    </div>
                                </div>
                                <div class="col-md-8 p-4">
                                    <h3 class="fontWeight700 fontHeading ">
                                        <?= htmlspecialchars($service['title']); ?>
                                    </h3>
                                    <hr>
                                    <p class="mt-2">
                                        <?= htmlspecialchars($service['description']); ?>
                                    </p>
                                    <p class="my-2">
                                        <strong>
                                            Specializing in:
                                        </strong>
                                        <?= htmlspecialchars($service['additional_info']); ?>.

                                    </p>
                                    <a href="<?= htmlspecialchars($service['link']); ?>"
                                        class="text_primary  services_know_more">Know more <i
                                            class="fa-solid fa-arrow-right-long ps-2"></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>
        </section> -->



        <section class="bg_secondary">
            <div class="containerFull">
                <div class="text-center text-white">

                    <h4 class="heading fontHeading fontWeight700">
                        Transform Your Space: Affordable &amp; Elegant Design Solutions

                    </h4>
                    <p class="mt-3 text-white">
                        Kitchen &amp; Bath Remodeling | Home Additions | Outdoor Living
                    </p>
                    <div class="d-flex mt-4 justify-content-center ">
                        <a class="btn fontWeight600 header-btn2" href="tel:267-645-9005"><i
                                class="fa-solid fa-phone me-1"></i>
                            267-645-9005</a>
                        <a href="#"
                            class=" ms-3 d-inline-block rounded-0  icon-link icon-link-hover simple_btn2 fontWeight600">
                            <i class="fa-regular fa-envelope me-2"></i>
                            Know More

                        </a>


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