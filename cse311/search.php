<?php session_start(); ?>
<?php include "header.php";?>
    <?php include "navbar.php";?>


    <section class="feat">
        <h2>Search Results</h2>
        <div class="prod-row">

            <?php

                $connect = mysqli_connect("localhost","root","","cse311");
                if (isset($_POST['submit_search'])) {
                $search = $_POST['search'];
                $search_query = "SELECT * FROM products WHERE search LIKE '%$search%'";
                $search_query_submit = mysqli_query($connect, $search_query);

                while($product = mysqli_fetch_assoc($search_query_submit)) {
                    $productId = $product["product_id"];
                    $productName = $product["product_name"];
                    $productPrice = $product["product_price"];
                    $productDescription = $product["product_description"];
                    $productImage_1 = $product["image_1"];
                    ?>

                    <div class="prod-col">
                        <img src="./images/<?php echo $productImage_1 ?>">
                        <h3><?php echo $productName ?></h3>
                        <p><?php echo $productPrice ?> BDT</p>
                        <div class="overlay">
                            <h1><?php echo $productName ?></h1>
                            <h2><?php echo  $productDescription?></h2>
                            <a href="details.php?id=<?php echo $productId ?>" class="btn btn-primary">View</a>
                        </div>
                    </div>

            <?php } }?>


            <!--            <div class="prod-col">-->
            <!--                <img src="./images/p1.jpg">-->
            <!--                <h3>Ryzen 5 5600</h3>-->
            <!--                <p>13500 BDT</p>-->
            <!--                <div class="overlay">-->
            <!--                    <h1>Ryzen 5 5600</h1>-->
            <!--                    <h2>Speed: 3.5GHz up to 4.4GHz-->
            <!--                        Cache: L2: 3MB, L3: 32MB-->
            <!--                        Cores-6 & Threads-12-->
            <!--                        Memory Speed: DDR4 Up to 3200MHz-->
            <!--                        AMD ZEN 3 Architecture.</h2>-->
            <!--                </div>-->
            <!--            </div>-->

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

