<?php include "header.php"?>

<?php

    $connect = mysqli_connect("localhost","root","","cse311");

    if(isset($_POST["submit"])) {
        $image_dir = "images/";
        $image_name = $_FILES["image-1"]["name"];
        $image_temp_name = $_FILES["image-1"]["tmp_name"];
        $path = $image_dir.$image_name;
        move_uploaded_file($image_temp_name, $path);

        $image_name_2 = $_FILES["image-2"]["name"];
        $image_temp_name_2 = $_FILES["image-2"]["tmp_name"];
        $path = $image_dir.$image_name_2;
        move_uploaded_file($image_temp_name_2, $path);

        $image_name_3 = $_FILES["image-3"]["name"];
        $image_temp_name_3 = $_FILES["image-3"]["tmp_name"];
        $path = $image_dir.$image_name_3;
        move_uploaded_file($image_temp_name_3, $path);


        $productname = $_POST["productname"];
        $productprice = $_POST["productprice"];
        $productdescription = $_POST["productdescription"];
        $productconditon = $_POST["productconditon"];
        $category = $_POST['category'];
        $searchTags = $_POST['searchTags'];
        $quantity = $_POST['quantity'];
        $available = $_POST["available"];

        $query = "INSERT INTO products(product_name, product_price, product_description, product_condition, product_available, product_category, image_1, image_2, image_3, max_quantity, search)";
        $query .= "VALUES('$productname', $productprice, '$productdescription', '$productconditon', '$available', '$category', '$image_name', '$image_name_2', '$image_name_3', $quantity, '$searchTags')";
        $insert_product = mysqli_query($connect, $query);

        if($insert_product) {
            echo "Inserted Succesfully";
        }
    }
?>


<div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="productname" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="productname" placeholder="Enter Product Name"
                   name="productname">
        </div>
        <div class="mb-3 mt-3">
            <label for="productprice" class="form-label">Product Price:</label>
            <input type="number" class="form-control" id="productprice" placeholder="Enter Product Price"
                   name="productprice">
        </div>
        <div class="mb-3 mt-3">
            <label for="productdescription" class="form-label">Product Description:</label>
            <textarea name="productdescription" id="productdescription" cols="50" rows="5"></textarea>
        </div>
        <label class="form-label">Choose Product Condition: </label>
        <br>
        <select class="mb-3 mt-3 option" name="productconditon">
            <option>New</option>
            <option>Used</option>
        </select>
        <br>
        <label class="form-label">Choose Product Availability: </label>
        <br>
        <select class="mb-3 mt-3 option" name="available">
            <option>In Stock</option>
            <option>Out Of Stock</option>
        </select>
        <br>
        <label class="form-label">Choose Product Category: </label>
        <br>
        <select class="mb-3 mt-3 option" name="category">
            <option>CPU</option>
            <option>CPU Cooler</option>
            <option>MoBo</option>
            <option>GPU</option>
            <option>RAM</option>
            <option>PSU</option>
            <option>HDD</option>
            <option>SSD</option>
            <option>Case</option>
            <option>Casing Cooler</option>
        </select>
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
        <label for="quantity">Give Maximum Product Quantity</label>
        <input style="width: 100px;" class="form-control" type="number" name="quantity" id="quantity">
        <br>
        <div class="mb-3 mt-3">
            <label for="searchTags" class="form-label">Enter Search Tags:</label>
            <textarea name="searchTags" id="searchTags" cols="50" rows="5"></textarea>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<?php include "footer.php"?>
