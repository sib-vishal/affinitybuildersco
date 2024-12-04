<?php $page = 'blog'; ?>
<?php
$blogs = [];
$authors = ['John Doe', 'Jane Smith', 'Alice Johnson', 'Michael Brown', 'Emily Davis'];
$descriptions = [
    'Exploring the beauty of nature through photography and storytelling.',
    'A deep dive into the latest trends in technology and innovation.',
    'Sharing tips for maintaining a healthy lifestyle and well-being.',
    'Travel adventures from around the world, highlighting unique experiences.',
    'Home improvement projects that can transform your living space.'
];

for ($i = 1; $i <= 50; $i++) { 
    $blogs[] = [
        'id' => $i,
        'title' => 'Blog Post Title ' . $i,
        'content' => '<p><strong>Introduction</strong><br>Creating a cozy living room is essential for a welcoming home. This space should reflect your personality and provide comfort for both you and your guests. With thoughtful design choices, you can transform your living room into a sanctuary of relaxation and style. Here are some comprehensive tips to help you design the perfect living room.</p>
<hr>
<p><strong>1. Choose the Right Color Palette</strong><br>The color palette sets the tone for your entire living room. Start with warm, neutral tones like soft beiges, taupes, or light grays as your base. These colors create a calming backdrop. To add interest, incorporate deeper shades such as forest greens or navy blues as accent colors through cushions, artwork, or even a feature wall. Consider using a color wheel to help select complementary colors that enhance the overall aesthetic.</p>
<p><strong>2. Select Comfortable Furniture</strong><br>Investing in high-quality, comfortable furniture is key. Look for sofas with plush cushions and durable upholstery that can withstand daily use. A sectional sofa can provide ample seating and encourage conversation. Layer your seating with an assortment of cushions in varying sizes and textures to create an inviting atmosphere. A sturdy coffee table is also essential; consider one with storage options to keep the space organized and clutter-free.</p>
<p><strong>3. Add Textures</strong><br>Textures are critical in creating a cozy atmosphere. Mix different materials to engage the senses. Consider a soft, shaggy rug that invites bare feet and adds warmth to the room. Incorporate throws in various fabrics—think chunky knits, soft cottons, or luxurious velvets. Wooden accents, such as a reclaimed wood coffee table or bookshelves, add warmth and character. Don’t shy away from metallics; a few gold or brass accents can elevate the design and add a touch of sophistication.</p>
<p><strong>4. Incorporate Natural Elements</strong><br>Bringing nature indoors can enhance both beauty and well-being. Use indoor plants to add life and color. Popular choices include snake plants, pothos, or peace lilies, which are also low-maintenance. Consider hanging plants or wall-mounted planters to maximize space. Wooden furniture or decor pieces, such as driftwood or bamboo, contribute to a natural, organic feel. Additionally, incorporating large windows or mirrors can help to reflect natural light and make the space feel larger and more open.</p>
<p><strong>5. Personal Touches</strong><br>Infuse your personality into the living room through personal touches. Create a gallery wall featuring family photos, artwork from local artists, or cherished travel mementos. Use decorative items that tell your story, such as unique vases or handmade crafts. Consider a bookshelf filled with your favorite books, which not only adds character but also invites guests to explore your interests.</p>
<p><strong>6. Lighting Matters</strong><br>Proper lighting can transform your living space. Aim for a mix of ambient, task, and accent lighting. Use floor lamps and table lamps to create layers of light and enhance the cozy vibe. Incorporate dimmer switches to adjust the brightness based on the time of day or occasion. Additionally, consider using warm light bulbs to create a soft, inviting glow.</p>
<p><strong>7. Create Zones</strong><br>If space allows, create distinct zones within your living room. Consider a reading nook with a comfortable chair and a small side table, or a game area with a small table and chairs. Using area rugs can help define these spaces, making the room feel organized and functional.</p>
<p><strong>Conclusion</strong><br>By following these tips, you can create a cozy living room that reflects your style and welcomes your guests. Remember, the key is to make it personal and comfortable. Don’t hesitate to experiment with different elements until you find the perfect balance that feels like home.</p>',
        'author' => $authors[array_rand($authors)], 
        'date' => date('Y-m-d', strtotime("-$i days")), 
    ];
}


$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 1;


$selected_blog = null;
foreach ($blogs as $blog) {
    if ($blog['id'] === $blog_id) {
        $selected_blog = $blog;
        break;
    }
}

if (!$selected_blog) {
    
    die("Blog post not found.");
}
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
                        <?php echo htmlspecialchars($selected_blog['title']); ?>

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


                <h2 class="heading fontHeading"><?php echo $selected_blog['title']; ?></h2>
                <p class="text-muted mt-1">By <?php echo htmlspecialchars($selected_blog['author']); ?> on
                    <?php echo htmlspecialchars($selected_blog['date']); ?>
                </p>
                <div class="blog-content mt-4">
                    <p><?php echo $selected_blog['content']; ?></p>
                </div>
                <a href="blog.php" class="btn btn-secondary mt-4">Back to Blog</a>

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