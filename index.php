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
                        <button class="btn btn-light" type="submit">Login</button>
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

                <!-- Sort by dropdown -->
                <div class="search-query col-xs-6 col-md-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort by <!--Reactive to choice-->
                        </button>
                        <ul id="checkbox-dropdown" class="dropdown-menu checkbox-menu allow-focus">
                            <div class="row">
                                <li class="col-xs-5 col-sm-4">
                                    <input type="checkbox"> Category No.
                                </li>
                                <li class="col-xs-5 col-sm-4">
                                    <input type="checkbox"> Title
                                </li>
                                <li class="col-xs-5 col-sm-4">
                                    <input type="checkbox"> Artist
                                </li>
                            </div>
                            <div class="row">
                                <li class="col-4">
                                    <input type="checkbox"> Label
                                </li>
                                <li class="col-4">
                                    <input type="checkbox"> Year
                                </li>
                                <li class="col-4">
                                    <input type="checkbox"> Price
                                </li>
                            </div>

                            <div class="row">
                                <li>
                                    <button type="button" class="btn btn-info">Reset</button>
                                </li>
                            </div>
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
                        echo
                        '
                        <div id="carouselBig" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselBig" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselBig" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselBig" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://i.picsum.photos/id/609/600/300.jpg?hmac=ReCZwP7Cl1ArvB2Ian1R3I6LFub0xk55P1wu_-5toi8" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-danger bg-opacity-50 " >
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.picsum.photos/id/602/1000/500.jpg?hmac=445kr9w7gsS3vMlbXggYHC-uI6Rt-9FYMyOccPP7o0Y" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-danger bg-opacity-50">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.picsum.photos/id/276/1000/500.jpg?hmac=ktb25tDHaquYFYMRE0eYeiW234D1fJ2ciCiXdCXPZ_Y" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-danger bg-opacity-50">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBig" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselBig" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                        '
                    ?>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <div class="contents row">
        <div class="row">
            <div class="col-2"></div>
                <div class="col-3">
                    <?php
                        $database = "alternateTake"
                        $topThree = array()
                        include ('')//Put location of database connect script here
                        $topSellingMusic = 
                        "
                          SELECT productName, retailPrice, COUNT(salestock.quantity) AS total
                          FROM product, salestock, stock
                          WHERE product.productID = stock.productID AND stock.stockID = salestock.stockID AND product.productType = "music"
                          GROUP BY productName
                          order by total DESC;
                        "
                        $result = mysqli_query($mysql, $topSellingMusic)

                        // append top three results from query to array, to 2D array
                        $counter = 0
                        while ($row = mysqli_fetch_array($result) and $counter >=2)
                        {
                          array_push($topThree, $row)
                          $counter++
                        }

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
                            <img src='".$topThree[0][0].".png' class='d-block w-100' alt='picture of product'>
                            <div class=' d-none d-md-block bg-danger bg-opacity-50 ' >
                              <h5>".$topThree[0][0]."</h5>
                              <p>£".$topThree[0][1]."</p>
                            </div>
                          </div>
                          <div class='carousel-item'>
                            <img src='".$topThree[1][0].".png' class='d-block w-100' alt='picture of product'>
                            <div class=' d-none d-md-block bg-danger bg-opacity-50'>
                            <h5>".$topThree[1][0]."</h5>
                            <p>£".$topThree[1][1]."</p>
                            </div>
                          </div>
                          <div class='carousel-item'>
                            <img src='".$topThree[2][0].".png' class='d-block w-100' alt='picture of product'>
                            <div class=' d-none d-md-block bg-danger bg-opacity-50'>
                            <h5>".$topThree[2][0]."</h5>
                            <p>£".$topThree[2][1]."</p>
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
                        "

                        mysqli_free_result($result)
                        mysqli_close($mysql)
                    ?>
                </div>
                <div class="col-2"></div>
                <div class="col-3">
                <?php
                        echo
                        '
                        <div id="carouselSmall2" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselSmall2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselSmall2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselSmall2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://i.picsum.photos/id/609/600/300.jpg?hmac=ReCZwP7Cl1ArvB2Ian1R3I6LFub0xk55P1wu_-5toi8" class="d-block w-100" alt="...">
                            <div class=" d-none d-md-block bg-danger bg-opacity-50 " >
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.picsum.photos/id/602/1000/500.jpg?hmac=445kr9w7gsS3vMlbXggYHC-uI6Rt-9FYMyOccPP7o0Y" class="d-block w-100" alt="...">
                            <div class="d-none d-md-block bg-danger bg-opacity-50">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="https://i.picsum.photos/id/276/1000/500.jpg?hmac=ktb25tDHaquYFYMRE0eYeiW234D1fJ2ciCiXdCXPZ_Y" class="d-block w-100" alt="...">
                            <div class=" d-none d-md-block bg-danger bg-opacity-50">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSmall2" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselSmall2" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                        '
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