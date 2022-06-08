<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Snack Hack | Onlne Food Ordering System</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.php" class="logo"><i class="fas fa-utensils"></i> The Snack Hack</a>

        <nav class="navbar">
            <a class="active" href="index.php">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="error.php" class="fas fa-heart"></a>
            <a href="error.php" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>CHEF'S SPECIAL</span>
                        <h3>ENJOY YOUR SPICY NOODLES IN TOWN.</h3>
                        <a href="pdp-special-1.php" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="" loading="lazy" />
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>CHEF'S SPECIAL</span>
                        <h3>ENJOY YOUR FRIED CHICKEN IN TOWN.</h3>
                        <a href="pdp-special-2.php" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="" loading="lazy" />
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>CHEF'S SPECIAL</span>
                        <h3>ENJOY YOUR PIZZA IN TOWN.</h3>
                        <a href="pdp-special-3.php" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="" loading="lazy" />
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- dishes section starts  -->

    <section class="dishes container" id="dishes">

        <h3 class="sub-heading"> our dishes </h3>
        <h1 class="heading"> popular dishes </h1>

        <div class="box-container slick-slider">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-1.png" alt="">
                <h3>Whooper(Hamburger)</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>&#8377;245</span>
                <a href="pdp-1.php" class="btn">Order Now</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-2.png" alt="">
                <h3>Chicken Nuggets</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>&#8377;289</span>
                <a href="pdp-2.php" class="btn">Order Now</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-3.png" alt="">
                <h3>Lemon Chicken</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>&#8377;549</span>
                <a href="pdp-3.php" class="btn">Order Now</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-4.png" alt="">
                <h3>Pizza</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>&#8377;399</span>
                <a href="pdp-4.php" class="btn">Order Now</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-5.png" alt="">
                <h3>Fudge Stuffed cookie | Dairy queen</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>&#8377;499</span>
                <a href="pdp-5.php" class="btn">Order Now</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-6.png" alt="">
                <h3>Chicken Legs</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>&#8377;380</span>
                <a href="pdp-6.php" class="btn">Order Now</a>
            </div>
        </div>

    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about container" id="about">

        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.png" alt="">
            </div>

            <div class="content">
                <h3>best food in the city</h3>
                <p>The snack hack is a startup restaurant service company based in India. Our main focus is to change
                    the typical restaurant type and create an alternative option for who loves western food but in
                    Indian style. We are trying to reach our customers on the digital platform besides our flagship
                    outlets. We provide online services like taking orders, getting payments and many more.</p>
                <p><strong>WE SERVE FOOD WITH GOOD PURPOSE.</strong></p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu container" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h1 class="heading"> our speciality </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/menu-1.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>pizza</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-7.php" class="btn">Order now</a>
                    <span class="price">&#8377;399</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-2.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>whooper(Hamburger)</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-8.php" class="btn">Order Now</a>
                    <span class="price">&#8377;245</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-3.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Crêpe</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-9.php" class="btn">Order Now</a>
                    <span class="price">&#8377;450</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>waffle ice-cream</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-10.php" class="btn">Order Now</a>
                    <span class="price">&#8377;350</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>springberry cake</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-11.php" class="btn">Order Now</a>
                    <span class="price">&#8377;399</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>glacage cupcake</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-12.php" class="btn">Order Now</a>
                    <span class="price">&#8377;250</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cocktail</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-13.php" class="btn">Order Now</a>
                    <span class="price">&#8377;200</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-8.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Açaí na tigela</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="pdp-14.php" class="btn">Order Now</a>
                    <span class="price">&#8377;780</span>
                </div>
            </div>
        </div>

    </section>

    <!-- menu section ends -->

    <!-- review section starts  -->

    <section class="review container" id="review">

        <h3 class="sub-heading"> customer's review </h3>
        <h1 class="heading"> what they say </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-2.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-3.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-4.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus
                        aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis
                        laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->
    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container" style="justify-items: center;">

            <div class="box">
                <h3>locations</h3>
                <a href="https://goo.gl/maps/QzapGvis8BCpKWMA7">amritsar</a>
                <a href="https://goo.gl/maps/ajwcEdt4pP6VWzLK8">jandiala</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php">home</a>
                <a href="index.php">dishes</a>
                <a href="index.php">about</a>
                <a href="index.php">menu</a>
                <a href="index.php">reivew</a>
                <a href="index.php">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+91-7814889916</a>
                <a href="#">+91-8968944331</a>
                <a href="https://gmail.com">simarpreetsingh3613@gmail.com</a>
                <a href="https://gmail.com">animeshvig@gmail.com</a>
                <a href="https://goo.gl/maps/zV3HiL6UqnLfM4WeA">punjab, amritsar - 143001</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x"></i> facebook</a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter fa-2x"></i> twitter</a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i> instagram</a>
            </div>

        </div>

        <div class="credit"> Copyright &copy; 2022 -<span>the snack hack</span> </div>

    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>