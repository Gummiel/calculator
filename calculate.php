<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<?php
$nr1 = $_POST["nr1"];
$nr2 = $_POST["nr2"];
$operator = $_POST["operator"];
$result = 0;
switch ($operator)
{
    case "Plus":
        echo Sum($nr1, $nr2);
        break;
    case "Minus":
        echo Subtraction($nr1, $nr2);
        break;
    case "Multiplication":
        echo Multiplication($nr1, $nr2);
        break;
    case "Division":
        echo Division($nr1, $nr2);
        break;
}
function Sum($nr1, $nr2)
{
    $result = $nr1 + $nr2;
    return $result;
}
function Subtraction($nr1, $nr2)
{
    $result = $nr1 - $nr2;
    return $result;
}
function Multiplication($nr1, $nr2)
{
    $result = $nr1 * $nr2;
    return $result;
}
function Division($nr1, $nr2)
{
    $result = $nr1 / $nr2;
    return $result;
}
?>
</body>
</html>