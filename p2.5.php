//Name :- Nizam Sumara
//Enroll no :- 92400527157

<html>
    //2.5 Write a PHP code for user define function for calculator, take input from user by creating simple html form.

<head>
    <title>Calculator</title>
</head>
<body>

<form method="post">
    Number 1:
    <input type="number" name="num1" required><br><br>

    Number 2:
    <input type="number" name="num2" required><br><br>

    Operator:
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
function cal($a, $b, $op)
{
    switch($op)
    {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            if($b != 0)
                return $a / $b;
            else
                return "Cannot divide by zero";
        default:
            return "Invalid Operator";
    }
}

if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['op'];

    echo "<h3>Answer = ".cal($a, $b, $op)."</h3>";
}
?>

</body>
</html>
