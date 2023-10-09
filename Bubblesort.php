
    <?php
    function bubblesort($arr,$n){
        for ( $i = 0; $i < $n ; $i++) {
            for ( $j = 0; $j < $n - 1; $j++) {
                if ($arr[$j+1] > $arr[$j]) {
                    
                    $temp = $arr[$j+1];
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }
    $arr=array();
    $n;
    echo"Enter the range of the array you want to bubble sort";
    $n=readline();
    for($i=0;$i<$n;$i++)
    {
        $arr[$i]=fgets(STDIN);
    }

    

    $sortedarray=bubblesort($arr,$n);
    for($i=0;$i<$n;$i++)
    {
        echo"    ";
        echo "$sortedarray[$i]";
    }

    ?>
