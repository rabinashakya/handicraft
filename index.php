<?php include 'include/config.php'; ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Luja Handicraft</title>

        <!--CSS link-->
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:
            wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        
            <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        
            <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>

    <body>

        <!-- Navbar -->
        <header>
            <div class="logo">
                <div class="logo-header">
                    <img src="images_bg/lujaHandicraft-01.png" alt="logo">
                </div>
                <div class="logo-details">
                    <li>Manufacturer & Wholesaler</li>
                    <li>Showroom - Jyabahal-21, Kathmandu</li>
                    <li>Shop - Nardevi, Kathmandu</li>
                    <li>www.lujahandicraft.com</li>
                </div>
                <div class="nav">
                    <div class="login-form">
                        <a href="#"><i class='bx bxs-user'></i></a> 
            
                            <form action="">
                                <div>
                                    <label for="username">username</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                
                                <div>
                                    <label for="password">password</label>
                                    <input type="password" id="password" name="password">
                                </div>
                                <div class="button-container">
                                    <a href="#" class="btn">Login</a>
                                    <a href="register.html" class="btn">Register</a>
                                </div>
                                <div class="button-container">
                                    <button>Logout</button>
                                </div>
                            </form>
                        
                    </div>
                    <div class="cart">
                        <a href="#"><i class='bx bx-heart'><sup>0</sup></i></a>
                        <a href="#"><i class='bx bx-cart'><sup>0</sup></i></a>
                        
                    </div>
                    </div>
            </div>

        <div class="menu-bar">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="product.html">Products</a></li>
              <li><a href="categories.html">Categories<i class="bx bx-caret-down"></i></a>
                  <div class="dropdown-menu">
                      <ul>
                        <li><a href="woodenCrafts.html">Wooden Crafts</a></li>
                        <li><a href="glassStupas.html">Glass Stupas</a></li>
                        <li><a href="paperMask.html">Paper masks</a></li>
                        <li><a href="fixedBone.html">Fixed Bone Products</a></li>
                      </ul>
                    </div>
              </li>
              <li><a href="aboutUs.html">About Us</a>
              </li>
              <li><a href="contactUs.html">Contact us</a></li>
            </ul>
          </div>
        
        
    </header>
        <!-- Navbar -->

        <!-- home -->
        <section class="container" style="margin-top: 4rem;">
            <!-- carousel images -->
            <div class="carousel-container">
                <div class="carousel-item">
                    <img src="images_bg/6.png" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="images_bg/3.png" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="images_bg/2.png" alt="Image 5">
                </div>
                <div class="carousel-item">
                    <img src="images_bg/4.png" alt="Image 4">
                </div>
                <div class="carousel-item">
                    <img src="images_bg/7.png" alt="Image 7">
                </div>
                <div class="carousel-item">
                    <img src="images_bg/5.png" alt="Image 5">
                </div>
            </div> 
             <!-- slogan/description -->
             <div class="text-container">
                <h1>Hand Crafted</h1>
                <p>Fixed bone products, all kinds of Wooden Craft,
                        Glass Stupas, different kind of Golden Statues and Paper Mask
                        are available in wholesale price.  </p>
                <a href="#" class="btn">Shop Online</a>
            </div>
        </section>
        <!-- home -->

       <!-- categories -->
        <section id="categories" class="categories">
            <h2 class="heading">Categories</h2>
            
            <div class="categories-container">
                <div class="box">
                    <img src="images_bg/5.png" alt="images">
                    <h3>Wooden Crafts</h3>
                    <a href="woodenCrafts.html" class="btn">Shop Now</a>
                </div>
                
                <div class="box">
                    <img src="images_bg/11.png" alt="images">
                    <h3>Glass Stupas</h3>
                    <a href="glassStupas.html" class="btn">Shop Now</a>
                </div>

                <div class="box">
                    <img src="images_bg/10.png" alt="images">
                    <h3>Paper Masks</h3>
                    <a href="paperMask.html" class="btn">Shop Now</a>
                </div>

                <div class="box">
                    <img src="images_bg/5.png" alt="images">
                    <h3>Fixed Bone Products</h3>
                    <a href="fixedBone.html" class="btn">Shop Now</a>
                </div>
            
                
            </div>
            
        </section>
        <!-- categories -->


        <!-- products -->
        <section id="products" class="products">
            <h2 class="heading">Our Products</h2>
            
            <div class="swiper product-slider">

                <div class="swiper-wrapper">
                    <?php 
                         $product= "SELECT * FROM `product`";
                         $product_result = mysqli_query($con, $product);
                         if($product_result -> num_rows > 0){
                             for($i=0;$i<4;$i++){
                                $product_data = $product_result->fetch_assoc()
                                   
                    ?>
                    <div class="swiper-slide box">
                        <img src="images_bg/<?=$product_data['image']?>">
                        <h1><?=$product_data['product_title']?></h1>
                        <div class="price">Rs. <?=$product_data['product_price']?></div>
                        <a href="product-details.php?id=<?php echo $product_data['product_id']?>" class="btn">Shop Now</a>
                    </div>
                <?php 
                    }
                 }
                 ?>          
                   
                </div>
            </div>


                <div class="swiper product-slider">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide box">
                            <img src="images_bg/1.png">
                            <h1>Round Peacock</h1>
                            <div class="price">Rs. 2500</div>
                            <a href="#" class="btn">Shop Now</a>
                        </div>
    
                        <div class="swiper-slide box">
                            <img src="images_bg/3.png">
                            <h1>Round Peacock</h1>
                            <div class="price">Rs. 2500</div>
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                        <div class="swiper-slide box">
                            <img src="images_bg/8.png">
                            <h1>Round Peacock</h1>
                            <div class="price">Rs. 2500</div>
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                        <div class="swiper-slide box">
                            <img src="images_bg/9.png">
                            <h1>Round Peacock</h1>
                            <div class="price">Rs. 2500</div>
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- product -->

        
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="script.js"></script>


        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h2>Newsletters</h2>
                    <p>Sign up with your email to get updates about new products releases and special offers.</p>
                    <input type="text"placeholder="Your Email" class="email">
                    <input type="submit" class="btn">
                </div>
                
                <div class="box">
                    <h2>Contact Info</h2>
                    <a href="#" class="links"><i class="bx bx-phone"></i> 9841391930</a>
                    <a href="#" class="links"><i class="bx bx-phone"></i> 9841391930</a>
                    <a href="#" class="links"><i class="bx bx-envelope"></i>lujaHandicraft@gmail.com</a>
                    <a href="#" class="links"><i class="bx bx-map"></i>Nardevi, Kathmandu</a>
                    
                </div>

                <div class="box">
                    <h2>Quick Links</h2>
                        <a href="#" class="links"><i class="bx bxs-right-arrow"></i>FAQs</a></li>
                        <a href="#" class="links"><i class='bx bxs-right-arrow'></i>Shipping & Return Policy</a></li>
                        <a href="#" class="links"><i class='bx bxs-right-arrow'></i>Terms and Condition</a></li>
                        <a href="#" class="links"><i class='bx bxs-right-arrow'></i>Cashback Offer</a></li>
                        <a href="#" class="links"><i class='bx bxs-right-arrow'></i>My Account</a></li>
                     
                </div>

                <div class="box">
                    <h2>Secure Payment with</h2>
                    <img src="images/esewa_logo.png">
                    <img src="images/khalti.png">
                    <div class="pp">
                        <img src="images_bg/cc.png">
                    </div>
                    
                </div>
            
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Handicraft Shop. All rights reserved.</p>
            </div>
        </section>   

       
    </body>
    </html>