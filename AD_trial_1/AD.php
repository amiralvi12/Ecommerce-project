<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sidebar</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="style_AD.css">

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
                                        <span class="text nav-text">Revenue</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#"class="box" id="box_3">
                                        
                                        <span class="material-symbols-rounded icon">notifications</span>
                                        <span class="text nav-text">Notifications</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_4">
                                       
                                        <span class="material-symbols-rounded icon">incomplete_circle</span>
                                        <span class="text nav-text">Analytics</span>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-links">
                                    <a href="#" class="box" id="box_5">
                                        
                                        <span class="material-symbols-rounded icon">favorite</span>
                                        <span class="text nav-text">Likes</span>
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
        
        
        
                        <div class="main-cards">
                            
                            <div class="card" id="card_1">
                                <div class="card-inner">
                                    <h3>Products</h3>
                                </div>
                                <h1>249</h1>
                            </div>
                    
                            <div class="card" id="card_2">
                                <div class="card-inner">
                                    <h3>Categories</h3>
                                </div>
                                <h1>25</h1>
                            </div>
                    
                            <div class="card" id="card_3">
                                <div class="card-inner">
                                    <h3>Customers</h3>
                                </div>
                                <h1>1500</h1>
                            </div>
                    
                            <div class="card" id="card_4">
                                <div class="card-inner">
                                    <h3>Alert</h3>
                                </div>
                                <h1>56</h1>
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
        
    
                        <div class="recent_orders">
                            <h2>Data From Database</h2>

                            <table>
                              <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Available</th>
                                <th>Product Category</th>
                               </tr>

                               <?php
                               $conn = mysqli_connect("localhost","root","","cse311");
                               if($conn -> connect_error)
                               {
                                 die ("Connection Failed:". $conn-> connect_error);

                                } 
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
                                        <td>" . $row["product_available"] . "</td>;
                                        <td>" . $row["product_category"] . "</td>;
                                    </tr>

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
    
    
                            
                        <div class="settings">
                            
                            <div class="card" id="card_1">
                                <div class="card-inner">
                                    <h3>Products</h3>
                                </div>
                                <h1>249</h1>
                            </div>
                    
                            <div class="card" id="card_2">
                                <div class="card-inner">
                                    <h3>Categories</h3>
                                </div>
                                <h1>25</h1>
                            </div>
                    
                            <div class="card" id="card_3">
                                <div class="card-inner">
                                    <h3>Customers</h3>
                                </div>
                                <h1>1500</h1>
                            </div>
                    
                            <div class="card" id="card_4">
                                <div class="card-inner">
                                    <h3>Alert</h3>
                                </div>
                                <h1>56</h1>
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
        
        
        
        
        
                    </div>
        
                </div>
    
    
            </section>
        
        
</div>



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



    <script src="script_AD.js"></script>
</body>
</html>
