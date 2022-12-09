<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Page Name}</title>

    <!-- Bootstrap stuff -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

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

    <div class="container-fluid blackBarDivider">

        <!--Start of Member Details -->
        <div class="row bg-light pt-2">
            <h5>Your Deets:</h5>
            <div class="col-6">
                <div class="pt-2 blackBarDivider">
                    <?php

                        //Imports database, prepares query, and executes it
                        include 'db.php';
                        $query = "SELECT * FROM v_memberid WHERE customerNo = 5";
                        $statement = $mysql->prepare($query);
                        $statement->execute();

                        //Gets results of query
                        $result = $statement->get_result();

                        //While row is set to the results
                        while ($row = $result->fetch_assoc()) {
                        
                            //if customerNo is not blank
                            if ($row['customerNo'] != "") {
                            
                                echo '<p><strong>Member Name: </strong>' . $row['title'] . " " . $row['firstName'] . " " . $row['lastName'] . '</p>';
                                echo '<p><strong>Address: </strong>' . $row['addr'] . ", " . $row['postCode'] . '</p>';
                                echo '<p><strong>Phone Number: </strong>' . $row['phoneNo'] . '</p>';
                                echo '<p><strong>Email: </strong>' . $row['email'] . '</p>';
                                echo '<p><strong>Number of Points: </strong>' . $row['points'] . '</p>';
                            }
                    }

                    mysqli_close($mysql);
                    ?>

                </div>
            </div>
            <!-- End of Member Details -->

            <!-- Button to Update Member Details -->
            <button type="button" class="btn btn-danger btn-lg mb-2" data-bs-toggle="modal" data-bs-target="#updateDetails">Update Your Details</button>

            <!-- Modal -->
            <div class="modal fade" id="updateDetails" tabindex="-1" aria-labelledby="updateDetailsLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="updateDetailsLabel">Update Your Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-dialog-scrollable">
                            <?php
                            include 'db.php';
                            error_reporting (E_ALL ^ E_NOTICE);

                            //Function On Button Click
                            if (isset($_POST['saveChanges'])) {

                                //Prepares the Query
                                $statement = $mysql->prepare("UPDATE customer SET firstName=?, lastName=?, addr=?, postCode=?, phoneNo=?, email=?, points=? WHERE customerNo = 5");

                                //points variable is set to contents of $_POST["points"]
                                $points = $_POST["points"];

                                //If any of the contents of  the form is empty then reject, as to not add incorrect data to the database.
                                if (empty($_POST["firstName"]) || empty($_POST["lastName"]) || empty($_POST["addr"]) || empty($_POST["postCode"]) || empty($_POST["phoneNo"]) || empty($_POST["email"])) {
                                    //Alerts the user that one of the fields is empty
                                    echo '<script>alert("Please ensure all the fields are filled.")</script>';

                                }

                                else {
                                    
                                    //If Points is 0 then sometimes is NULL
                                    //Set NULL to 0 in the case of points
                                    if ($points == NULL) {
                                        $points = 0;
                                    }

                                    //binds parameters
                                    $statement->bind_param('ssssssi', $_POST["firstName"], $_POST["lastName"], $_POST["addr"], $_POST["postCode"], $_POST["phoneNo"], $_POST["email"], $points);

                                    //Executes Query
                                    $statement->execute();

                                }
                            }

                            //Selects all details for customerNo 5
                            $query = "SELECT * FROM v_memberid WHERE customerNo = 5";
                            $statement = $mysql->prepare($query);
                            $statement->execute();

                            //Gets results of query
                            $result = $statement->get_result();

                            //While there are rows get details and display in form
                            while ($row = $result->fetch_assoc()) {

                                //If $row['customerNo'] is not blank (it should never be blank as it is a primary key)
                                if ($row['customerNo'] != "") {

                                    echo '<form method="post">
                                            <p>Member Forename: 
                                                <input type="text" min="1" max="255" name="firstName" value="' . $row["firstName"] . '" placeholder="E.g Callum">
                                            </p>

                                            <p>Member Surname: 
                                                <input type="text" min="1" max="255" name="lastName" value="' . $row["lastName"] . '" placeholder="E.g Scott">
                                            </p>

                                            <p>Member Address: 
                                                <input type="text" name="addr" min="1" max="255" value="' . $row["addr"] . '" placeholder="E.g 65-67 Salamander Street, Leith, Edinburgh, Scotland">
                                            </p>

                                            <p>Address Postcode: 
                                                <input type="text" min="1" max="10" name="postCode" value="' . $row["postCode"] . '" placeholder="E.g EH6 7JZ">
                                            </p>

                                            <p>Phone Number: 
                                                <input type="tel" name="phoneNo" value="' . $row["phoneNo"] . '" placeholder="E.g 01224733925">
                                            </p>

                                            <p>Email Address: 
                                                <input type="email" min="1" max="50" name="email" value="' . $row["email"] . '" placeholder="2423178@altTake.co.uk">
                                            </p>
                                            
                                            <p>Number of Points: 
                                                <input type="number" disabled name="points" value=
                                                "' . $row["points"] . '">
                                            </p>
                                            
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="saveChanges" class="btn btn-primary">Save changes</button>
                                            </div>
                                    
                                        </form>';
                                }
                            }

                            mysqli_close($mysql);
                            ?>


                        </div>
                    </div>
                </div>
            </div>





        </div>
        <!--End of Member Details -->

        <div class="row pt-2">
            <!-- Wishlists Details -->
            <h5>Your Wishlists:</h5>
            <div class="bg-light p-2 card-group blackBarDivider">
                <?php
                include 'db.php';

                $query = "SELECT * FROM v_memberid WHERE customerNo = 16 ORDER BY wishlistID ASC";
                $statement = $mysql->prepare($query);
                $statement->execute();
                $result = $statement->get_result();

                while ($row = $result->fetch_assoc()) {
                    if ($row['customerNo'] != "") {

                        //Sets currentWishlist to current wishlistID
                        $currentWishlist = $row['wishlistID'];

                        //Displays it in a card format
                        echo "<div class='px-2'><div class='card col-sm-2' style='width: 18rem;'>
                                
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $row['wishlistName'] . "</h5>
                                    <p> Cait wants a cookie $row[wishlistID]</p>
                                </div>

                                <button class='btn btn-primary btn-block' type='button' data-bs-toggle='collapse' data-bs-target='#e$row[wishlistID]'>
                                
                                $row[wishlistName]
                                
                                </button>
                             


            
                            <div class='collapse' id='e$row[wishlistID]'>
                                        <div class='card card-body'>";


                        //Temp variable to contain a copy of the current records
                        $wItem = $row;

                        //While $wItem's[wishlistID] is the same as the currentWishlist
                        while ($wItem['wishlistID'] == $currentWishlist) {

                            //Displays the current productID, productName, and quantity
                            echo
                            "<p class='blackBarDivider'> Product ID: $wItem[productID] </p>
                                <p> Product Name: $wItem[productName] </p>
                                <p> Quantity: $wItem[quantity] </p> ";

                            //wItem is set to the next record
                            $wItem = $result->fetch_assoc();
                        }


                        //Closes all the tags
                        echo "</div>
                                    </div>
                                    </div>
                                </div>";
                    }
                }



                //Closes Connection
                mysqli_close($mysql);
                ?>

            </div>
        </div>

        <div class="row">
            <!--Footer Start -->
            <div class="footer col-12 text-center">
                <p>Created by: </p>
                <p class="footer-copyright">&copy; Caitlin Ridge-Sykes, Daniel Ferrier, Euan West, Kamil Krauze, Toms
                    Popdjakuniks, Vera Borvinski</p>
            </div>
        </div>
        <!--Footer End -->
    </div>
</body>

</html>