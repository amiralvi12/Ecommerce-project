<?php session_start(); ?>
<?php include "header.php"?>
    <?php include "navbar.php";?>

    <?php
        if(isset($_GET["id"])) {
            $connect = mysqli_connect("localhost","root","","cse311");
            $id = $_GET["id"];
            $query = "SELECT * FROM products WHERE 	product_id = $id";
            $get_product = mysqli_query($connect, $query);

            while($row = mysqli_fetch_assoc($get_product)) {
                $productName = $row["product_name"];;

                ?>

            <title><?php echo $productName ?></title>

    <?php } } ?>

    <?php
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $query = "SELECT * FROM products WHERE 	product_id = $id";
            $get_product = mysqli_query($connect, $query);

            while($row = mysqli_fetch_assoc($get_product)) {
                $productId = $row["product_id"];
                $productName = $row["product_name"];
                $productPrice = $row["product_price"];
                $description = $row["product_description"];
                $productAvailable = $row["product_available"];
                $productImage_1 = $row["image_1"];
                $productImage_2 = $row["image_2"];
                $productImage_3 = $row["image_3"];
                $max_stock_quantity =  $row['max_quantity'];
                ?>

        <div class="product_image_preview d-flex justify-content-center">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img style="width: 400px" src="./images/<?php echo $productImage_1 ?>" >
                    <br>
                    <br>
                    <div class="row">
                        <img style="width:200px" src="./images/<?php echo $productImage_2 ?>" >
                        <img style="width:200px" src="./images/<?php echo $productImage_3 ?>" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width:400px; align-items: center;">
                        <div class="card-body">
                            <div class="card-title">
                                <h5><?php echo $productName ?></h5>
                                <p><?php echo $productAvailable ?></p>
                            </div>
                            <p class="card-text">Price <?php echo $productPrice ?> BDT</p>
                            <form method="POST">
                                <label for="select">Select Quantity:</label>
                                <select class="quantity" id="select">
                                    <?php
                                    for ($i = 0; $i < $max_stock_quantity; $i++) {
                                        ?>
                                        <option value="<?php echo $i + 1; ?>"><?php echo $i + 1; ?></option>
                                    <?php } ?>
                                </select>
                                <input style="display: none;" type="text" class="name" value="<?php echo $productName ?>">
                                <input style="display: none;" type="number" class="price" value="<?php echo $productPrice ?>">
                                <input style="display: none;" type="text" class="image" value="<?php echo $productImage_1 ?>">
                                <br>
                                <br>
                                <button style="background-color: hotpink; color: white; border-radius: 15px" class="btn add">Add To Cart</button>
                            </form>
                            <br>
                            <a target="_blank" href="cart.php" class="btn btn-primary"><ion-icon name="cart-outline"></ion-icon><span style="vertical-align: text-bottom;">Go To Cart</span></a>
                            <br>
                            <br>
                            <form method="POST" action="user-dashboard.php">
                                <input name="id" style="display: none;" type="number" value="<?php echo $id ?>">
                                <input style="display: none;" type="text" name="name" value="<?php echo $productName ?>">
                                <input style="display: none;" type="number" name="price" value="<?php echo $productPrice ?>">
                                <input style="display: none;" type="text" name="image" value="<?php echo $productImage_1 ?>">
                                <input value="Add To Wishlist" name="wishlist" type="submit" href="cart.php" class="btn btn-primary wishlist">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <hr>

        <div class="container">
            <b>Description:</b>
            <p><?php echo $description ?></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, autem beatae cupiditate delectus, dolore dolores illum, laboriosam magnam minus nobis officiis placeat quasi quia quis suscipit tenetur vero voluptas voluptates?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, explicabo saepe. Assumenda culpa, delectus dignissimos dolor enim explicabo id iste nesciunt perferendis perspiciatis quidem, quis quo ratione reiciendis reprehenderit suscipit?</p>
        </div>
        <hr>

    <?php } } ?>




            <div style="background-color: #e7effd">
                <section>
                    <div class="container my-5 py-5 text-dark">
                        <h3>Reviews:</h3>
                        <div class="row d-flex comment-section">
                            <?php
                            if(isset($_GET["id"])) {
                                $id = $_GET["id"];
                                $query = "SELECT * FROM comments WHERE 	product_id = $id";
                                $get_comment = mysqli_query($connect, $query);

                                while($row = mysqli_fetch_assoc($get_comment)) {
                                    $username = $row["username"];
                                    $comment = $row["comment"];

                                    ?>
                                    <div class="col-md-11 col-lg-9 col-xl-7">
                                        <div class="d-flex flex-start mb-4">
                                            <img
                                                    class="rounded-circle shadow-1-strong me-3"
                                                    src="./images/user.jpg"
                                                    alt="avatar"
                                                    width="65"
                                                    height="65"
                                            />
                                            <div class="card w-100">
                                                <div class="card-body p-4">
                                                    <div class="">
                                                        <h5><?php echo $username ?></h5>
                                                        <p>
                                                            <?php echo $comment ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } } ?>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <form method="post">
                        <div class="mb-3 mt-3">
                            <br>
                            <!--                            <label for="name">Your Name: </label>-->
                            <input style="width: 615px; display: none;" value="<?php
                            //                                $comment_username = $_SESSION['username'];
                            if(empty($_SESSION['email'])) {
                                echo $_SESSION['name'] = "";
                            }
                            else {
                                echo $_SESSION['name'];
                            }
                            ?>" class="form-control username" type="text" id="name">
                            <label for="comment">Add A Review:</label>
                            <textarea style="width: 615px" class="form-control comment" rows="5" id="comment"></textarea>
                            <input style="display: none;" class="comment_id" type="text" value="<?php echo $productId ?>">
                        </div>
                        <button class="btn btn-primary submit">Add A Review</button>
                    </form>
                </div>

            </div>





    <?php

        if(isset($_POST['add'])) {
            //Retrieve Values From The Form And Query Param
            $name = $_POST['name'];
            $image = $_POST['image'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $total = $price * $quantity;
            $original_product_id = $_GET['id'];
            $user_id = $_SESSION['userId'];
            $max_stock_value = 0;
        //            $exists = null;


            if($user_id >= 1) {
                //Select ALl Products From Cart
                $check_cart_query = "SELECT * FROM cart WHERE user_id = $user_id";
                $check_cart_db = mysqli_query($connect, $check_cart_query);

                // Get Maximum Stock Quantity For A Product
                $get_max_stock_quantity_query = "SELECT max_quantity FROM products WHERE product_id = $id";
                $max_quantity = mysqli_query($connect, $get_max_stock_quantity_query);

                while($max_value  = mysqli_fetch_assoc($max_quantity)) {
                    $max_stock_value = $max_value['max_quantity'];
                }

                // Check If The Cart Table Is Empty Or Not
                if(!mysqli_num_rows($check_cart_db)) {
                    $query = "INSERT INTO cart(user_id, original_product_id, product_name, image, price, total, quantity)";
                    $query .= "VALUES($user_id, $original_product_id, '$name', '$image', $price, $total, $quantity)";
                    $insert_into_cart = mysqli_query($connect, $query);
                }

                // Check The Cart For Whether The Product Has Been Added Or Not For An Already Existing Product And Take Actions Accordingly
                while($check_cart  = mysqli_fetch_assoc($check_cart_db)) {
                    $db_original_product_id = $check_cart['original_product_id'];
                    $db_quantity = $check_cart['quantity'];
                    $db_userId = $check_cart['user_id'];


                    if($user_id == $db_userId && $db_quantity <= $max_stock_value && $original_product_id == $db_original_product_id) {
                        $update_cart_query = "UPDATE cart SET quantity = $quantity, total = $total WHERE user_id = $user_id AND original_product_id =  $original_product_id";
                        $insert_into_cart_update = mysqli_query($connect, $update_cart_query);
                    }
                    else {
                        $query = "INSERT INTO cart(user_id, original_product_id, product_name, image, price, total, quantity)";
                        $query .= "VALUES($user_id, $original_product_id, '$name', '$image', $price, $total, $quantity)";
                        $insert_into_cart = mysqli_query($connect, $query);

                    }


                }
            }
            else {
                echo "<script>alert('Login To Add Product')</script>";
            }



        }

    ?>


    <?php
        $connect = mysqli_connect("localhost","root","","cse311");
        if(isset($_POST['username'])) {
            $comment_id = $_POST['comment_id'];
            $username = $_POST['username'];
            $comment = $_POST['comment'];
            $comment_username = $_SESSION['username'];

            $query = "INSERT INTO comments(product_id, username, comment)";
            $query .= "VALUES($comment_id, '$username', '$comment')";
            $insert_comment = mysqli_query($connect, $query);
            //
            //            if(!empty($_SESSION['username']) && !empty($comment)) {
            //                $query = "INSERT INTO comments(comment_id, username, comment)";
            //                $query .= "VALUES($comment_id, '$username', '$comment')";
            //                $insert_comment = mysqli_query($connect, $query);
            //
            //                echo "<script>
            //                                location.replace(location.href);
            //                            </script>";
            //            }
            //            else if(empty($_SESSION['username']) && !empty($comment)) {
            //                echo "<script>alert('Login To Post A Comment')</script>";
            //            }
            //            else {
            //                echo "<script>alert('Login To Post A Comment')</script>";
            //            }

        }
    ?>


    <?php
        $user_id = $_SESSION['userId'];
        if($user_id >= 1) {
            echo "<script>
                                let wishlist = document.querySelector('.wishlist');
                                wishlist.classList.remove('display');
                          </script>";
        }
        else {
            echo "<script>
                                let wishlist = document.querySelector('.wishlist');
                                wishlist.classList.add('display');
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



<?php include "footer.php"?>

