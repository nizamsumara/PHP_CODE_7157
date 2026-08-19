// Name : Nizam Sumara
// Enroll no : 92400527157
//Create PHP Code to upload image on server.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label>select image:</label>
        <input type="file" name="img">
        <input type="Submit" name="upload" value="upload">
    </form>
</body>
</html>

<?php
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
        if(move_uploaded_file($tempname, $dir . $imagename))
        {
            echo "Image uploaded successfully.";
        }
    }
}