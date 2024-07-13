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
        $title="are you ready";
        $sub="For Special Event";
        include "./comp/title/title.php"  ?>


    </div>
</body>

</html>