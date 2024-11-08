<?php $page = 'services'; ?>
<?php
$services = [
    [
        'title' => 'KITCHENS',
        'image' => 'https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'kitchens-details.php',
    ],
    [
        'title' => 'BATHROOM',
        'image' => 'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'bathroom-details.php',
    ],
    [
        'title' => 'Exterior and Interior Remodels',
        'image' => 'https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'remodels-details.php',
    ],
    [
        'title' => 'BASEMENTS',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
    ],
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | Affinity Buildersco</title>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, repudiandae unde beatae accusamus
                        laudantium fuga magni vel inventore perferendis ullam explicabo, nesciunt debitis. Itaque dicta
                        repudiandae eos deleniti cum nisi.z
                    </p>

                </div>
            </div>
        </div>
        <section class="" style="background:#f6f6f6">
            <div class="containerFull ">


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
                                            <a class="text-white" href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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