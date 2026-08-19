//Name:- Nizam Sumara 
//Enroll no :- 92400527157

<!DOCTYPE html>
<html>
<body>

<h2>Product</h2>

<form action="" method="post" enctype="multipart/form-data">
    Product Name: <input type="text" name="productname"><br><br>
    Price: <input type="number" name="price"><br><br>
    Product Type:<select name="type">
        <option value="">--Select Product Type--</option>
        <option value="Electronics">Electronics</option>
        <option value="Clothing">Clothing</option>
        <option value="Books">Books</option>
        <option value="Furniture">Furniture</option>
        <option value="Food">Food</option>
    </select><br><br>
    Image: <input type="file" name="img"><br><br>
    Product Qty: <input type="number" name="qty"><br><br>
    <input type="submit" name="upload" value="upload">
</form>

</body>
</html>

<?php
include 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $image = $_FILES["img"];

    $imagename = $image["name"];
    $tempname = $image["tmp_name"];
    $imagesize = $image["size"];
    $error = $image["error"];

    $dir = "upload/";

    if(!is_dir($dir))
    {
        mkdir($dir, 0777, true);
    }

    if($error == 0)
    {
        if(move_uploaded_file($tempname, $dir.$imagename))
        {
            $p_name = $_POST["productname"];
            $p_price = $_POST["price"];
            $p_type = $_POST["type"];
            $p_qty = $_POST["qty"];

            $sql = "INSERT INTO product(Pro_name,Pro_price,Pro_type,Pro_image,Pro_qty)
                    VALUES('$p_name','$p_price','$p_type','$imagename','$p_qty')";

            if(mysqli_query($conn, $sql))
            {
                echo "Product uploaded successfully.";
            }
            else
            {
                echo "Database Error: " . mysqli_error($conn);
            }
        }
        else
        {
            echo "Failed to upload image.";
        }
    }
    else
    {
        echo "Please select a valid image.";
    }
}
?>