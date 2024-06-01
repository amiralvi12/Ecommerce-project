<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="style_1.css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!--Remix-Icons links -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>



</head>
<body>

    <header>
     <img src="img/Logo 1.gif" alt="TechTonics" class="logo">
    
        <nav class="headerNavList">

            <ul>               

                <li class="dropDown"><a href="">Categories</a></li>
                <li><a href="">On Sell</a></li>
                <li><a href="">New Arrivals</a></li>
                <li><a href="">Brands</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">About Us</a></li>
            </ul>    

        </nav>

        <nav class="navIcons">

            <a href=""><i class="ri-search-line"></i></a>
            <a href=""><i class="ri-shopping-cart-line"></i></a>
            <a href=""><i class="ri-account-circle-fill"></i></a>

        </nav>

    </header>



<div class="container">
    
            <main>
                <nav class="sidebar close">
            
                    <div class="toggle-button">
            
                        <!-- <i class='bx bx-chevron-right toggle'></i> -->
                        <span class="material-symbols-rounded toggle">chevron_right</span>
            
                    </div>
                        
                        
                    
                    <div class="menu-bar">
                        <div class="menu">
                            
                            
                           
                            <ul class="menu-links">
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_1">
                                       
                                        <span class="material-symbols-rounded icon">home</span>
                                        <span class="text nav-text">Dashboard</span>
                                    </a>
                                </li>
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_2">
                                      
                                        <span class="material-symbols-rounded icon">finance</span>
                                        <span class="text nav-text">Read</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#"class="box" id="box_3">
                                        
                                        <span class="material-symbols-rounded icon">notifications</span>
                                        <span class="text nav-text">Insert</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_4">
                                       
                                        <span class="material-symbols-rounded icon">incomplete_circle</span>
                                        <span class="text nav-text">Update</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_5">
                                        
                                        <span class="material-symbols-rounded icon">favorite</span>
                                        <span class="text nav-text">Delete</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_6">
                                        
                                        <span class="material-symbols-rounded icon">wallet</span>
                                        <span class="text nav-text">Wallets</span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                                 
    
    
    
                        </div>
                        
                        <div class="bottom-content">
                            
                            
                            <li class="">
                                <a href="#">
                                    
                                    <span class="material-symbols-rounded icon">logout</span>
                                    
                                    <span class="text nav-text">Logout</span>
                                </a>
                            </li>
                            
                            
                            <li class="mode">
                                
                                <div class="moon-sun">
                                    
                                    <!-- <i class='bx bx-moon icon moon' ></i><i class='bx bx-sun icon sun' ></i>  -->
                                    
                                    <i class="material-symbols-rounded icon sun">dark_mode</i>
                                    <i class="material-symbols-rounded icon moon">light_mode</i>
                                    
                                </div>
                                
                                <span class="mode-text text">Light Mode</span>
                                
                                <div class="toggle-switch">
                                    <span class="switch"></span>
                                </div>
                                
                            </li>
                            
                            
                            
                        </div>
                        
                        
                    </div>
                </nav>
    
    
    
                
            </main>
    
            <section class="dashboard">
    
                <div class="dash-content">
        
                    <div class="overview">
                        <div class="title">
                            <span class="text">Dashboard</span>
                        </div>
        
        
        
                        <div class="summary-cards">
                            
                            <div class="card" id="card_1">
                                <div class="card-inner">
                                </div>
                                <h1>

                                
                                <?php

                                 include 'connection.php';

                                 $sql = "SELECT COUNT(*) AS 'total_records'FROM products";
                                 $result = $conn-> query($sql);

                                 if($result-> num_rows >0)
                                 {
                                 $row = $result->fetch_assoc();
                                 $total_records = $row['total_records'];
                                 echo "Total Products: <br>" . $total_records;
           
                                 }
                                 else
                                 {
                                  echo "No records found";
                                 }
            
                                 $conn -> close();
                                ?>

                                </h1>
                            </div>
                    
                            <div class="card" id="card_2">
                                <div class="card-inner">
                                </div>
                                <h1>

                                <?php
                                 include 'connection.php';

                                 $sql = "SELECT COUNT(DISTINCT product_category) AS 'categories' FROM products";
                                 $result = $conn-> query($sql);

                                 if($result-> num_rows >0)
                                 {
                                 $row = $result->fetch_assoc();
                                 $categories = $row['categories'];
                                 echo "Total Categories: <br>" . $categories;
           
                                 }
                                 else
                                 {
                                  echo "No records found";
                                 }
            
                                 $conn -> close();
                                ?>


                                </h1>
                            </div>
                    
                            <div class="card" id="card_3">
                                <div class="card-inner">
                                    <h3>Customers</h3>
                                </div>
                                <h1>

                                <?php
                                 include 'connection.php';

                                 $sql = "SELECT SUM(product_price) AS 'total cost' FROM products";
                                 $result = $conn-> query($sql);

                                 if($result-> num_rows >0)
                                 {
                                 $row = $result->fetch_assoc();
                                 $cost = $row['total cost'];
                                 echo "Total Cost: " . $cost;
           
                                 }
                                 else
                                 {
                                  echo "No records found";
                                 }
            
                                 $conn -> close();
                                ?>


                                </h1>
                            </div>
                    
                            <div class="card" id="card_4">
                                <div class="card-inner">
                                    <h3>Alert</h3>
                                </div>
                                <h1>
                                 
                                <?php
                                 include 'connection.php';

                                 $sql = "SELECT product_name FROM products WHERE product_available <> 'Available'";
                                 $result = $conn-> query($sql);

                                 if($result-> num_rows >0)
                                 {
                                 $row = $result->fetch_assoc();
                                 $availablity = $row['product_name'];
                                 echo "Not Available?: " . $availablity;
           
                                 }
                                 else
                                 {
                                  echo "Not Available?: <br> No records found";
                                 }
            
                                 $conn -> close();
                                ?>

                                </h1>
                            </div>
                    
                            <div class="card" id="card_5">
                                <div class="card-inner">
                                    <h3>Products</h3>
                                </div>
                                <h1>249</h1>
                            </div>
                    
                            <div class="card" id="card_6">
                                <div class="card-inner">
                                    <h3>Categories</h3>
                                </div>
                                <h1>25</h1>
                            </div>
                    
                            <div class="card" id="card_7">
                                <div class="card-inner">
                                    <h3>Customers</h3>
                                </div>
                                <h1>1500</h1>
                            </div>
                    
                            <div class="card" id="card_8">
                                <div class="card-inner">
                                    <h3>Alert</h3>
                                </div>
                                <h1>56</h1>
                            </div>
                        </div>
        
    
                        <div class="read">
                            <h2>Data From Database</h2>

                             <table>
                                <thead>
                                    <tr>
               
                                        <th>Product ID</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Condition</th>
                                        <th>Product Available</th>
                                        <th>Product Category</th>
                                        <th>Max Quantity</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                        
                                <tbody>

                                    <?php
                                      
                                      include "connection.php";
                                          
                                      $sql = "SELECT * FROM products";
                                      $result = $conn-> query($sql);

                                      if($result-> num_rows >0)
                                        { 
                                         while($row = $result -> fetch_assoc())
                                            {
                                              echo
                                              "
                                              <tr>
                                                <td>" . $row["product_id"] . "</td>;
                                                <td>" . $row["product_name"] . "</td>;
                                                <td>" . $row["product_price"] . "</td>;
                                                <td>" . $row["product_condition"] . "</td>;
                                                <td>" . $row["product_available"] . "</td>;
                                                <td>" . $row["product_category"] . "</td>;
                                                <td>" . $row["max_quantity"] . "</td>;
                                                
                                                </tr>;
                  
                                              ";
                                            }
                                          echo "</table>";
                                        }
                                      else
                                        {
                                          echo "0 result";
                                        }
            
                                          $conn -> close();
                                    ?>

    
    
                                    
                        
                                    
                                </tbody>
                        
                             </table>
    
    
    
                             <!--                                
                             <table>
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Number</th>
                                        <th>Payments</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                        
                                <tbody>
                        
                        
                                    <tr>
                                        <td>Mini USB</td>
                                        <td>456</td>
                                        <td>Due</td>
                                        <td class="warning">Pending</td>
                                        <td class="primary">Details</td>
                                    </tr>
                                                            
                                </tbody>
                        
                             </table>
                             -->
    
                            
                        </div>
    
    
                            
                        <div class="create">
                          <h2 style="font-size: medium;text-align: center;">Insert Values</h2>


                            <form  action ="AD_1.php" method="POST">
                                <label for="productname">Product Name:</label><br>
                                <input class="input_field" type="text" name="name"><br>
                               
                                <label for="price">Product Price:</label><br>
                                <input class="input_field" type="text" name="price"><br>
                               
                                <label for="productdescription" class="input_field">Product Description:</label><br>
                                <textarea name="productdescription" cols="50" rows="5"></textarea><br>
                                

                                <label for="productcondition">Product Condition</label><br>                
                                <select name="condition">
                                   <option value="" disabled selected >Product Condition</option>
                                   <option value="old">Old</option>
                                   <option value="new">New</option>
                                </select><br>


                                <label for="productavailability">Availability</label><br>                
                                <select name="available" >
                                   <option value="" disabled selected > Select Avaiablility </option>
                                   <option value="instock">In Stock</option>
                                   <option value="outstock">Out of Stock</option>
                                   <option value="upcoming">Upcoming</option>
                                </select><br>

                                <label for="category">Select category</label><br>                
                                 <select name="category" >
                                   <option value="" disabled selected style="display: none;" > Select Category </option>
                                   <option value="CPU">CPU</option>
                                   <option value="CPU Cooler">CPU Cooler</option>
                                   <option value="MoBo">MoBo</option>
                                   <option value="GPU">GPU</option>
                                   <option value="RAM">RAM</option>
                                   <option value="PSU">PSU</option>
                                   <option value="HDD">HDD</option>
                                   <option value="SSD">SSD</option>
                                   <option value="Case">Case</option>
                                   <option value="Casing Cooler">Casing Cooler</option>
                                 </select><br>

                                 <br>
                                 <label for="image-1">Choose First Image </label>
                                 <input type="file" name="image-1" id="image-1">
                                 <br>
                                 <br>
                                 <label for="image-1">Choose Second Image </label>
                                 <input type="file" name="image-2">
                                 <br>
                                 <br>
                                 <label for="image-1">Choose Third Image </label>
                                 <input type="file" name="image-3">
                                 <br>
                                 <br>

                                 <br>
                                     <label for="searchTags" class="input_field">Enter Search Tags:</label>
                                     <textarea name="searchTags" cols="50" rows="5"></textarea>

                                </select><br><br>  
                                <button name="submit" type="submit" class="button">Insert</button><br>   

                             
                            
                            
                            </form>

                            <?php
                                      
                                      include "connection.php";
                                          

                                      if(isset($_POST["submit"]))
                                        { 
       
                                          $productname = $_POST["name"];
                                          $productprice = $_POST["price"];
                                          $productdescription = $_POST["productdescription"];
                                          $productcondition = $_POST["condition"];
                                          $productavailability = $_POST["available"];
                                          $category = $_POST["category"];
                                          $image_name = "image-1.jpg";
                                          $image_name_2 = 'image-2.jpg';
                                          $image_name_3 = 'image-3.jpg';
                                          $quantity = 1;
                                          $searchtag = $_POST["searchTags"];
                                          



                                           // Insert data into the database

                                          $sql = "INSERT INTO products(product_name, product_price, product_description, product_condition, product_available, product_category, image_1, image_2, image_3, max_quantity,search)
                                                  VALUES('$productname', $productprice, '$productdescription', '$productcondition', '$productavailability', '$category', '$image_name', '$image_name_2', '$image_name_3', $quantity, '$searchtag')";
                                          $result = $conn-> query($sql);
                                          

                                          
                                        
                                        }

            
                                          $conn -> close();
                            ?>




                            
                        </div>
        
                        <div class="update">


                              <form>

                                <label for="productid">Product ID:</label><br>
                                <input class="input_field" type="text" name="id"><br>

                                <label for="productname">Product Name:</label><br>
                                <input class="input_field" type="checkbox" name="name">
                                <input class="input_field" type="text" name="pname"><br>
                                <label for="price">Product Price:</label><br>
                                <input class="input_field" type="checkbox" name="price">
                                <input class="input_field" type="text"  name="pprice"><br>
                               
                                <label for="productdescription" class="input_field">Product Description:</label><br>
                                <input class="input_field" type="checkbox" name="descript">
                                <textarea name="productdescription" cols="50" rows="5"></textarea><br>
                                

                                <label for="productcondition">Product Condition</label><br> 
                                <input class="input_field" type="checkbox" name="pcondition">               
                                <select name="condition" id="condition" >
                                   <option value="" disabled selected >Product Condition</option>
                                   <option value="old">Old</option>
                                   <option value="new">New</option>
                                </select><br>


                                <label for="productavailability">Availability</label><br> 
                                <input class="input_field" type="checkbox" name="avail">               
                                <select name="available" >
                                   <option value="" disabled selected > Select Avaiablility </option>
                                   <option value="instock">In Stock</option>
                                   <option value="outstock">Out of Stock</option>
                                   <option value="upcoming">Upcoming</option>
                                </select><br>

                                <label for="category">Select category</label><br>    
                                <input class="input_field" type="checkbox" name="pcategory">            
                                 <select name="category" >
                                   <option value="" disabled selected style="display: none;" > Select Category </option>
                                   <option value="CPU">CPU</option>
                                   <option value="CPU Cooler">CPU Cooler</option>
                                   <option value="MoBo">MoBo</option>
                                   <option value="GPU">GPU</option>
                                   <option value="RAM">RAM</option>
                                   <option value="PSU">PSU</option>
                                   <option value="HDD">HDD</option>
                                   <option value="SSD">SSD</option>
                                   <option value="Case">Case</option>
                                   <option value="Casing Cooler">Casing Cooler</option>
                                 </select><br>

                                 <br>
                                 <label for="image-1">Choose First Image </label><br>
                                 <input class="input_field" type="checkbox" name="img1">
                                 <input type="file" name="image-1" id="image-1">
                                 <br>
                                 <br>
                                 <label for="image-1">Choose Second Image </label><br>
                                 <input class="input_field" type="checkbox" name="img2">
                                 <input type="file" name="image-2">
                                 <br>
                                 <br>
                                 <label for="image-1">Choose Third Image </label><br>
                                 <input class="input_field" type="checkbox" name="img3">
                                 <input type="file" name="image-3">
                                 <br>
                                 <br>

                                 <label for="maxquantity">Quantity:</label><br>
                                <input class="input_field" type="checkbox" name="quantity">
                                <input class="input_field" type="text" name="maxquantity"><br>

                                 <br>
                                     <label for="searchTags" class="input_field">Enter Search Tags:</label><br>
                                     <input class="input_field" type="checkbox" name="psearch">
                                     <textarea name="searchTags" cols="50" rows="5"></textarea>

                                </select><br><br>  




                                <button name="update" type="submit">Update</button>
                            </form>

                            <?php
                                      
                                      include "connection.php";
                                          

                                      if(isset($_POST["update"]))
                                        { 
                                            $product_id = $_POST['id'];

                                            $sql = "SELECT * FROM products WHERE product_id = $product_id";
                                            $result = $conn-> query($sql);

                                            $product_data = mysqli_fetch_assoc($result);
                                            
                                            $update_attributes = array();


                                            if (isset($_POST['pname'])) {
                                                $product_name = $_POST['name'];
                                                $update_attributes[] = "name = '$product_name'";
                                            }
                                            else
                                            {
                                                $product_name = $product_data['name'];
                                                $update_attributes[] = $product_name;
                                            }
                                        
                                            if (isset($_POST['pprice'])) {
                                                $product_price = $_POST['price'];
                                                $update_attributes[] = "price = $product_price";
                                            }
                                            else
                                            {
                                                $product_price = $product_data['price'];
                                                $update_attributes[] = $product_price;
                                            }
                                            if (isset($_POST['descript'])) {
                                                $product_des = $_POST['productdescription'];
                                                $update_attributes[] = "productdescription = '$product_des'";
                                            }
                                            else
                                            {
                                                $product_des = $product_data['productdescription'];
                                                $update_attributes[] = $product_des;
                                            }
                                        
                                            if (isset($_POST['pcondition'])) {
                                                $product_con = $_POST['condition'];
                                                $update_attributes[] = "condition = $product_con";
                                            }  
                                            else
                                            {
                                                $product_con = $product_data['condition'];
                                                $update_attributes[] = $product_con;
                                            }         
                                                                             
                                            if (isset($_POST['avail'])) {
                                                $product_avail = $_POST['available'];
                                                $update_attributes[] = "available = '$product_avail'";
                                            }
                                            else
                                            {
                                                $product_avail = $product_data['available'];
                                                $update_attributes[] = $product_avail;
                                            }
                                        
                                            if (isset($_POST['pcategory'])) {
                                                $product_cat = $_POST['category'];
                                                $update_attributes[] = "category = $product_cat";
                                            }
                                            else
                                            {
                                                $product_cat = $product_data['category'];
                                                $update_attributes[] = $product_cat;
                                            }
                                            
                                            if (isset($_POST['img1'])) {
                                                $img_1 = $_POST['image-1'];
                                                $update_attributes[] = "image-1 = $img_1";
                                            }
                                            else
                                            {
                                                $img_1 = $product_data['image-1'];
                                                $update_attributes[] = $img_1;
                                            }
                                            if (isset($_POST['img2'])) {
                                                $img_2 = $_POST['image-2'];
                                                $update_attributes[] = "image-2 = $img_2";
                                            }
                                            else
                                            {
                                                $img_2 = $product_data['image-2'];
                                                $update_attributes[] = $img_2;
                                            }                                            
                                            if (isset($_POST['img3'])) {
                                                $img_3 = $_POST['image-3'];
                                                $update_attributes[] = "image-3 = $img_3";
                                            }
                                            else
                                            {
                                                $img_3 = $product_data['image-3'];
                                                $update_attributes[] = $img_3;
                                            }
                                            if (isset($_POST['quantity'])) {
                                                $product_quan = $_POST['maxquantity'];
                                                $update_attributes[] = "maxquantity = '$product_quan'";
                                            }    
                                            else
                                            {
                                                $product_quan = $product_data['maxquantity'];
                                                $update_attributes[] = $product_quan;
                                            }
                                            if (isset($_POST['psearch'])) {
                                                $product_srch = $_POST['searchTags'];
                                                $update_attributes[] = "searchTags = '$product_srch'";
                                            }    
                                            else
                                            {
                                                $product_srch = $product_data['searchTags'];
                                                $update_attributes[] = $product_srch;
                                            }
                                            
       

                                          
                                              // Add similar checks for other attributes

                                          if (!empty($update_attributes)) {
                                            $sql1 = "UPDATE products SET " . implode(", ", $update_attributes) . " WHERE product_id = $product_id";
                                             $result1 = $conn-> query($sql);
                                          }
                                          

                                          
                                        
                                        }

            
                                          $conn -> close();
                            ?>
                              
                            

                        </div>    
                        
                        <div class="drop">

                                <form>
                                   <label for="productid">Product ID:</label><br>
                                   <input class="input_field" type="text" name="id"><br><br><br>
                                   <button name="delete" type="submit">Delete</button>
                                </form>
                            <?php
                                      
                                      include "connection.php";
                                          

                                      if(isset($_POST["delete"]))
                                       {

                                         $productid = $_POST["id"];

                                          $sql = "DELETE FROM products WHERE product_id = '$productid'";
                                          $result = $conn-> query($sql);

                                       }
                                
                                          $conn -> close();
                            ?>
                            

                        </div>                         
        
        
        
                    </div>
        
                </div>
    
    
            </section>
        
        
</div>


<!-- 
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="ri-facebook-circle-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-twitter-x-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
                <a href=""><i class="ri-youtube-fill"></i></a>
     
            </div>
            
            <nav class="footerNavList">
                <ul>
                    
                    <li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contect Us</a></li>
                    <li><a href="">Our Team</a></li>
                </ul>
            </navv>            
        </div>


        <div class="footerBottom">
            <p>CopyRight &copy;2024; Designed by <span class="Designer"></span>JONAK BHOWMIK</p>
        </div>
       
    </footer>
 -->


    <script src="script_1.js"></script>
</body>
</html>
