<?php session_start(); ?>
<?php include "header.php";?>
<?php include "navbar.php";?>

<section class="feat">
    <h2>All Of <?php echo $_GET['category'] ?></h2>

    <div class="container">
        <div class="d-flex justify-content-center gap-2">
            <a class="btn btn-danger" href="category.php?category=<?php echo $_GET['category'] ?>&sortBy=ASC">Sort From Lowest To Highest Price <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            <a class="btn btn-primary" href="category.php?category=<?php echo $_GET['category'] ?>&sortBy=DESC">Sort From Highest To Lowest Price <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
        </div>
    </div>

    <br>
    <br>

    <div class="prod-row">

        <?php

            $connect = mysqli_connect("localhost", "root", "", "cse311");
            if(!isset($_GET['sortBy'])) {
                $query = "SELECT * FROM products WHERE product_category = '$_GET[category]'";
                $result = mysqli_query($connect, $query);

                while ($product = mysqli_fetch_array($result)) {
                    $productId = $product["product_id"];
                    $productName = $product["product_name"];
                    $productPrice = $product["product_price"];
                    $productDescription = $product["product_description"];
                    $productImage_1 = $product["image_1"];
                    ?>

                    <div class="prod-col unsorted">
                        <img src="./images/<?php echo $productImage_1 ?>">
                        <h3><?php echo $productName ?></h3>
                        <p><?php echo $productPrice ?> BDT</p>
                        <div class="overlay">
                            <h1><?php echo $productName ?></h1>
                            <h2><?php echo  substr($productDescription, 0, 200)?></h2>
                            <a href="details.php?id=<?php echo $productId ?>" class="btn btn-primary">View</a>
                        </div>
                    </div>

            <?php } } ?>

    </div>

    <div class="prod-row sorted ">

        <?php

        if(isset($_GET['sortBy'])) {

            $query = "SELECT * FROM products WHERE product_category = '$_GET[category]' ORDER BY product_price $_GET[sortBy]";
            $result = mysqli_query($connect, $query);

            while ($product = mysqli_fetch_array($result)) {
                $productId = $product["product_id"];
                $productName = $product["product_name"];
                $productPrice = $product["product_price"];
                $productDescription = $product["product_description"];
                $productImage_1 = $product["image_1"];
                ?>

                <div class="prod-col sorted">
                    <img src="./images/<?php echo $productImage_1 ?>">
                    <h3><?php echo $productName ?></h3>
                    <p><?php echo $productPrice ?> BDT</p>
                    <div class="overlay">
                        <h1><?php echo $productName ?></h1>
                        <h2><?php echo  substr($productDescription, 0, 200)?></h2>
                        <a href="details.php?id=<?php echo $productId ?>" class="btn btn-primary">View</a>
                    </div>
                </div>

        <?php } } ?>

    </div>
</section>





    <?php
        if(isset($_GET['logout'])) {
            $_SESSION['userId'] = 0;
            $_SESSION['email'] = "";
            echo "<script>
                                    location.replace('index.php');
                                </script>";
        }
    ?>


    <?php
        $user_id = $_SESSION['userId'];
        if($user_id >= 1) {
            echo "<script>  
                        let login = document.querySelector('.login');
                        let logout = document.querySelector('.logout')
                        let register = document.querySelector('.register');
                        let cart = document.querySelector('.cart-nav')
                        let dashboard = document.querySelector('.dashboard');
                            login.classList.add('display');
                            register.classList.add('display');
                            cart.classList.remove('display');
                            logout.classList.remove('display');
                            dashboard.classList.remove('display');
                  </script>";

            $user_id = $_SESSION['userId'];
            $query = "SELECT COUNT(distinct product_name) AS count FROM cart WHERE user_id = $user_id";
            $get_product = mysqli_query($connect, $query);

            while($count = mysqli_fetch_assoc($get_product)) {
                $_SESSION['count'] = $count['count'];
            }

        }
        else {
            echo "<script>
                    let login = document.querySelector('.login');
                    let register = document.querySelector('.register');
                    let cart = document.querySelector('.cart-nav')
                    let logout = document.querySelector('.logout');
                    let dashboard = document.querySelector('.dashboard');
                        login.classList.remove('display');
                        register.classList.remove('display');
                        cart.classList.add('display');
                        logout.classList.add('display');
                        dashboard.classList.add('display');
                  </script>";
        }
    ?>




<?php include "footer.php"; ?>

