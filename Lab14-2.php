<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load AJAX text file</title>
</head>
<body>

    <div id="demo">
        <h2>Hello, Good Morning !</h2>
        <button onclick="change()">change content</button>
    </div>

    
    <script>
        function change(){
            const xhr = new XMLHttpRequest();
            xhr.open("GET","data.txt",true);

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){

                document.getElementById("demo").innerHTML = xhr.responseText;

            }
        }
        
        xhr.send(); 
        }
    </script>
</body>
</html>