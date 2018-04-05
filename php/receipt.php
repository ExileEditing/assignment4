<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Book-A-Zon</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1 class="text-center">Book-A-Zon</h1>
    <!-- Book list -->
        <div class="container">
            <form method="post" action="myphp.php">
                <div class="row">
                    <div class="col">
                        <br />
                        <img class="mx-auto d-block" src="images/books/harrypotter_orderofphoenix.jpg" alt="Harry Potter and the Order of the Phoenix">
                        <br />
                        <div class="text-center"><h4>Order of the Phoenix</h4></div>
                        <div class="text-left"><p>The 5th book in the Harry Potter series written by J.K. Rowling</p></div>
                        <div class="text-center"><h5>$12.99</h5></div>
                        <br />
                        <br />
                        <label for="number">Order Quantity</label>
                        <input type="number" name="orderQuantity" style="width: 125px;">
                        <button id="btnAddToCart" name="btnAddToCart" class="float-right btn btn-warning">
                            <img id="addToCart" src="images/icons/cart.png" alt="Add to Cart">
                        </button>
                    </div>
                    <div class="col">
                        <br />
                        <img class="mx-auto d-block" src="images/books/wheeloftime_eyeofworld.jpg" alt="Eye of the World">
                        <br />
                        <div class="text-center"><h4>The Eye of the World</h4></div>
                        <div class="text-left"><p>The first book in the Wheel of Time series written by Robert Jordan</p></div>
                        <div class="text-center"><h5>$12.99</h5></div>
                        <br />
                        <br />
                        <label for="number">Order Quantity</label>
                        <input type="number" name="orderQuantity" style="width: 125px">
                        <button id="btnAddToCart" name="btnAddToCart" class="float-right btn btn-warning">
                            <img id="addToCart" src="images/icons/cart.png" alt="Add to Cart">
                        </button>
                    </div>
                    <div class="col">
                        <br />
                        <img class="mx-auto d-block" src="images/books/readyplayerone.jpg" alt="Ready Player One">
                        <br />
                        <div class="text-center"><h4>Ready Player One</h4></div>
                        <div class="text-left"><p>Thrilling Sci-Fi novel sure to keep you on the edge, written by Ernest Cline</p></div>
                        <div class="text-center"><h5>$12.99</h5></div>
                        <br />
                        <br />
                        <label for="number">Order Quantity</label>
                        <input type="number" name="orderQuantity" style="width: 125px">
                        <button id="btnAddToCart" name="btnAddToCart" class="float-right btn btn-warning">
                            <img id="addToCart" src="images/icons/cart.png" alt="Add to Cart">
                        </button>
                    </div>
                </div>
                <br />
                <br />
                <!-- Order Form -->
                <div style="background:saddlebrown !important" class="jumbotron">
                    <h2 style="color:white !important" class="display-4">Order Form</h2>
                    <p style="color:white !important" class="lead">Order form and confirmation!</p>
                    <hr class="my-4">
                    <p class="lead">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">First name</span>
                            </div>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Last name</span>
                            </div>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Country</span>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Select your country</option>
                                <option value="Canada">Canada</option>
                                <option value="America">America</option>
                                <option value="England">England</option>
                            </select>
                        </div>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Address</span>
                            </div>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Postal Code</span>
                            </div>
                            <input type="text" class="form-control" id="postalCode" name="postalCode">
                        </div>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Credit Card</span>
                            </div>
                            <input type="text" class="form-control" id="creditCard" name="creditCard" placeholder="5555-4444-3333-2222" readonly>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">CCV</span>
                            </div>
                            <input type="text" class="form-control" id="ccv" name="ccv" placeholder="123" readonly>
                        </div>
                        <br />
                        <p style="color:white !important" class="lead">Order Details</p>
                        <hr class="my-4">
                        <br />
                        <table id="myTable" class="table table-dark table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Book Title</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--<tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>-->
                            </tbody>
                        </table>
                    </p>
                </div>
                <!-- End Order Form -->
            </form>
        </div>
    </div>
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
