<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Black Sea Group</title>
</head>

<body>

    <button id="scrollToTopBtn">↑</button>

    <header class="header">
        <div class="">
            <div class="header-main">
                <div class="logo">
                    <a href="./index.php">
                        <img src="./images/icon.png" alt="bsg" width="80" height="60">
                    </a>
                </div>
                <div class="open-nav-menu">
                    <span></span>
                </div>
                <div class="menu-overlay">
                </div>
                <nav class="nav-menu">
                    <div class="close-nav-menu">
                        <img src="images/icon.png" alt="close">
                    </div>
                    <ul class="menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">ჩვენს შესახებ <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="./pages/about/about.php">ჩვენს შესახებ</a></li>
                                <li class="menu-item"><a href="./pages/about/laboratory.php">ლაბორატორია</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">პროექტები <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="./pages/project/current-projects.php">მიმდინარე პროექტები</a></li>
                                <li class="menu-item"><a href="./pages/project/finished-projects..php">დასრულებული პროექტები</a></li>
                                <li class="menu-item"><a href="./pages/project/video-gallery.php">ვიდეო გალერეა</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">წარმოება <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="./pages/produce/agaiani.php">აღაიანის ბაზის წარმოება</a></li>
                                <li class="menu-item"><a href="./pages/produce/saakadze.php">სააკაძის ბაზის წარმოება</a></li>
                                <li class="menu-item"><a href="./pages/produce/ozurgeti.php">ოზურგეთის ბაზის წარმოება</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">კონტაქტები <i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="./pages/contact/contact.php">კონტაქტი</a></li>
                                <li class="menu-item"><a href="./pages/contact/vacancy.php">ვაკანსია</a></li>
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
                            <a href="./pages/product-production.php">წარმოებული პროდუქცია</a>
                        </li>
                        <li class="menu-item">
                            <a href="./pages/common-values.php">ძირითადი საშუალებები</a>
                        </li>
                        <li class="menu-item">
                            <a href="./pages/news.php">სიახლეები</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../images/2.jpg" alt="Slide 1" />
                        <div class="slide-content">
                            <a href="javascript:void(0);" class="openModalBtn" data-video="https://www.youtube.com/embed/-o0SYzWpwb4">
                                <i class="fa-solid fa-circle-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../images/3.jpg" alt="Slide 2" />
                        <div class="slide-content">
                            <a href="javascript:void(0);" class="openModalBtn" data-video="https://www.youtube.com/embed/adhaMoxl5L8">
                                <i class="fa-solid fa-circle-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div id="videoModal" class="modal">
                <div class="modal-content">
                    <span id="closeModalBtn" class="close"></span>
                    <iframe id="videoIframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class="about">
            <div>
                <h2>ჩვენს შესახებ</h2>
                <p>თანამედროვე ეპოქაში ნებისმიერი ახალი იდეის და პროექტის განხორციელება გზით იწყება. ჩვენ ვაშენებთ გზებს, ვაკავშირებთ ერთმანეთთან ქალაქებს, ქუჩებს, შენობებს, სოფლებს.</p>
            </div>
            <div>
                <img src="../images/About-Us.png" alt="about-us">
            </div>
        </section>

        <section class="project" id="project-section">
            <div>
                <h2>95</h2>
                <p>პროექტები</p>
            </div>
            <div>
                <h2>30</h2>
                <p>პარტნიორები</p>
            </div>
            <div>
                <h2>700</h2>
                <p>დასაქმებულია</p>
            </div>
        </section>

        <section class="about-projects">
            <div>
                <h2>პროექტები</h2>

                <div class="card-list">
                    <div class="card">
                        <div>
                            <img src="../images/3.jpg" alt="project">
                        </div>
                        <p>დასრულებული პროექტები</p>
                    </div>
                    <div class="card">
                        <div>
                            <img src="../images/2.jpg" alt="project">
                        </div>
                        <p>მიმდინარე პროექტები</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="text">
            <h2>
                ჩვენ სუფთა მომავალს ვაშენებთ!
            </h2>
        </section>

        <section class="news">
            <div class="new">
                <div>
                    <img src="../images/4.jpg" alt="">
                    <div>
                        <h2>
                            <a href="#">
                                გერმანული კომპანია Wirtgen-ის წარმომადგენლის ვიზიტი.
                            </a>
                        </h2>
                        <p>გერმანულმა კომპანიამ Wirtgen-მა, რომელიც არის ერთ-ერთი ყველაზე მსხვილი ტექნიკის მწარმოებელი მსოფლიოშ..</p>
                    </div>
                </div>
                <div>
                    <img src="../images/6.jpg" alt="">
                    <div>
                        <h2>
                            <a href="#">
                                პროექტს „Check In Georgia“ "კომპანია ბლექ სი გრუპი" შეუერთდა.
                            </a>
                        </h2>
                        <p>პროექტს „Check In Georgia“ საქართველოში მოქმედი ბიზნესწრეების წარმომადგენლები უერთდებიან. ამის შესახ..</p>
                    </div>
                </div>
                <div>
                    <img src="../images/5.jpg" alt="">
                    <div>
                        <h2>
                            <a href="#">
                                იტალიური კომპანია MATEST - ის ტრენინგი ლაბორატორიაში.
                            </a>
                        </h2>
                        <p>დღეს, 8 ივნისს კომპანიის ლაბორატორიაში მიმდინარეობს იტალიური კომპანია MATEST -ის ულტრათანამედროვე ხე..</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="partner">
            <h2>პარტნიორები</h2>

            <div class="logos">
                <div class="logos-slide">
                    <img src="../photos/1.png" width="150" />
                    <img src="../photos/2.jpg" width="150" />
                    <img src="../photos/3.jpg" width="150" />
                    <img src="../photos/4.jpg" width="150" />
                    <img src="../photos/5.jpg" width="150" />
                    <img src="../photos/11.png" width="150" />
                    <img src="../photos/13.png" width="150" />
                </div>

                <div class="logos-slide">
                    <img src="../photos/6.png" width="150" />
                    <img src="../photos/7.jpg" width="150" />
                    <img src="../photos/8.png" width="150" />
                    <img src="../photos/9.png" width="150" />
                    <img src="../photos/10.jpg" width="150" />
                    <img src="../photos/12.png" width="150" />
                    <img src="../photos/1.png" width="150" />
                </div>
            </div>
        </section>

        <section class="contact">
            <h2>დაგვიკავშირდით</h2>

            <form method="POST">
                <div class="input-group">
                    <input type="text" placeholder="* სახელი და გვარი" name="" required>
                    <input type="text" placeholder="* ელ.ფოსტა" name="" required>
                </div>
                <div>
                    <textarea name="" id="" placeholder="* შეტყობინება" required></textarea>
                </div>
                <button type="submit" class="submit">გაგზავნა</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-item">
            <ul>
                <li><a href="#">მთავარი</a></li>
                <li><a href="#">ჩვენს შესახებ</a></li>
                <li><a href="#">ლაბორატორია</a></li>
                <li><a href="#">კონტაქტი</a></li>
                <li><a href="#">ვაკანსია</a></li>
            </ul>

            <ul>
                <li><a href="#">მიმდინარე პროექტები</a></li>
                <li><a href="#">დასრულებული პროექტები</a></li>
                <li><a href="#">ვიდეო გალერეა</a></li>
                <li><a href="#">წარმოებული პროდუქცია</a></li>
                <li><a href="#">ძირითადი საშუალებები</a></li>
            </ul>

            <ul>
                <li><a href="#">აღაიანის წარმოების ბაზა</a></li>
                <li><a href="#">სააკაძის წარმოების ბაზა</a></li>
                <li><a href="#">ოზურეტის წარმოების ბაზა</a></li>
                <li><a href="#">სიახლეები</a></li>
            </ul>
        </div>

        <div class="footer">
            <img src="../images/footrer.png" alt="footer-png">
            <p>&copy; Black Sea Group | ყველა უფლება დაცულია</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>