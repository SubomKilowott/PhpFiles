<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
     .submit{
        border-radius: 10px;
     }   
    </style>
</head>
<body>


<form method="post">
    <input type="number" name="number" id="number" min="1" required value="Enter the Fibo Series you want to generate">
    <input type="submit" class="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
function generateFibonacci($number) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $number; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}



$number = $_POST["number"];

if ($number <= 0) {
    echo "Please enter a valid positive number of terms.\n";
} else {
    $fibo = generateFibonacci($number);

    echo "Fibonacci series with $number terms:\n";
    for($i=0;$i<=$number;$i++)
    {
        echo"$fibo[$i]". " ";
    }
    echo "<br>";
}

}
