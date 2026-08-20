//Name :- Nizam Suamra
//Enroll no :- 92400527157

<?php

    include 'database.php';

    $sel="SELECT * FROM `product`";
    $result=mysqli_query($conn,$sel);

    if($result -> num_rows  > 0){
        while($row = $result -> fetch_assoc())
            echo $row['P_ID']." ".$row['Pro_name']." ".$row['Pro_price']." ".$row['Pro_type']." ".$row['Pro_image']." ".$row['Pro_qty']."<br>";
    }
?>