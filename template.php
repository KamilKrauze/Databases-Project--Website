<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Page Name}</title>

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

        <!--Example content to get an idea what this could contain and how it displays-->
        <!--Add cards probably for displaying products in the search page-->
        <div class="contents text-center row">
            <div class="row">
                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2">
                    <p>Hello</p>
                </div>
                <?php
                    echo '
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-2"> <p>Hello</p> </div>
                    ' 
                ?>
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