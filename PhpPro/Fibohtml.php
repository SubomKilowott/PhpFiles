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
<h1> Welcome to PHP Programming </h1>

<form method="post">
    <input type="number" name="terms" id="terms" min="1" required value="Enter the Fibo Series you want to generate">
    <input type="submit" class="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    function generateFibonacciSeries($terms) {
        $fibonacciSeries = array();

        if ($terms >= 1) {
            $fibonacciSeries[] = 0;
        }
        if ($terms >= 2) {
            $fibonacciSeries[] = 1;
        }

        for ($i = 2; $i < $terms; $i++) {
            $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        }

        return $fibonacciSeries;
    }

    $terms = $_POST["terms"];

    if ($terms <= 0) {
        echo "Please enter a valid positive number of terms.\n";
    } else {
        $fibonacciSeries = generateFibonacciSeries($terms);

        echo "Fibonacci series with $terms terms:\n";
        foreach ($fibonacciSeries as $term) {
            echo $term . " ";
        }
        echo "<br>";
    }
}


?>
<?php





?>


</body>
</html>
