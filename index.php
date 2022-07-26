<?php include("header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BELI HAPE</title>
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 column">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="./img/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Xiaomi POCO X3 NFC</h5>
                            <p1 class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the card's content.</p1>
                            <h4 class="card-price">$200</h4>
                            <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Xiaomi POCO X3 NFC">
                            <input type="hidden" name="price" value="200">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-lg-3 column">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="./img/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Apple iPhone 12 Pro</h5>
                            <p1 class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the card's content.</p1>
                            <h4 class="card-price">$1400</h4>
                            <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Apple iPhone 12 Pro">
                            <input type="hidden" name="price" value="1400">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 column">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="./img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Realme C17</h5>
                            <p1 class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of
                                the card's content.</p1>
                            <h4 class="card-price">$186</h4>
                            <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Realme C17">
                            <input type="hidden" name="price" value="186">
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</body>

</html>