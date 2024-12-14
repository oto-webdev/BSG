<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Black Sea Group</title>
</head>
<body>

    <button id="scrollToTopBtn">↑</button>
    
    <header class="header">
        <?php include "./components/navbar.php" ?>
    </header>

    <main>
        <section class="hero">
            <?php include "./components/swiper.php" ?>
        </section>
        
        <section class="about">
            <?php include "./components/about.php" ?>
        </section>

        <section class="project" id="project-section">
            <?php include "./components/project.php" ?>
        </section>

        <section class="about-projects">
            <?php include "./components/about-projects.php" ?>
        </section>

        <section class="text">
            <?php include "./components/text.php" ?>
        </section>

        <section class="news">
            <?php include "./components/news.php" ?>
        </section>
    
        <section class="partner">
            <?php include "./components/partner.php" ?>
        </section>

        <section class="contact">
            <?php include "./components/contact.php" ?>
        </section>
    </main>

    <footer>
        <?php include "./components/footer.php" ?>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>