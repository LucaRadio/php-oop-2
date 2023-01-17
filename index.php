<?php
include_once "./data/db.php";
require_once "./classes/Product.php";
require_once "./classes/Food.php";
require_once "./classes/Game.php";
require_once "./classes/AnimalBed.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="bg-secondary">
    <div class="container">
        <h1 class="py-4">Animal e-commerce</h1>
        <div class="row row-cols-3 g-5 p-4">
            <?php foreach ($productList as $key => $product) { ?>
                <div class="col d-flex">
                    <div class="card">
                        <?php if ($product["type"] === "food") {
                            $product = new FoodProduct($product["name"], $product["brand"], $product["price"], $product["description"], $product["category"], $product["weight"]);

                        ?>
                            <img class="card-img-top" src="./img/food.jpg" alt="Card image cap">
                        <?php
                        } else if ($product["type"] === "game") {
                            $product = new GameProduct($product["name"], $product["brand"], $product["price"], $product["description"], $product["category"], $product["weight"]);
                        ?>
                            <img class="card-img-top" src="./img/game.png" alt="Card image cap">
                        <?php
                        } else {
                            $product = new AnimalBedProduct($product["name"], $product["brand"], $product["price"], $product["description"], $product["category"], $product["weight"]);
                        ?>
                            <img class="card-img-top" src="./img/bed.jpg" alt="Card image cap">
                        <?php
                        } ?>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <h5 class="card-title">
                                <?php
                                echo $product->getName();
                                ?>
                            </h5>
                            <p class="card-text"><?php echo $product->getDescription(); ?></p>
                            <p class="card-text">Category: <?php if ($product->getCategory() === "dog") { ?>
                                    <i class="fa-solid fa-dog"></i>
                                <?php } else { ?>
                                    <i class="fa-solid fa-cat"></i>
                                <?php  }
                                ?>
                            </p>
                            <p class="card-text"><?php echo $product->getPrice(); ?> €</p>
                            <form target="_blank" action="./buy.php" method="POST">
                                <input class="d-none" name="index" type="hidden" value="<?php echo $key ?>">
                                <button class="btn btn-primary">Buy</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>