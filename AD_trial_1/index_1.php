<!DOCTYPE html>
<html>
<head>
    <title>Products Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Products Table</h1>
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
    
    </table>
</body>
</html>
