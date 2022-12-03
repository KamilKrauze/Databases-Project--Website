<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternate Take - Search</title>

    <!-- Bootstrap stuff -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    <?php
        include 'db.php';
    ?>

    <!--Custom stylesheet-->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/search-php.css">

    <!-- Custom Scripts -->
    <script src="./scripts/search.js"></script>
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
                    <button name="login_btn" class="btn btn-light" type="submit">Login</button>
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
                        <input class="form-control" type="search" placeholder="Search" id="searchbar" onClick="fetchFromSearchBar()" aria-label="Search">
                    </form>

                </div>

                <!-- Music type dropdown -->
                <div class="search-query col-xs-6 col-md-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Music Type <!--Reactive to choice-->
                        </button>
                        <ul class="dropdown-menu">
                            <?php
                            $get_genre = "SELECT DISTINCT genre FROM products";

                            $stmt=$mysql->prepare($get_genre);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            while($row = $result->fetch_assoc())
                            {
                                if ($row['genre']!="") {
                                echo '
                                    <li><a class="dropdown-item" href="#">'.$row['genre'].'</a></li>
                                ';
                                }
                            }
                            ?>
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
                            <?php
                            $get_genre = "SELECT DISTINCT musicFormat FROM products";

                            $stmt=$mysql->prepare($get_genre);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            while($row = $result->fetch_assoc()) {
                                if($row['musicFormat'] != "") {
                                    echo '
                                    <li><a class="dropdown-item" href="#">'.$row['musicFormat'].'</a></li>
                                    ';
                                }
                            }
                            ?>
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
                                <li class="col-sm-6 col-md-4">
                                    <input type="checkbox"> Category No.
                                </li>
                                <li class="col-sm-6 col-md-4">
                                    <input type="checkbox"> Title
                                </li>
                                <li class="col-sm-6 col-md-4">
                                    <input type="checkbox"> Artist
                                </li>
                            </div>
                            <div class="row">
                                <li class="col-sm-6 col-md-4">
                                    <input type="checkbox"> Label
                                </li>
                                <li class="col-sm-6 col-md-4">
                                    <input type="checkbox"> Year
                                </li>
                                <li class="col-sm-6 col-md-4">
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
                            <?php
                            echo '
                            <li><a class="dropdown-item" href="#">Recent</a></li>
                            <li><a class="dropdown-item" href="#">Ascending</a></li>
                            <li><a class="dropdown-item" href="#">Descending</a></li>
                            <li><a class="dropdown-item" href="#">Least Recent</a></li>
                            ';
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Example content to get an idea what this could contain and how it displays-->
        <!--Add cards probably for displaying products in the search page-->
        <div class="contents text-center row">
            <div class="row">
                <?php
                $productName = "%";
                $extra_query = "";
                // User defined select
                $select_view = "SELECT * FROM 22ac3d06.products WHERE productName LIKE ?" .$extra_query;

                $stmt=$mysql->prepare($select_view);
                $stmt->bind_param("s", $productName);
                $stmt->execute();
                $result = $stmt->get_result();

                while($row = $result->fetch_assoc()) { // Get a row one by one

                    $productID = $row['productID'];
                    $productName = $row['productName'];

                    // Print bootstrap cards in container
                    echo'
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <!-- Card -->
                            <div class="card mb-3">
                                <img class="img-fluid card-img-top" src="https://picsum.photos/512/512" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">'.$productName.'</h5>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary">Add</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalProduct'.$productID.'">
                                        View
                                        </button>
                                    </div>
                                </div>
                            </div>
            
                            <!-- Modal -->
                            <div class="modal fade" id="modalProduct'.$productID.'" tabindex="-1" aria-labelledby="modalProduct'.$productID.'" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalProduct">'.$productName.'</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-fluid" src="https://picsum.photos/512/512" alt="Card image cap">
                                            <div class="container">
                                                <div class="row">
                                                ';
                                                
                                                if ($row['catNo'] != "")
                                                {
                                                    echo '
                                                    <div class="col-12">
                                                        <p><b>Catalogue Number</b>: '.$row['catNo'].'</p>
                                                    </div>
                                                    ';
                                                }
                                                
                                                echo
                                                '
                                                    <div class="col-4">
                                                        <p><b>Type</b>: '.$row['productType'].'</p>
                                                    </div>
                                                    <div class="col-5">
                                                        <p><b>Left in Stock</b>: '.$row['quantity'].'</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p><b>Price</b>: £ '.$row['retailPrice'].'</p>
                                                    </div>
                                                ';

                                                if ($row['catNo'] != "")
                                                {
                                                    echo '
                                                    <div class="col-6">
                                                        <p><b>Artist</b>: '.$row['artist'].'</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p><b>Label</b>: '.$row['label'].'</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p><b>Year</b>: '.$row['yearRelease'].'</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p><b>Format</b>: '.$row['musicFormat'].'</p>
                                                    </div>
                                                    ';
                                                if ($row['size'] != "") {
                                                    echo '
                                                    <div class="col-4">
                                                        <p><b>Size</b>: '.$row['size'].'</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p><b>Size</b>: '.$row['speedRPM'].' RPM</p>
                                                    </div>
                                                    ';
                                                }
                                                    echo'
                                                    <div class="col-4">
                                                        <p><b>Country</b>: '.$row['country'].'</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p><b>Genre</b>: '.$row['genre'].'</p>
                                                    </div>
                                                    ';
                }
                                                echo '
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-secondary">Add to Basket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        ';
                }

                mysqli_close($mysql);
                ?>
            </div>
        </div>

        <div class="row">
            <?php
            echo'
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center my-3">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </nav>';
            ?>
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