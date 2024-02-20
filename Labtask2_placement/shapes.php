<?php 

for($i=0; $i<3; $i++){
    
    for($j = 0; $j <= $i; $j++)
    {
        echo "* ";

    }
 
    for($j = 0; $j < 3 - $i; $j++)
    {
        echo "" .$j+1;
    }
   
    $alphabet = range('A', 'Z');
    for($j=0; $j<=$i; $j++){  
        echo $alphabet[$j] ;  
        }  
    
        echo " <br>";
}


?>