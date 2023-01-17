<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary text-center">
    <div class="container">
        <h1 class="text-primary">Checkout</h1>
        <p class="fs-3"> Your are going to spend <?php echo $_SESSION["totalPrice"][0] . " €" ?>!</p>
        <p class="fs-5">If you register. You are Going to get 20% discount. Please, insert your data if you want discount.</p>
        <div class="row justify-content-center flex-column align-items-center">
            <div class="col-6 rounded-3 bg-white p-3 mb-5">
                <form action="./buy.php" method="POST">
                    <input type="hidden" value="true" name="discount">
                    <input type="text" name="name" class="form-control mb-3 w-auto d-inline-block" placeholder="Name" required>
                    <input type="text" name="surname" class="form-control mb-3 w-auto d-inline-block" placeholder="surname" required>
                    <input type="email" name="email" class="form-control mb-3 w-auto d-inline-block" placeholder="e-mail" required>
                    <input type="password" class="form-control w-50 d-inline-block mb-3" placeholder="Password">
                    <button class="btn btn-primary d-block m-auto">Register</button>
                </form>

            </div>
            <div class="col-3 bg-white rounded-3 p-3">
                <form action="./buy.php" method="POST">
                    <input type="hidden" value="false" name="discount">
                    <button class="btn btn-primary">Continue as Guest</button>
                </form>
            </div>
        </div>


    </div>
</body>

</html>