<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img style="width: 226px; height: 50px;" src="./images/logo.png" alt=""></a>
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="dropdown">
                        <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            role="button"
                            id="dropdownMenuLink"
                            data-mdb-dropdown-init
                            data-mdb-ripple-init
                            aria-expanded="false"
                        >
                            <i class="fa fa-user" aria-hidden="true"></i>
                            User
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item login" href="login.php">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item register" href="register.php">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    Register
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item dashboard display" href="user-dashboard.php">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="logout display">
                                <a class="dropdown-item" href="index.php?logout">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item" style="margin-left: 3px">
                    <div class="btn-group shadow-0">
                        <button type="button" class="btn btn-link dropdown-toggle" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                            Categories
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="category.php?category=CPU">CPU</a></li>
                            <li><a class="dropdown-item" href="category.php?category=CPU Cooler">CPU Cooler</a></li>
                            <li><a class="dropdown-item" href="category.php?category=MoBo">MoBo</a></li>
                            <li><a class="dropdown-item" href="category.php?category=GPU">GPU</a></li>
                            <li><a class="dropdown-item" href="category.php?category=RAM">RAM</a></li>
                            <li><a class="dropdown-item" href="category.php?category=PSU">PSU</a></li>
                            <li><a class="dropdown-item" href="category.php?category=HDD">HDD</a></li>
                            <li><a class="dropdown-item" href="category.php?category=SSD">SSD</a></li>
                            <li><a class="dropdown-item" href="category.php?category=Case">Case</a></li>
                            <li><a class="dropdown-item" href="category.php?category=Casing Cooler">Casing Cooler</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item cart-nav display" style="margin-left: 3px">
                    <a href="cart.php" class="btn btn-warning position-relative">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-danger">
                            <?php
                                if(isset($_SESSION['count'])) {
                                    echo $_SESSION['count'];
                                }
                                else {
                                    echo 0;
                                }
                            ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            </ul>
            <form class="d-flex input-group w-auto" action="search.php" method="post">
                <input
                    name="search"
                    type="text"
                    placeholder="Search"
                    class="form-control"
                    aria-label="Search"
                />
                <input
                    data-mdb-ripple-init
                    class="btn btn-outline-primary"
                    type="submit"
                    name="submit_search"
                    data-mdb-ripple-color="dark"
                    value="Search"
                />
            </form>
        </div>
    </div>
</nav>

<br>
<br>
