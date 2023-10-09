<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort</title>
</head>
<body>
    <h1>Bubble Sort</h1>

    <!-- HTML form for user input -->
    <form method="post">
        Enter the range of the array you want to bubble sort: <input type="number" name="n"><br>
        Enter array elements (one per line):<br>
        <textarea name="arr_elements" rows="5" cols="30"></textarea><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    function bubbleSort($arr, $n) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - 1; $j++) {
                if ($arr[$j + 1] > $arr[$j]) {
                    $temp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $n = (int)$_POST["n"];

       
        $inputElements = $_POST["arr_elements"];
        $arr = preg_split("/\r\n|\n|\r/", $inputElements);

        /
        $arr = array_map('intval', $arr);

        
        $sortedArray = bubbleSort($arr, $n);

        
        echo "Sorted Array: " . implode(", ", $sortedArray);
    }
    ?>
</body>
</html>
