<?php
					
    $conn = mysqli_connect("127.0.0.1", "root", "", "registration_database");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
		if(isset($_POST['submit']))
        {
            
        $email = $_POST['email'];
		$password = $_POST['psw'];
		}

         
        // Performing insert query execution
        // here our table name is registered_user
        $sql = "INSERT INTO registered_users (email,psw)VALUES
		('$email','$password')";
     
        if(mysqli_query($conn, $sql))
        {
          
 
        } else{
            echo "ERROR: Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wrapshop - They wish you gift</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./style-prefix.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="overlay" data-overlay></div>
  <div class="header-main">
    <div class="container">
      <a href="#" class="header-logo">
        <img src="./Img/Wrap.png" alt="Wrap Shop logo" width="140" height="52">
      </a>
      <div class="header-search-container">
        <input type="search" name="search" class="search-field" placeholder="Enter your wish here...">
        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>
      <div class="header-user-actions">
        <a href="login.html" class="action-btn">
          <ion-icon name="person-outline"></ion-icon>
        </a>
        <a href="whishlist.html" class="action-btn">
          <ion-icon name="heart-outline"></ion-icon>
          <span class="count">0</span>
        </a>
        <a href="cart.html" class="action-btn">
          <ion-icon name="bag-handle-outline"></ion-icon>
          <span class="count">0</span>
        </a>
      </div>
    </div>
  </div>
  <nav class="desktop-navigation-menu">
    <div class="container">
      <ul class="desktop-menu-category-list">
        <li class="menu-category">
          <a href="index.html" class="menu-title">Home</a>
        </li>
        <li class="menu-category">
          <a href="productspage.html" class="menu-title">Occasion</a>
          <div class="dropdown-panel">
            <ul class="dropdown-panel-list">
              <li class="menu-title">
                <a href="#">Party</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Office Party</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Farewell Party</a>
              </li>
              <li class="panel-list-item">
                <a href="#">House Party</a>
              </li>
              <li class="panel-list-item">
                <a href="#">New Year Party</a>
              </li>
              <li class="panel-list-item">
                <a href="#">
                  <img src="./Img/1.png" alt="office party" width="250" height="119">
                </a>
              </li>
            </ul>
            <ul class="dropdown-panel-list">
              <li class="menu-title">
                <a href="#">Anniversary</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Wedding Anniversary</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Relationship Anniversary</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Job Anniversary</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Organisation Anniversary</a>
              </li>
              <li class="panel-list-item">
                <a href="#">
                  <img src="./Img/2.png" alt="Anniversary Gifts" width="250" height="119">
                </a>
              </li>
            </ul>
            <ul class="dropdown-panel-list">
              <li class="menu-title">
                <a href="#">Birthday</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Friend's Birthday</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Mom's Birthday</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Dad's Birthday</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Partner's Birthday</a>
              </li>
              <li class="panel-list-item">
                <a href="#">
                  <img src="./Img/3.png" alt="Birthday Gifts" width="250" height="119">
                </a>
              </li>
            </ul>
            <ul class="dropdown-panel-list">
              <li class="menu-title">
                <a href="#">Special Days</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Valentines Day</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Mothers Day</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Fathers Day</a>
              </li>
              <li class="panel-list-item">
                <a href="#">Teachers Day</a>
              </li>
              <li class="panel-list-item">
                <a href="#">
                  <img src="./Img/4.png" alt="Special Days" width="250" height="119">
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="menu-category">
          <a href="forhim.html" class="menu-title">For Him</a>
          <ul class="dropdown-list">
            <li class="dropdown-item">
              <a href="forhim.html">Wearables </a>
            </li>
            <li class="dropdown-item">
              <a href="forhim.html">Illustrations</a>
            </li>
            <li class="dropdown-item">
              <a href="forhim.html">Greeting Cards </a>
            </li>
            <li class="dropdown-item">
              <a href="forhim.html">Accessories </a>
            </li>
          </ul>
        </li>
        <li class="menu-category">
          <a href="forher.html" class="menu-title">For Her</a>
          <ul class="dropdown-list">
            <li class="dropdown-item">
              <a href="forher.html">Wearables </a>
            </li>
            <li class="dropdown-item">
              <a href="forher.html">Illustrations </a>
            </li>
            <li class="dropdown-item">
              <a href="forher.html">Greeting Cards </a>
            </li>
            <li class="dropdown-item">
              <a href="forher.html">Accessories </a>
            </li>
          </ul>
        </li>
        <li class="menu-category">
          <a href="kids.html" class="menu-title">Kids</a>
          <ul class="dropdown-list">
            <li class="dropdown-item">
              <a href="kids.html">Wearables: <b>5 to 15 yrs</b></a>
            </li>
            <li class="dropdown-item">
              <a href="kids.html">Illustrations for Kids</a>
            </li>
            <li class="dropdown-item">
              <a href="kids.html">Greeting Cards for Kids</a>
            </li>
            <li class="dropdown-item">
              <a href="kids.html">Accessories and other</a>
            </li>
          </ul>
        </li>
        <li class="menu-category">
          <a href="faq.html" class="menu-title">FAQ</a>
        </li>
        <li class="menu-category">
          <a href="#" class="menu-title">Deal of the day</a>
          <ul class="dropdown-list">
            <li class="dropdown-item">
              <a href="#">Deal product</a>
            </li>
            <li class="panel-list-item">
              <a href="#">
                <img src="./Img/Deal.png" alt="Special Days" width="400" height="220">
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="mobile-bottom-navigation">
    <button class="action-btn" data-mobile-menu-open-btn>
      <ion-icon name="menu-outline"></ion-icon>
    </button>
    <button class="action-btn">
      <ion-icon name="bag-handle-outline"></ion-icon>
      <span class="count">0</span>
    </button>

    <button class="action-btn">
      <ion-icon name="home-outline"></ion-icon>
    </button>

    <button class="action-btn">
      <ion-icon name="heart-outline"></ion-icon>

      <span class="count">0</span>
    </button>

    <button class="action-btn" data-mobile-menu-open-btn>
      <ion-icon name="grid-outline"></ion-icon>
    </button>

  </div>

  <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

    <div class="menu-top">
      <h2 class="menu-title">Menu</h2>

      <button class="menu-close-btn" data-mobile-menu-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button>
    </div>

    <ul class="mobile-menu-category-list">

      <li class="menu-category">
        <a href="#" class="menu-title">Home</a>
      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Men's</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Shirt</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Shorts & Jeans</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Safety Shoes</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Wallet</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Women's</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Dress & Frock</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Earrings</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Necklace</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Makeup Kit</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Jewelry</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Earrings</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Couple Rings</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Necklace</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Bracelets</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Perfume</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Clothes Perfume</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Deodorant</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Flower Fragrance</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Air Freshener</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Blog</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Hot Offers</a>
      </li>

    </ul>

    <div class="menu-bottom">

      <ul class="menu-category-list">

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Language</p>

            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">English</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Espa&ntilde;ol</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Fren&ccedil;h</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Currency</p>
            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">USD &dollar;</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">EUR &euro;</a>
            </li>
          </ul>
        </li>

      </ul>

      <ul class="menu-social-container">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </nav>

  </header>





  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="gift.jpeg" alt="Polaroid Sale" class="banner-img">

            <div class="banner-content">
              <a href="login.html" class="banner-btn">Shop now </a>
              <!change shop now button position here>
            </div>

          </div>

          <div class="slider-item">

            <img src="./Img/b2.png" alt="Custom Products" class="banner-img">

            <div class="banner-content">

              <a href="login.html" class="banner-btn">Shop now</a>
              <! change shop now button position here>

            </div>

          </div>

          <div class="slider-item">

            <img src="./Img/b3.png" alt="Happy Customers" class="banner-img">

            <div class="banner-content">

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->







    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./Img/download.png" alt="clothes" width="20" height="20" class="menu-title-img">

                    <p class="menu-title">Wearables</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Him</p>
                      <data value="300" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Her</p>
                      <data value="60" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kids</p>
                      <data value="50" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                </ul>

              </li>





              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./Img/Vector.jpg" alt="vector" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Vector Illustrations</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Him</p>
                      <data value="50" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Her</p>
                      <data value="48" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Kids</p>
                      <data value="48" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                </ul>

              </li>


              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./Img/Card.png" alt="Greeting Cards" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Greeting Cards</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Him</p>
                      <data value="50" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Her</p>
                      <data value="48" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Kids</p>
                      <data value="48" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                </ul>

              </li>
              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./Img/bag.svg" alt="Kids" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Accessories</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Him</p>
                      <data value="68" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">For Her</p>
                      <data value="46" class="stock" title="Available Stock"></data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kids</p>
                      <data value="79" class="stock" title="Available Stock"></data>
                    </a>
                  </li>



                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="product.html" class="showcase-img-box">
                    <img src="./forhim/4.png" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="product.html">
                      <h4 class="showcase-title">Fathers Day Card</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">

                      <del>₹250</del>
                      <p class="price">₹199</p>

                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="product.html" class="showcase-img-box">
                    <img src="./forhim/2.png" alt="men's hoodies t-shirt" class="showcase-img" width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="product.html">
                      <h4 class="showcase-title">men's hoodies t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹2499</del>
                      <p class="price">₹1499</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="product.html" class="showcase-img-box">
                    <img src="./forhim/7.png" alt="girls t-shirt" class="showcase-img" width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="product.css">
                      <h4 class="showcase-title">Hand Bracelet Custom</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹2000</del>
                      <p class="price">₹1299</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="product.html" class="showcase-img-box">
                    <img src="./forhim/Toast.webp" alt="woolen hat for men" class="showcase-img" width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="product.html">
                      <h4 class="showcase-title">woolen hat for men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹200</del>
                      <p class="price">₹149</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">For Him</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./Img/p1.png" alt="Custom Birthday Year T-Shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Custom Birthday Year T-Shirt</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">₹449</p>
                        <del>₹599</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./Img/p2.png" alt="Custom T shirt" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Custom Print T-shirt</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">₹399</p>
                        <del>₹499</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-3.jpg" alt="black floral wrap midi skirt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$76.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Mens Fashion</a>

                      <div class="price-box">
                        <p class="price">$68.00</p>
                        <del>$31.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$11.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-1.jpg" alt="mens winter leathers jackets"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$32.00</p>
                        <del>$20.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-3.jpg" alt="mens winter leathers jackets"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Jackets</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Shorts</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">For Her</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/sports-1.jpg" alt="running & trekking shoes - white"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$49.00</p>
                        <del>$15.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/sports-2.jpg" alt="trekking & running shoes - black"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$78.00</p>
                        <del>$36.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/party-wear-1.jpg" alt="womens party wear shoes"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Party wear</a>

                      <div class="price-box">
                        <p class="price">$94.00</p>
                        <del>$42.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/sports-3.jpg" alt="sports claw women's shoes"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$54.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$52.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>

                      <a href="product.html" class="showcase-category">boots</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>

                      <a href="product.html" class="showcase-category">formal</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Casual</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Kids</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/watch-3.jpg" alt="pocket watch leather pouch"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$34.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-3.jpg" alt="silver deer heart necklace"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Jewellery</a>

                      <div class="price-box">
                        <p class="price">$84.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/perfume.jpg" alt="titan 100 ml womens perfume"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Perfume</a>

                      <div class="price-box">
                        <p class="price">$42.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/belt.jpg" alt="men's leather reversible belt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Belt</a>

                      <div class="price-box">
                        <p class="price">$24.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                      </a>

                      <a href="product.html" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$62.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Smart watche Vital Plus</h4>
                      </a>

                      <a href="product.html" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/shampoo.jpg" alt="shampoo conditioner packs"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">shampoo conditioner packs</h4>
                      </a>

                      <a href="product.html" class="showcase-category">cosmetics</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="product.html" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="product.html">
                        <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>

                      <a href="product.html" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <!--
            - PRODUCT FEATURED
          -->


          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./forhim/4.png" alt="Fathers Day Card" width="300" class="product-img default" height="400">
                  <img src="./forhim/4.png" alt="Fathers Day Card" width="300" class="product-img hover" height="400">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Cards</a>

                  <a href="#">
                    <h3 class="showcase-title">Cards</h3>
                  </a>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹249</p>
                    <del>₹450</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/5.png" alt="Wallet Card" class="product-img default" width="300" height="400">
                  <img src="./forhim/5.png" alt="Wallet Card" class="product-img hover" width="300" height="400">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">wallet</a>

                  <h3>
                    <a href="#" class="showcase-title">Wallet card</a>
                  </h3>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹199</p>
                    <del>₹250</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/2.png" alt="Men Solid Black hood " class="product-img default" width="300"
                    height="400">
                  <img src="./forhim/2.png" alt="Men Solid Black hood" class="product-img hover" width="300"
                    height="400">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Jacket</a>

                  <h3>
                    <a href="#" class="showcase-title">Men Solid Black hood</a>
                  </h3>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹1499</p>
                    <del>₹2500</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/3.png" alt="Personalised Bday card" class="product-img default" width="300"
                    height="400">
                  <img src="./forhim/3.png" alt="Personalised Bday card" class="product-img hover" width="300"
                    height="400">

                  <p class="showcase-badge angle pink">new</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Card</a>

                  <h3>
                    <a href="#" class="showcase-title">Personalised Bday card</a>
                  </h3>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹249</p>
                    <del>₹350</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/1.png" alt="Marvel spidey tee" class="product-img default" width="300"
                    height="400">
                  <img src="./forhim/1.png" alt="Marvel spidey tee" class="product-img hover" width="300" height="400">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">TEE</a>

                  <h3>
                    <a href="#" class="showcase-title">Marvel spidey tee</a>
                  </h3>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹499</p>
                    <del>₹606</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/6.png" alt="Handmade sketch" class="product-img default" width="300" height="400">
                  <img src="./forhim/6.png" alt="Handmade sketch" class="product-img hover" width="300" height="400">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">sketch</a>

                  <h3>
                    <a href="#" class="showcase-title">Handmade sketch</a>
                  </h3>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹399</p>
                    <del>₹599</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/7.png" alt="Hand Bracelet" class="product-img default" width="300" height="400">
                  <img src="./forhim/7.png" alt="Hand Bracelet" class="product-img hover" width="300" height="400">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">accessories</a>

                  <h3>
                    <a href="#" class="showcase-title">Hand Bracelet</a>
                  </h3>

                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">₹1299</p>
                    <del>₹1399</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./forhim/8.png" alt="Vector art illustration" class="product-img default" width="300"
                    height="400">
                  <img src="./forhim/8.png" alt="Vector art illustration" class="product-img hover" width="300"
                    height="400">

                  <p class="showcase-badge angle black">vector</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="login.html" class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </a>
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">vector</a>
                  <h3>
                    <a href="#" class="showcase-title">Vector art</a>
                  </h3>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <div class="price-box">
                    <p class="price">₹599</p>
                    <del>₹799</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--
    - FOOTER
  -->
  <footer>
    <div class="footer-nav">
      <div class="container">
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Valentines Day</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Greeting Cards</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mothers Day</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Women's Day</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Custom Gifts</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Gift Cards</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Artist collection</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Artisan Collaboration</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <address class="content">
              XYZ Road
              New Delhi(DL), 110015, INDIA
            </address>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+91 601-301-9999" class="footer-nav-link">(+91) 123-456-7890</a>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:wrapshop@gmail.com" class="footer-nav-link">wrapshop@gmail.com</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">
        <p class="copyright">
          Copyright &copy; <a href="#">wrapshop</a> all rights reserved.
        </p>
      </div>
    </div>
  </footer>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
