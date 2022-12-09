<!--   https://zeno.computing.dundee.ac.uk/2022-ac32006/euanwest/Databases-Project--Website-main/   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternate Take - Home</title>

    <!-- Bootstrap stuff -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!--Custom stylesheet-->
    <link rel="stylesheet" href="./css/main.css">
</head>

<header>
    <div class="row align-items-start" style="margin-right: 0px">
        <div class="col-3">
            <a href="#"><img src="./media/img/image.png" alt="Alternate Take company banner" class="img-fluid"></a>
        </div>
        <div class="col-6 align-self-center text-center">
            <h1>ALTERNATE TAKE</h1>
        </div>
        <div class="col align-self-end"></div>
    </div>
</header>

<body>
    <head>
    <!--NAV BAR-->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Stores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" aria-expanded="false">
                            About Us
                            </a>
                        </li>
                    </ul>
                    
                    <form class="d-flex" role="search">
                      <div class="col-xs-12 col-md-auto d-flex flex-row-reverse mx-md-5">
                          <button class="btn btn-light" type="submit">Login</button>
                      </div>
                    </form>

                    <form class="d-flex">
                
                      <button id="btn-basket" class="btn" type="button" aria-label="basket" data-bs-toggle="modal" data-bs-target="#modal_checkout">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 588 524"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="modal_checkout" tabindex="-1" aria-labelledby="checkout-modal-label" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="checkout-modal-label">Checkout</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div id="checkout-modal-body row" class="modal-body" style="height:450px; overflow-y:scroll;">
                                      <p class="placeholder-text">*cricket noises*</p>
                                      <p class="placeholder-text">No items added</p>
                                      <ul id="basket-list" class="list-group input-group">
                                          <!-- JS script adds here.... -->
                                      </ul>
                                  </div>
                                  <div id="modal-total-price" style="margin-left:1.5%;">
                                      <p id="total-price"><b>Total</b>: £ 0.00</p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" onclick="checkOutBasket(this)" id="btn-checkout" class="btn btn-primary">Checkout</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>

                </div>
            </div>
        </nav>
    </head>

    <div class="container-fluid">
        <div class="container-fluid">
            <!-- Header -->
            <div class="row align-items-start">
                <h5>Search/Sort</h5>
            </div>

            <div class="row">
                <!-- Search Bar -->
                <div class="search-query col-xs-12 col-md-3">
                    <form class="search bar d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>

                <!-- Music type dropdown -->
                <div class="search-query col-xs-6 col-md-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Music Type <!--Reactive to choice-->
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Rock</a></li>
                        <li><a class="dropdown-item" href="#">Classical</a></li>
                        <li><a class="dropdown-item" href="#">Jazz</a></li>
                        <li><a class="dropdown-item" href="#">Pop</a></li>
                        <li><a class="dropdown-item" href="#">Punk Rock</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Format dropdown  -->
                <div class="search-query col-xs-6 col-md-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Format <!--Reactive to choice-->
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">CD</a></li>
                        <li><a class="dropdown-item" href="#">Vynil</a></li>
                        <li><a class="dropdown-item" href="#">Digital</a></li>
                        <li><a class="dropdown-item" href="#">Cassette</a></li>
                        <li><a class="dropdown-item" href="#">Music Box</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Order by dropdown -->
                <div class="search-query col-xs-6 col-md-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Order by <!--Reactive to choice-->
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Recent</a></li>
                        <li><a class="dropdown-item" href="#">Ascending</a></li>
                        <li><a class="dropdown-item" href="#">Descending</a></li>
                        <li><a class="dropdown-item" href="#">Least Recent</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!--Gallery to show featured products-->
        <div class="contents row">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <?php

                        //Initialise Variables
                        $output = array();
                        include ('db.php');// conect to database script
                        $query = 
                        "
                          SELECT productID, productName, retailPrice, artist, musicFormat
                          FROM product 
                          LEFT JOIN musicspec
                          ON product.catNo = musicspec.catNo
                          ORDER BY RAND()
                          lIMIT 5;
                        ";
                        $result = mysqli_query($mysql, $query);

                        //append results to array
                        while ($row = mysqli_fetch_array($result))
                        {
                          array_push($output, $row);
                        }
                        
                        //Start writing carousel
                        echo
                        "
                          <div id='carouselBig' class='carousel slide' data-bs-ride='false'>
                          <div class='carousel-indicators'>
                            <button type='button' data-bs-target='#carouselBig' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
                            <button type='button' data-bs-target='#carouselBig' data-bs-slide-to='1' aria-label='Slide 2'></button>
                            <button type='button' data-bs-target='#carouselBig' data-bs-slide-to='2' aria-label='Slide 3'></button>
                            <button type='button' data-bs-target='#carouselBig' data-bs-slide-to='3' aria-label='Slide 4'></button>
                            <button type='button' data-bs-target='#carouselBig' data-bs-slide-to='4' aria-label='Slide 5'></button>
                          </div>
                          <div class='carousel-inner'>
                            <div class='carousel-item active'>
                              <img src='.\media\img\productImages\\".$output[0]["productID"].".jpg' class='d-block w-100' style='width:750px; height: 750px;' alt='Image of Featured'>
                              <div class='carousel-caption d-none d-md-block bg-danger bg-opacity-50 ' >
                                <h5>".$output[0]["productName"]."</h5>
                        ";
                        if (is_null($output[0]["artist"]))
                        {
                          echo "<p style='font-align: center;'>Price: £".$output[0]["retailPrice"]."</p>";
                        }
                        else
                        {
                          echo "<p style='font-align: center;'>Artist: ".$output[0]["artist"].", Format: ".$output[0]["musicFormat"].", Price: £".$output[0]["retailPrice"]."</p>";
                        }
                        echo
                        "     
                            </div>
                          </div>
                        ";
                        for ($i = 1; $i <= 4; $i++)
                        {
                          echo
                          "
                            <div class='carousel-item'>
                              <img src='.\media\img\productImages\\".$output[$i]["productID"].".jpg' class='d-block w-100' style='width:750px; height: 750px;' alt='Image of Featured'>
                              <div class='carousel-caption d-none d-md-block bg-danger bg-opacity-50'>
                                <h5>".$output[$i]["productName"]."</h5>
                          ";
                              if (is_null($output[$i]["artist"]))
                              {
                                echo "<p style='font-align: center;'>Price: £".$output[$i]["retailPrice"]."</p>";
                              }
                              else
                              {
                                echo "<p style='font-align: center;'>Artist: ".$output[$i]["artist"].", Format: ".$output[$i]["musicFormat"].", Price: £".$output[$i]["retailPrice"]."</p>";
                              }
                          echo 
                          "
                              </div>
                            </div>
                          ";
                        }
                        echo 
                        "
                          </div>
                          <button class='carousel-control-prev' type='button' data-bs-target='#carouselBig' data-bs-slide='prev'>
                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                            <span class='visually-hidden'>Previous</span>
                          </button>
                          <button class='carousel-control-next' type='button' data-bs-target='#carouselBig' data-bs-slide='next'>
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                            <span class='visually-hidden'>Next</span>
                          </button>
                        </div>
                        ";
                    ?>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <!-- GAllery to show best sellin products -->
        <div class="contents row">
        <div class="row">
          <div class="col-2"></div>
            <div class="col-3">
              <h5>Top Selling Music</h5>
              <?php
                        
                //Initialise Variables
                $productIDs = array();
                $productNames = array();
                $productPrices = array();
                include ('db.php');// conect to database script
                $topSellingMusic = 
                "
                  SELECT product.productID, productName, retailPrice, COUNT(salestock.quantity) AS total
                  FROM product, salestock, stock
                  WHERE product.productID = stock.productID AND stock.stockID = salestock.stockID AND product.productType = 'music'
                  GROUP BY productID
                  order by total DESC
                  lIMIT 3;
                ";
                $result = mysqli_query($mysql, $topSellingMusic);

                // append results from query to array
                while ($row = mysqli_fetch_array($result))
                {
                  array_push($productIDs, $row["productID"]);
                  array_push($productNames, $row["productName"]);
                  array_push($productPrices, $row["retailPrice"]);
                }

                // Echo HTML to display gallary
                echo
                "
                  <div id='carouselSmall1' class='carousel slide' data-bs-ride='false'>
                    <div class='carousel-indicators'>
                      <button type='button' data-bs-target='#carouselSmall1' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
                      <button type='button' data-bs-target='#carouselSmall1' data-bs-slide-to='1' aria-label='Slide 2'></button>
                      <button type='button' data-bs-target='#carouselSmall1' data-bs-slide-to='2' aria-label='Slide 3'></button>
                    </div>
                    <div class='carousel-inner'>
                      <div class='carousel-item active'>
                        <img src='.\media\img\productImages\\$productIDs[0].jpg' class='d-block w-100' alt='picture of product' style='width:300px; height:300px;'>
                        <div class=' d-none d-md-block bg-danger bg-opacity-50 ' >
                          <h5 style='font-align: center;'>$productNames[0]</h5>
                          <p style='font-align: center;'>£$productPrices[0]</p>
                        </div>
                      </div>
                      <div class='carousel-item'>
                        <img src='.\media\img\productImages\\$productIDs[1].jpg' class='d-block w-100' alt='picture of product' style='width:300px; height:300px;'>
                        <div class=' d-none d-md-block bg-danger bg-opacity-50'>
                          <h5 style='font-align: center;'>$productNames[1]</h5>
                          <p style='font-align: center;'>£$productPrices[1]</p>
                        </div>
                      </div>
                      <div class='carousel-item'>
                        <img src='.\media\img\productImages\\$productIDs[2].jpg' class='d-block w-100' alt='picture of product' style='width:300px; height:300px;'>
                        <div class=' d-none d-md-block bg-danger bg-opacity-50'>
                          <h5 style='font-align: center;'>$productNames[2]</h5>
                          <p style='font-align: center;'>£$productPrices[2]</p>
                        </div>
                      </div>
                    </div>
                    <button class='carousel-control-prev' type='button' data-bs-target='#carouselSmall1' data-bs-slide='prev'>
                      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                      <span class='visually-hidden'>Previous</span>
                    </button>
                    <button class='carousel-control-next' type='button' data-bs-target='#carouselSmall1' data-bs-slide='next'>
                      <span class='carousel-control-next-icon' aria-hidden='true'></span>
                      <span class='visually-hidden'>Next</span>
                    </button>
                  </div>
                ";

                mysqli_free_result($result);
                mysqli_close($mysql);
              ?>
            </div>

            <!-- Gallery for Most Whislisted Products -->
            <div class="col-2"></div>
              <div class="col-3">
                <h5>Most Wish Listed Items</h5>
                <?php

                  //Initialise Variables
                  $IDs = array();
                  $names = array();
                  $prices = array();
                  include ('db.php');// connect Database script
                  $topWishListedMusic = 
                  "
                    SELECT product.productID, ProductName, retailPrice, COUNT(wishlistproduct.quantity) AS total
                    FROM product, wishlistproduct
                    WHERE wishlistproduct.productID = product.productID 
                    GROUP BY productID
                    ORDER BY total DESC
                    lIMIT 3;
                  ";
                  $result = mysqli_query($mysql, $topWishListedMusic);

                  // append results from query to arrays,
                  while ($row = mysqli_fetch_array($result))
                  {
                    array_push($IDs, $row["productID"]);
                    array_push($names, $row["ProductName"]);
                    array_push($prices, $row["retailPrice"]);
                  }

                  echo
                  "
                    <div id='carouselSmall2' class='carousel slide' data-bs-ride='false'>
                    <div class='carousel-indicators'>
                      <button type='button' data-bs-target='#carouselSmall2' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
                      <button type='button' data-bs-target='#carouselSmall2' data-bs-slide-to='1' aria-label='Slide 2'></button>
                      <button type='button' data-bs-target='#carouselSmall2' data-bs-slide-to='2' aria-label='Slide 3'></button>
                    </div>
                    <div class='carousel-inner'>
                      <div class='carousel-item active'>
                        <img src='.\media\img\productImages\\$IDs[0].jpg' class='d-block w-100' alt='picture of $names[0]' style='width:300px; height:300px;'>
                        <div class=' d-none d-md-block bg-danger bg-opacity-50 ' >
                          <h5 style='font-align: center;'>$names[0]</h5>
                          <p style='font-align: center;'>£$prices[0]</p>
                        </div>
                      </div>
                      <div class='carousel-item'>
                        <img src='.\media\img\productImages\\$IDs[1].jpg' class='d-block w-100' alt='picture of $names[1]' style='width:300px; height:300px;'>
                        <div class='d-none d-md-block bg-danger bg-opacity-50'>
                          <h5 style='font-align: center;'>$names[1]</h5>
                          <p style='font-align: center;'>£$prices[1]</p>
                        </div>
                      </div>
                      <div class='carousel-item'>
                        <img src='.\media\img\productImages\\$IDs[2].jpg' class='d-block w-100' alt='picture of $names[2]' style='width:300px; height:300px;'>
                        <div class=' d-none d-md-block bg-danger bg-opacity-50'>
                          <h5 style='font-align: center;'>$names[2]</h5>
                          <p style='font-align: center;'>£$prices[2]</p>
                        </div>
                      </div>
                    </div>
                    <button class='carousel-control-prev' type='button' data-bs-target='#carouselSmall2' data-bs-slide='prev'>
                      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                      <span class='visually-hidden'>Previous</span>
                    </button>
                    <button class='carousel-control-next' type='button' data-bs-target='#carouselSmall2' data-bs-slide='next'>
                      <span class='carousel-control-next-icon' aria-hidden='true'></span>
                      <span class='visually-hidden'>Next</span>
                    </button>
                  </div>
                  ";
                ?>
                </div>
                <div class="col-2"></div>
              </div>
            </div>

      <div class="row">
        <div class="footer col-12 text-center">
          <p>Created by: </p>
          <p class="footer-copyrright">&copy; Caitlin Ridge-Sykes, Daniel Ferrier, Euan West, Kamil Krauze, Toms Popdjakuniks, Vera Borvinski</p>
        </div>
    </div>
  </div>
</body>

</html>