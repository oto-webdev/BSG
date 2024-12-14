<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../../images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Black Sea Group</title>
</head>

<body class="body">

    <button id="scrollToTopBtn">↑</button>

    <header class="header">
        <div class="">
            <div class="header-main">
                <div class="logo">
                    <a href="../../index.php">
                        <img src="../../images/icon.png" alt="bsg" width="80" height="60">
                    </a>
                </div>
                <div class="open-nav-menu">
                    <span></span>
                </div>
                <div class="menu-overlay">
                </div>
                <nav class="nav-menu">
                    <div class="close-nav-menu">
                        <img src="../../images/icon.png" alt="close">
                    </div>
                    <ul class="menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">ჩვენს შესახებ <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="./about.php">ჩვენს შესახებ</a></li>
                                <li class="menu-item"><a href="#">ლაბორატორია</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">პროექტები <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="../project/current-projects.php">მიმდინარე პროექტები</a></li>
                                <li class="menu-item"><a href="../project/finished-projects..php">დასრულებული პროექტები</a></li>
                                <li class="menu-item"><a href="../project/video-gallery.php">ვიდეო გალერეა</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">წარმოება <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="../produce/agaiani.php">აღაიანის ბაზის წარმოება</a></li>
                                <li class="menu-item"><a href="../produce/saakadze.php">სააკაძის ბაზის წარმოება</a></li>
                                <li class="menu-item"><a href="../produce/ozurgeti.php">ოზურგეთის ბაზის წარმოება</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">კონტაქტები <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="../contact/contact.php">კონტაქტი</a></li>
                                <li class="menu-item"><a href="../contact/vacancy.php">ვაკანსია</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">ენა <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#">ქართული</a></li>
                                <li class="menu-item"><a href="#">ინგლისური</a></li>
                                <li class="menu-item"><a href="#">რუსული</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="../product-production.php">წარმოებული პროდუქცია</a>
                        </li>
                        <li class="menu-item">
                            <a href="../common-values.php">ძირითადი საშუალებები</a>
                        </li>
                        <li class="menu-item">
                            <a href="../news.php">სიახლეები</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="laboratory">
            <div>
                <h2>ლაბორატორია</h2>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-item">
            <ul>
                <li><a href="../../index.php">მთავარი</a></li>
                <li><a href="./about.php">ჩვენს შესახებ</a></li>
                <li><a href="#">ლაბორატორია</a></li>
                <li><a href="../contact/contact.php">კონტაქტი</a></li>
                <li><a href="../contact/vacancy.php">ვაკანსია</a></li>
            </ul>

            <ul>
                <li><a href="../project/current-projects.php">მიმდინარე პროექტები</a></li>
                <li><a href="../project/finished-projects..php">დასრულებული პროექტები</a></li>
                <li><a href="../project/video-gallery.php">ვიდეო გალერეა</a></li>
                <li><a href="../product-production.php">წარმოებული პროდუქცია</a></li>
                <li><a href="../common-values.php">ძირითადი საშუალებები</a></li>
            </ul>

            <ul>
                <li><a href="../produce/agaiani.php">აღაიანის წარმოების ბაზა</a></li>
                <li><a href="../produce/saakadze.php">სააკაძის წარმოების ბაზა</a></li>
                <li><a href="../produce/ozurgeti.php">ოზურეთის წარმოების ბაზა</a></li>
                <li><a href="../news.php">სიახლეები</a></li>
            </ul>
        </div>

        <div class="footer">
            <img src="../../images/footrer.png" alt="footer-png">
            <p>&copy; Black Sea Group | ყველა უფლება დაცულია</p>
        </div>
    </footer>

    <script src="../../js/app.js"></script>
</body>

</html>