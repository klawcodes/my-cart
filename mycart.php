<?php include("header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Names</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $total=$total+$value['price'];
                                echo"
                                    <tr>
                                        <td>1</td>
                                        <td>$value[item_name]</td>
                                        <td>$$value[price]</td>
                                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='100'></td>
                                        <td>
                                            <form action='managecart.php' method='POST'>
                                                <button name='remove_item' class='btn btn-sm btn-outline-danger '>REMOVE</button>
                                                <input type='hidden' name='item_name' value='$value[item_name]'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-end">$<?php echo $total ?></h5>
                    <br>
                    <form class="d-grid gap-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash on Delivery
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="button">Purchase!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>