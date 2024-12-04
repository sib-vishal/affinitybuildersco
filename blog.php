<?php $page = 'blog'; ?>
<?php
$blogs = [];
for ($i = 1; $i <= 300; $i++) {
    $blogs[] = [
        'title' => 'Blog Post ' . $i,
        'excerpt' => 'This is a brief excerpt for blog post ' . $i . '. It provides an overview of the content.',
        'image' => 'https://placehold.co/350x280',
        'url' => 'blog-details.php?id=' . $i,
    ];
}

// Pagination settings
$postsPerPage = 15;
$totalPosts = count($blogs);
$totalPages = ceil($totalPosts / $postsPerPage);

// Get current page from URL, default to 1
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$current_page = max(1, min($totalPages, $current_page));

// Calculate the offset for the query
$offset = ($current_page - 1) * $postsPerPage;

// Slice the blog array to get the current page's posts
$currentPosts = array_slice($blogs, $offset, $postsPerPage);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | Affinity Builders</title>
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
                        Our Blogs

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


                <div class="row">
                    <?php foreach ($currentPosts as $post): ?>
                        <a href="<?php echo $post['url']; ?>" class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?php echo $post['image']; ?>" class="card-img-top"
                                    alt="<?php echo $post['title']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title text_secondary"><?php echo $post['title']; ?></h5>
                                    <p class="card-text text_secondary"><?php echo $post['excerpt']; ?></p>
                                    <!-- <a href="<?php echo $post['url']; ?>" class="btn btn-primary">Read More</a> -->
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>  
                <div class="mt-5 pagination_blog">

                    <nav aria-label="Page navigation ">
                        <ul class="pagination justify-content-center">
    
                            <li class="page-item <?php echo $current_page === 1 ? 'disabled' : ''; ?>">
                                <a class="page-link prev" href="?page=<?php echo $current_page - 1; ?>">Prev</a>
                            </li>
    
                            <?php
    
                            $start = max(1, $current_page - 2);
                            $end = min($totalPages, $current_page + 2);
    
                            if ($current_page < 3) {
                                $end = min(5, $totalPages);
                            }
    
    
                            if ($current_page > $totalPages - 2) {
                                $start = max(1, $totalPages - 4);
                            }
    
    
                            for ($i = $start; $i <= $end; $i++): ?>
                                <li class="page-item <?php echo $i === $current_page ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
    
    
                            <li class="page-item <?php echo $current_page === $totalPages ? 'disabled' : ''; ?>">
                                <a class="page-link next" href="?page=<?php echo $current_page + 1; ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
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