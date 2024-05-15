<?php session_start() ?>
<?php include "header.php" ?>

    <title>Dashboard | <?php echo $_SESSION['name']; ?></title>

    <?php
        $connect = mysqli_connect("localhost","root","","cse311");
        if(!isset($_SESSION['email']) || $_SESSION['email'] === "") {
//            header("Location: index.php");
            echo "<script>location.replace('index.php')</script>";
        }
    ?>


    <div class="container-fluid dashboard-nav">
        <div class="d-flex justify-content-center gap-5 align-items-center">
            <a class="btn btn-outline-primary dashboard-link" href="index.php" data-mdb-ripple-init data-mdb-ripple-color="yellow">
                <ion-icon name="home-outline"></ion-icon>
                <span style="vertical-align: text-bottom;">Home</span>
            </a>
            <a class="btn btn-outline-primary dashboard-link" href="cart.php" data-mdb-ripple-init data-mdb-ripple-color="grey">
                <ion-icon name="cart-outline"></ion-icon>
                <span style="vertical-align: text-bottom;">Cart</span>
            </a>
            <div class="dropdown">
                <a
                    class="btn btn-outline-primary dashboard-link dropdown-toggle"
                    id="dropdownMenuButton"
                    data-mdb-dropdown-init
                    data-mdb-ripple-init
                    aria-expanded="false"
                >
                    <ion-icon name="person-outline"></ion-icon>
                    <span style="vertical-align: text-bottom">
                        <?php echo $_SESSION['name']; ?>
                    </span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item" href="index.php?logout">
                            <ion-icon name="log-in-outline"></ion-icon>
                            <span style="vertical-align: text-bottom">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Tabs navs -->
    <ul class="nav nav-tabs mb-3 d-flex justify-content-center" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a
                data-mdb-tab-init
                class="nav-link active"
                id="ex1-tab-1"
                href="#ex1-tabs-1"
                role="tab"
                aria-controls="ex1-tabs-1"
                aria-selected="true"
            >Wishlist</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a
                data-mdb-tab-init
                class="nav-link"
                id="ex1-tab-2"
                href="#ex1-tabs-2"
                role="tab"
                aria-controls="ex1-tabs-2"
                aria-selected="false"
            >Order History</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a
                data-mdb-tab-init
                class="nav-link"
                id="ex1-tab-3"
                href="#ex1-tabs-3"
                role="tab"
                aria-controls="ex1-tabs-3"
                aria-selected="false"
            >Contact Us</a
            >
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex1-content">
        <div
            class="tab-pane fade show active"
            id="ex1-tabs-1"
            role="tabpanel"
            aria-labelledby="ex1-tab-1"
        >
            <h3 style="text-align: center">Your Wishlist</h3>

            <?php

                if(isset($_POST['wishlist'])) {
                    //Retrieve Values From The Form And Query Param
                    $name = $_POST['name'];
                    $image = $_POST['image'];
                    $price = $_POST['price'];
                    $product_id = $_POST['id'];
                    $user_id = $_SESSION['userId'];


                    if($user_id >= 1) {
                        //Select ALl Products From Cart
                        $check_list_query = "SELECT * FROM wishlist WHERE user_id = $user_id";
                        $check_list_db = mysqli_query($connect, $check_list_query);


                        // Check If The Cart Table Is Empty Or Not
                        if(!mysqli_num_rows($check_list_db)) {
                            $query = "INSERT INTO wishlist(user_id, product_id, product_name, product_price, image_1)";
                            $query .= "VALUES($user_id, $product_id, '$name', '$price', '$image')";
                            $insert_into_list = mysqli_query($connect, $query);
                            echo "<script>alert('Added To The Wishlist')</script>";
                        }

                        // Check The Cart For Whether The Product Has Been Added Or Not For An Already Existing Product And Take Actions Accordingly
                        while($check_list  = mysqli_fetch_assoc($check_list_db)) {
                            $db_original_product_id = $check_list['product_id'];
                            $db_userId = $check_list['user_id'];


                            if($user_id == $db_userId && $product_id == $db_original_product_id) {
                                echo "<script>location.replace('dashboard.php')</script>";
                            }
                            else {
                                $query = "INSERT INTO wishlist(user_id, product_id, product_name, product_price, image_1)";
                                $query .= "VALUES($user_id, $product_id, '$name', '$price', '$image')";;
                                $insert_into_cart = mysqli_query($connect, $query);
                                echo "<script>alert('Added To The Wishlist')</script>";
                            }


                        }
                    }
                    else {
                        echo "<script>alert('Login To Add To Wishlist')</script>";
                    }



                }

            ?>

            <div class="container">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $user_id = $_SESSION['userId'];
                    $query = "SELECT * FROM wishlist WHERE user_id = $user_id GROUP BY product_name";
                    $get_product = mysqli_query($connect, $query);

                    while($list_product = mysqli_fetch_assoc($get_product)) {
                        $productListId = $list_product['list_id'];
                        $productName = $list_product['product_name'];
                        $productPrice = $list_product['product_price'];
                        $productImage = $list_product['image_1'];
                        ?>

                        <tr>
                            <td>
                                <p class="text-muted mb-0"><?php echo $productName ?></p>
                            </td>
                            <td>
                                <p class="text-muted mb-0"><?php echo $productPrice ?> BDT</p>
                            </td>
                            <td>
                                <img
                                    src="./images/<?php echo $productImage ?>"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                />
                            </td>

                            <td>
                                <a class="btn btn-link btn-sm btn-rounded" href="user-dashboard.php?remove=<?php echo $productListId ?>">Remove</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <div class="container">
                <h3 style="text-align: center">Order History</h3>
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php
                        $user_id = $_SESSION['userId'];
                        $query = "SELECT * FROM orders WHERE user_id = $user_id";
                        $get_product = mysqli_query($connect, $query);

                        while($list_product = mysqli_fetch_assoc($get_product)) {
                                $productName = $list_product['product_name'];
                                $productPrice = $list_product['price'];
                                $productImage = $list_product['image'];
                                $orderDate = $list_product['order_date'];
                            ?>

                            <tr>
                                <td>
                                    <p class="text-muted mb-0"><?php echo $productName ?></p>
                                </td>
                                <td>
                                    <p class="text-muted mb-0"><?php echo $productPrice ?> BDT</p>
                                </td>
                                <td>
                                    <img
                                            src="./images/<?php echo $productImage ?>"
                                            alt=""
                                            style="width: 45px; height: 45px"
                                    />
                                </td>

                                <td><?php echo $orderDate ?></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
            <h3 style="text-align: center">Contact Us</h3>
            <div class="container">
                <div class="form-outline" data-mdb-input-init>
            <textarea
                    class="form-control message-textarea"
                    id="textAreaExample"
                    rows="4"
            ></textarea>
                    <label class="form-label" for="textAreaExample">Message</label>
                </div>
                <br />
                <button class="btn btn-success contact-us">Submit</button>
            </div>
        </div>
    <!-- Tabs content -->

    <?php
        if(isset($_GET['remove'])) {
            $list_id = $_GET['remove'];
            $query = "DELETE FROM wishlist WHERE list_id = $list_id";
            $remove_from_list = mysqli_query($connect, $query);
            echo "<script>location.replace('user-dashboard.php')</script>";
        }
    ?>


    <?php
        if(isset($_POST['message'])) {
            $user_id = $_SESSION['userId'];
            $username = $_SESSION['name'];
            $message = $_POST['message'];
            $query = "INSERT INTO messages(user_id, username, message)";
            $query .= "VALUES($user_id, '$username', '$message')";
            $send_message = mysqli_query($connect, $query);
        }
    ?>


<?php include "footer.php"?>