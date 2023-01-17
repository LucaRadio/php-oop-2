<?php
session_unset();
session_destroy();
$name = $_POST["name"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfull Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark h-100">
    <div class="h-100 container d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-success">Thank you, <?php echo $name ?>!</h1>
        <p class="text-white d-block">Your payment went well. Your order will be shipping on the next day!</p>

    </div>
</body>

</html>