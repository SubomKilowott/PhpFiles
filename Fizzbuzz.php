<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the Php Fizz Buzz Program</h1>
    
<?php
    for($i=0;$i<=30;$i++)
    {
        if($i%3==0 && $i%5==0)
        {
            
            echo"$i)"."Fizz Buzz<br>";
        }
        elseif($i%3==0)
        {
            echo"$i)"."Fizz <br>";
        }
        elseif($i%5==0)
        {
            echo"$i)"."Buzz<br>";
        }
        else
        {
            echo"$i)"."<br>";
        }
    }
 ?>
</body>
</html>