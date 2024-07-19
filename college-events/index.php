<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/coman.css" rel="stylesheet" />

    <title>wedding</title>
</head>

<body>

    <?php include "./comp/navbar/navbar.php" ?>
    <?php include "./comp/hero/hero.php" ?>
    <div class="container">
        <?php 
        $title="Our program";
        $sub="What we Offer";
        include "./comp/title/title.php"  ?>
        <?php include "./comp/program/program.php" ?>
        <?php include "./comp/about/about.php" ?>

        <?php 
        $title="Gallery";
        $sub="Campush Phots";
        include "./comp/title/title.php"  ?>

        <?php include "./comp/campus/campus.php" ?>

        <?php 
        $title="Testimonials";
        $sub="What Student Says";
        include "./comp/title/title.php"  ?>

        <?php include "./comp/testi/testi.php" ?>

        <?php 
        $title="contact";
        $sub="Get in Touch";
        include "./comp/title/title.php"  ?>

        <?php include "./comp/contact/contact.php"?>
        <?php include "./comp/footer/footer.php"?>
    </div>
    <?php include "./comp/videoplay/video.php"?>
    <script src="assets/js/coman.js"></script>
</body>

</html>