<?php
session_start();
include_once "./data/db.php";
var_dump($_SESSION["cart"]);
var_dump($_SESSION["totalPrice"]);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary text-center">
    <div class="container">
        <h1 class="text-primary">Checkout</h1>
        <p class="fs-3"> Your are going to spend <?php echo number_format($_SESSION["totalPrice"][0], 2) . " €" ?>!</p>
        <p class="fs-5">Please, insert your credit card below</p>
        <div class="row justify-content-center">
            <div class="col-6 rounded-3 bg-white p-3">
                <form action="./payed.php?reset=true" method="POST">
                    <input type="text" name="name" class="form-control mb-3" placeholder="Owner" required>
                    <input max="9999999999999999" min="1000000000000000" type="number" class="form-control mb-3" placeholder="Card Number" required>
                    <select class="form-select w-auto d-inline-block" required>
                        <option value="jan">1</option>
                        <option value="feb">2</option>
                        <option value="mar">3</option>
                        <option value="apr">4</option>
                        <option value="may">5</option>
                        <option value="jun">6</option>
                        <option value="jul">7</option>
                        <option value="aug">8</option>
                        <option value="sep">9</option>
                        <option value="oct">10</option>
                        <option value="nov">11</option>
                        <option value="dec">12</option>
                    </select>
                    <select class="form-select w-auto d-inline-block" required>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                    </select>
                    <input type="number" max="999" min="100" class="form-control w-auto d-inline-block" placeholder="CVV" required>
                    <button class="btn btn-primary">Pay</button>
                </form>
            </div>
        </div>


    </div>
</body>

</html>