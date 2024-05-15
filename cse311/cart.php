<?php session_start(); ?>
<?php include "header.php"; ?>
    <title>Cart</title>
    <?php include "navbar.php"; ?>

    <section class="cart">
        <h2 style="text-align: center">Shopping Cart</h2>
    </section>

    <section id="cart-container">
        <table width="100%">
            <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
<!--                <td>Quantity</td>-->
                <td>Total</td>
            </tr>
            </thead>
            <tbody>

            <?php
                $connect = mysqli_connect("localhost","root","","cse311");
                $user_id = $_SESSION['userId'];
                $productId = 0;
                $query = "SELECT * FROM cart WHERE user_id = $user_id GROUP BY product_name";
                $get_product = mysqli_query($connect, $query);

                $subtotal = 0;

                if(!$get_product) {
                    echo "error";
                }

            while($row = mysqli_fetch_assoc($get_product)) {
                $CartProductId = $row["original_product_id"];
                $CartUserId = $row['user_id'];
                $productName = $row["product_name"];
                $productPrice = $row["price"];
                $productImage = $row["image"];
                $productTotal = $row["total"];
            ?>

                <tr>
                    <td><a href="cart.php?remove=<?php echo $CartProductId ?>"><span class="material-symbols-outlined">delete</span></a></td>
                    <td><img src="./images/<?php echo $productImage ?>" alt=""></td>
                    <td><h5><?php echo $productName ?></h5></td>
                    <td><?php echo $productPrice ?></td>
                    <!--                <td><input class="w-25 pl-1" value="1" type ="number"></td>-->
                    <td><h5><?php echo $productTotal ?>BDT</h5></td>
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </section>

    <br>
    <br>



    <div class="container">
        <div class="total d-flex justify-content-center gap-4">
            <?php
            $user_id = $_SESSION['userId'];
            $sum_query = "SELECT SUM(total) AS total FROM cart WHERE user_id = $user_id GROUP BY user_id";
            $execute_sum_query = mysqli_query($connect, $sum_query);

            while($row = mysqli_fetch_assoc($execute_sum_query)) {
                $subtotal = $row["total"];
                ?>

            <?php } ?>

            <h4>Total Amount: <?php echo $subtotal ?> BDT</h4>

            <a class="btn btn-primary" href="cart.php?confirm=<?php echo $user_id ?>">Confirm</a>

        </div>
    </div>


    <!--        Request For Removing a Item From The Cart-->
    <?php
        if(isset($_GET['remove']) && $user_id >= 1) {
            $prodId = $_GET['remove'];
            $query = "DELETE FROM cart WHERE user_id = $user_id AND original_product_id = $prodId";
            $remove_from_cart = mysqli_query($connect, $query);

            $user_id = $_SESSION['userId'];
            $query = "SELECT COUNT(distinct product_name) AS count FROM cart WHERE user_id = $user_id";
            $get_product = mysqli_query($connect, $query);

            while($count = mysqli_fetch_assoc($get_product)) {
                $_SESSION['count'] = $count['count'];
            }
            echo "<script>location.replace('cart.php')</script>";
        }
    ?>


    <?php
        if(empty($_SESSION['userId']) || $_SESSION['userId'] < 1) {
//            header("Location: index.php");
            echo "<script>
                    alert('Login To Your User Account To View The Cart');
                    location.replace('login.php')
                  </script>";
        }
    ?>

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

    <?php
        if(isset($_GET['confirm'])) {
            $cartUserId = $_GET['confirm'];
            $query = "SELECT * FROM cart WHERE user_id = $cartUserId GROUP BY product_name";
            $getCartProducts = mysqli_query($connect, $query);

            if(mysqli_num_rows($getCartProducts)) {
                while($row= mysqli_fetch_assoc($getCartProducts)) {
                    $query = "INSERT INTO orders(user_id, product_name, image, price, total, order_date, quantity)";
                    $query .= " VALUES($cartUserId, '$row[product_name]', '$row[image]', '$row[price]', $row[total], CURDATE(), $row[quantity])";
                    $confirmOrder = mysqli_query($connect, $query);
                }

                $deleteQuery = "DELETE FROM cart WHERE user_id = $cartUserId";
                $deleteFromCart = mysqli_query($connect, $deleteQuery);

                echo "<script>
                            alert('Order Confirmed');
                            location.replace('cart.php');
                      </script>";
            }
        }
    ?>

<?php include "footer.php"; ?>
