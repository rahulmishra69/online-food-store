<?php
  require('connection.inc.php');
    require('functtion.inc.php');
    $cat_res =mysqli_query($con, "SELECT * FROM categories where status=1 order by categories asc");
    $cat_arr=array();
    while($row=mysqli_fetch_assoc($cat_res))
    $cat_arr[]=$row;
?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;"  lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osm Food Store</title>
    <style>
    
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="nav-background">
         <div class="mobile-logo">
            <img src="./icons/logo.svg">
         </div>
         <div class="mobile-nav">
            <div class="cart">
                <div class="flex item-center">
                    <img src="./icons/cart-dark.svg">
                    <div><a href="user-login.php">Logout</a></div>
                </div>
            </div>
            
            <div class="nav-top">
                <ul>

                    <li>
                        <a href="indexx.php">Home</a>
                    </li>
                    <li>
                        <a href="#sail">Offer</a>
                    </li>
                    <li>
                        <a href="#subscribe">subscribe</a>
                    </li>
                    <li>
                        <a href="#rahul1">Products</a>
                    </li>
                    <li>
                        <a href="#rahul4">services</a>
                    </li>
                    <li>
                        <a href="#News">News</a>
                    </li>
                    <li>
                        <a href="#contact">contact</a>
                    </li>
                </ul>
            </div>

            <div class="contact flex item-center">
                <img src="./icons/phone.svg">
                <div>
                <h5>Call US: (+91) 9913 351 566</h5>
                    <h6>E mail:rahulmishra3865@gmail.com</h6>
                </div>
            </div>

            <div class="time flex item-center">
                <img src="./icons/clock.svg">
                <div>
                    <h5>Working Hours:</h5>
                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                </div>
            </div>
         </div>
        </div>

        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-bar-chart">
                <line x1="12" y1="20" x2="12" y2="10" />
                <line x1="18" y1="20" x2="18" y2="4" />
                <line x1="6" y1="20" x2="6" y2="16" /></svg>

            </div>
            <div class="site-content">

                <header style="background-color: #eebf00;" class="topbar">
                    <div class="container flex justify-between item-center">
                        <div class="icons">
                            <a style="text-align:center;position: relative; top: 0.7rem; " href="https://www.facebook.com/kishan.shukla.754570"><img src="./icons/facebook.svg"></a>
                            <a style="text-align:center; position: relative; top: 0.7rem;" href="https://www.google.com/"><img src="./icons/google.svg"></a>
                            <a style="text-align:center; position: relative; top: 0.7rem;" href="https://twitter.com/Kishan_shukla_?t=rhBMqy_DKNmX9T3biUNoPw&s=08"><img src="./icons/twitter.svg"></a>
                            <a style="text-align:center; position: relative; top: 0.7rem; " href="https://www.instagram.com/__rahul__mishra_01/"><img src="./icons/instagram.svg"></a>
                            <input name="search" style="outline: none; border: none; width: 80%; font-size: 1.1rem; position: relative; top: -1rem; left: 6rem; font-size: 12px; border-radius: 8px; padding: 0.28rem; padding-left: 1rem;" type="text" placeholder="type here......" class="search" id="search-item" onkeyup="search()"><img style="background-color: black;  position: relative; top: -0.50rem; border-top-right-radius: 10px;  border-bottom-right-radius: 10px; padding: 0.28rem; left: 5rem;" src="./icons/search.svg">                          
                        </div>
                        <div class="auth flex justify-between item-center">
                            <div>
                            <?php echo  $_SESSION['name']; ?>
                                <img onclick="window.location.href='myaccount.php';" style="cursor: pointer;" src="./icons/user-icon.svg">
                                <a href="user-login.php">Logout</a>
                               
                            </div> 
            
                        </div>
                    </div>
            
                </header>
                <!----header close-1-->
                <header class="top">
                    <div class="container flex justify-between item-center">
                        <div class="phone flex">
                            <img src="./icons/phone.svg">
                            <div>
                                <h5>Call US: (+91) 9913 351 566</h5>
                                <h6>E mail:rahulmishra3865@gmail.com</h6>
                            </div>
                        </div>
                        <div class="logo">
                            <img src="./icons/logo.svg">
                        </div>
                        <div class="clock flex">
                            <img src="./icons/clock.svg">
                            <div>
                                <h5>Working Hours:</h5>
                                <h6>Mon - Sat (8.00am - 12.00am)</h6>
                            </div>
                        </div>
                    </div>
            
                    <div class="navbar magic-hover">
                        <div class="container flex justify-center">
                            <a href="index.php" class="active">Home</a>
                            <a href="#sail">Offer</a>
                            <a href="#subscribe">Subscribe</a>
                            <a href="#rahul1">Products</a>
                            <a href="#rahul4">Services</a>
                            <a href="#News">News</a>
                            <a href="#contact">Contact</a>

                            <?php 
                                foreach($cat_arr as $list)
                                {
                                    ?> 
                                    <a href="category.php?id=<?php echo $list['id'] ?>"><?php echo $list['categories'] ?></a>
                                    <?php 
                                }
                            ?>
                         
                          </div>
            
                    </div>
                </header>
            
                <header class="hero flex item-center">
                    <div class="container">
            
                        <div class="welcome flex item-center">
                            <span>Welcome to</span>
                            <img src="./icons/logo-2.svg">
                        </div>
                        <h1>The World <span>Best</span> Food <span>Website</span></h1>
                        <h1 class="typewrite" data-period="1000" data-type='["Thank you for" , "Visiting my Website" , "To food-order"]'></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        <div>
                            <button onclick="window.location.href='food-btn.php';" class="btn btn-primary">Shop now</button>
                           
                        </div>
                        <div class="hero-image">
                            <img src="./images/straw.png">
                        </div>
                </div>
                </header>
                <section id="rahul1" class="top-products">
                    <div class="container">
                        <h2 class="heading">Letest Food</h2>
                        <div class="slider">
                      
                                <button class="slider-btn prev-btn"><img src="./icons/pre.svg"></button>
                                <button class="slider-btn next-btn"><img src="./icons/next.svg"></button>
                            <div id="food-slider" class="food-slider">
                               
                                <div onclick="window.location.href='new1.php';" style="width: 100px;" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-1.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Summer Salad</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
            
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 399</s></p>
                                            &#8377; 299 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
            
                                </div>
            
                                <div onclick="window.location.href='new2.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-2.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Russian Salad</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 349</s></p>
                                            &#8377; 299 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
            
                                <div onclick="window.location.href='new3.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-3.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Cottage pie</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 249</s></p>
                                            &#8377; 199 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
            
                                <div onclick="window.location.href='new4.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-4.jpg">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Greek Salad</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 199</s></p>
                                            &#8377; 149 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
            
                                <div onclick="window.location.href='new5.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-5.jpg">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Burger</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
                                            
                                            <p><s>&#8377; 149</s></p>
                                            &#8377; 99 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="window.location.href='new6.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-6.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Meggi</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
            
                                            <p><s>&#8377; 99</s></p>
                                            &#8377; 49 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="window.location.href='new7.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-7.jpg">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>South indian Dish</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
            
                                            <p><s>&#8377; 299</s></p>
                                            &#8377; 199 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="window.location.href='new8.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-8.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Pizza</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
            
                                            <p><s>&#8377; 249</s></p>
                                            &#8377; 149 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="window.location.href='new9.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-9.jpg">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Nudles</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                        </div>
                                        <div class="price">
            
                                            <p><s>&#8377; 99</s></p>
                                            &#8377; 49 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div onclick="window.location.href='new10.php';" class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/plate-10.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Chilli shake</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
            
                                            <p><s>&#8377; 99</s></p>
                                            &#8377; 49 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Buy now</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
            
                                
                            </div>
            
                        </div>
                        
                       <div onclick="window.location.href='food-btn.php';" class="btn-1 text-center">
                        <button class="btn btn-secondary">View more</button>
                       </div>
            
                    </div>
            
                </section>

             
            
                <section class="about-meal">
                    <div class="container">
                        <h2 class="heading">About Fresh Meal</h2>
                        <div class="meal flex">
                            <div class="meal-image flex-1">
                                <img src="./images/yogurt.png" width="350px">
                            </div>
                            <div class="meal-text flex-1">
                                <h1>
                                    Freshmeal is a long established fact that a reader will be distracted</h1>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden Sydney College in Virginia, The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    
                                </div>
                        </div>
                    </div>
            
                </section>

            
                <section id="rahul4" class="our-services">
                    <div class="container">
                        <h2 class="heading">Our services</h2>
                        <div class="service-card flex">
                            <div class="card magic-shadow">
                                <img class="content" src="./icons/transport.svg">
                                <h2>Free Home delivery</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                               
                            </div>
            
                            <div class="card magic-shadow">
                            <img class="content" width="20%" src="./icons/clock.svg">
                                <h2 style="color: #eebf00;">1 Hours Return Services</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              
                            </div>
            
                            <div class="card magic-shadow">
                                <img class="content" src="./icons/usd.svg">
                                <h2>Money Back Guaranted</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                               
                            </div>
            
                        </div>
            
                    </div>
            
                </section>
            
                <section id="sail" class="timer">
                    <h2 class="heading" style="color: aliceblue;">Big Deals of the Week</h2>
                    <div class="container">
                       <div class="box">
                        <div class="hours">
                            <h1 id="hours">8</h1>
                        </div>
                        <h3>Hours</h3>          
                       </div>
            
                       <div class="box">
                        <div class="minutes">
                            <h1 id="minutes">8</h1>
                        </div>
                        <h3>minutes</h3>          
                       </div>
            
                       <div class="box">
                        <div class="seconds">
                            <h1 id="seconds">8</h1>
                        </div>
                        <h3>seconds</h3>          
                       </div>
            
                       <div class="box">
                        <div class="amorpm">
                            <h1 id="amorpm">8</h1>
                        </div>
                        <h3>am or pm</h3>          
                       </div>
                       
                    </div>
                    <div onclick="window.location.href='scroll.php';" class="text-center p-top ">
                        <button class="btn btn-primary">Shop now</button>
                    </div>
                </section>
            
                
                <script src="./js/expert.js"></script>
            
                    <section id="News" class="letest-news">
                        <div class="container">
                            <h2 class="heading">Lastest News This Week</h2>
                            <div class="card flex">
                                <article class="artical-card  magic-shadow">
                                    <div class="card-image">
                                        <img src="./images/donut.jpg">
                                    </div>
                                    <div class="card-content">
                                        <div class="post-meta flex justify-between item-center"> 
                                            <span>December 28, 2021</span>
                                            <div>
                                                <span>Posted by <strong>FreshMeal</strong> </span>
                                                <span class="comment">12 Comments</span>
                                            </div>
                                        </div>
                                        <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
                                 
                                    </div>
                                  
                                </article>
            
                                <article class="artical-card magic-shadow">
                                    <div class="card-image">
                                        <img src="./images/coffee.jpg">
                                    </div>
                                    <div class="card-content">
                                        <div class="post-meta flex justify-between item-center"> 
                                            <span>Janurary 03, 2022</span>
                                            <div>
                                                <span>Posted by <strong>FreshMeal</strong> </span>
                                                <span class="comment">12 Comments</span>
                                            </div>
                                        </div>
                                        <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
                                 
                                    </div>
                                </article>
                            </div>
            
                            <div onclick="window.location.href='news.php';" class="text-center">
                                <button class="btn btn-secondary">Previous week </button>
                            </div>
                        </div>
                    </section>
            
                    <section id="subscribe" class="price-table">
                        <div class="container">
                            <h2 class="heading">Subscribe plan</h2>
                            
                            <div class="plan flex">
                                <div class="plan-detail flex-1 magic-shadow">
                                    <h2>Basic Plan</h2>
                                    <div class="price">
                                        <h3>2500 Per Month./</h3>
            
                                        <div class="basic-plan-detail">
                                            <p>Dall</p>
                                            <p>Rice</p>
                                            <p>Chapati</p>
                                            <p>Vegitables</p>
                                            <p>Salad</p>
            
                                            <button onclick="window.location.href='subscribe-plan.php';" class="btn btn-primary">Get Started</button>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="plan-detail-rahul flex-1 magic-shadow">
                                    <h2>Premium Plan</h2>
                                    <div class="price">
                                        <h3>3000 Per Month./</h3>
                                        <div class="basic-plan-detail">
                                            <p>Dall</p>
                                            <p>Basmati Rice</p>
                                            <p>Puri</p>
                                            <p>Vegitables</p>
                                            <p>Salad</p>
                                            <button onclick="window.location.href='subscribe-plan-2.php';" class="btn btn-secondary">Get Started</button>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="plan-detail flex-1 magic-shadow">
                                    <h2>Standred Plan</h2>
                                    <div class="price">
                                        <h3>3500 Per Month./</h3>
                                        <div class="basic-plan-detail">
                                            <p>Dall</p>
                                            <p>Basmati-Rice</p>
                                            <p>Aalu ka Paratha</p>
                                            <p>Two Vegitables</p>
                                            <p>Ice-creame</p>
                                            <button onclick="window.location.href='subscribe-plan-.php';" class="btn btn-primary">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </section>
            
                    <section id="contact" class="contact">
                        <div class="flex">
                            <div class="now flex-1">
                                <h2 class="heading">Contact us</h2>
                               <div class="mongo flex">
                                <img src="./icons/phone-2.svg">
                                <div>
                                    <h5>Call us:</h5>
                                    <h6>(+91) 9913 351 566</h6>
                                </div>
                               </div>
            
                               <div class="mongo flex">
                                <img src="./icons/email.svg">
                                <div>
                                    <h5>Email:</h5>
                                    <h6>rahulmishra3865@gmail.com</h6>
                                </div>
                               </div>
                                <div class="mongo flex">
                                    <img src="./icons/clock-2.svg">
                                    <div>
                                        <h5>Working Hours:</h5>
                                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                    </div>
                                </div>
                                <div class="container"><button onclick="window.location.href='query.php';" class="btn btn-primary">Send Msg</button></div>
                            </div>
                            <div class="map flex-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7556514.471994408!2d66.82168757197914!3d22.36479027631049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1643277595464!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </section>
            
                   <section class="footer">
                       <div class="container">
                           <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum passage.</p>
                            <button class="btn btn-secondary">Read more</button>
                        </div>
                           <div class="box">
                            <h3>Quik Links</h3>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#sail">Offer</a>
                                </li>
                                <li>
                                    <a href="#subscribe">Subscribe</a>
                                </li>
                                <li> 
                                    <a href="#rahul1">Products</a>
                                </li>
                                <li>
                                    <a href="#rahul4">Services</a>
                                </li>
                                <li>
                                    <a href="#News">News</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
            
                           </div>
                           <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/kishan.shukla.754570">
                                        <img src="./icons/facebook.svg">
                                        <span>facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/">
                                        <img src="./icons/google.svg">
                                        <span>google</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Kishan_shukla_?t=rhBMqy_DKNmX9T3biUNoPw&s=08">
                                        <img src="./icons/twitter.svg">
                                        <span>twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/__rahul__mishra_01/">
                                        <img src="./icons/instagram.svg">
                                        <span>instagram</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                           </div>
                             <div class="box instagram-api">
                                <h3>Instagram</h3>
                                <div class="post-wrap">
                                    <div>
                                        <img src="./images/food-table.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/coffee.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/donut.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/plate-5.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/donut.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/food-table.jpg">
                                    </div>
            
                                </div>
            
                           </div>
            
                       </div> 
            
                   </section>
                   <footer class="copyright">
                    <div>
                        Created by <a href="#">Rahul mishra , Kishan Shukla </a>
                    </div>
                   </footer>

            </div>

        </div>
    </div>
    <script type="text/javascript" src="./search.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>
    <script type="text/javascript" src=".//js/external.js"></script>
   
</body>
</html>





