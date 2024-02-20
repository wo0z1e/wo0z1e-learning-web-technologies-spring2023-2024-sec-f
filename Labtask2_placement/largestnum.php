<?php
    $num1 = 95;

    $num2 = 45; 

    $num3 = 28; 

    if ($num1 >= $num2 && $num1 >= $num3)
     {
        echo "The largest number is : " . $num1;
    }
    elseif ($num2 >= $num1 && $num2 >= $num3) 
    {
        echo "The largest number is : " . $num2;
    } 
    
    else 
    {
        echo "The largest number  is : " . $num3;
    }
?>