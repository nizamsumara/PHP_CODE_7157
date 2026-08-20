<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Slider</title>

    <style>
        body{
            font-family: Arial;
            text-align:center;
            background:#f2f2f2;
        }

        .slider{
            width:600px;
            height:400px;
            margin:40px auto;
            position:relative;
            overflow:hidden;
            border:3px solid black;
        }

        .slider img{
            width:100%;
            height:100%;
            position:absolute;
            display:none;
        }

        .slider img.active{
            display:block;
        }
    </style>
</head>

<body>

<h2>PHP Image Slider</h2>

<div class="slider">

<?php
$folder = "upload/";
$images = glob($folder . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

$count = 0;

foreach($images as $img)
{
    if($count == 0)
    {
        echo "<img src='$img' class='active'>";
    }
    else
    {
        echo "<img src='$img'>";
    }
    $count++;
}
?>

</div>

<script>

let slides = document.querySelectorAll(".slider img");
let index = 0;

setInterval(function(){

    slides[index].classList.remove("active");

    index++;

    if(index == slides.length)
    {
        index = 0;
    }

    slides[index].classList.add("active");

},2000);

</script>

</body>
</html>