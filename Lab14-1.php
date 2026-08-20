<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnClick in AJAX</title>
</head>
<body>
    <div id="demo">
        <h2>Hello, Good Morning !</h2>
        <button onclick="change()">change content</button>
    </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js" integrity="sha512-8LENNbXmzI/Gbj+OwXmqR6V4QaUAw0/porPzy1+dQoJqC0JPHedWoe0DDOTL2uHA5XXJyIsPtiMHH86pVlay6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function change(){
            $("#demo").html("welcome to php");
        }
    </script>
</body>
</html>