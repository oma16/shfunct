<?php
 
function numbers (array $start , array $end ){
     $result = [$start , $end];
       for ($i=0; $i < 2 ; $i++) { 

            for ($x=0; $x < 6 ; $x++) { 
                

                echo $result[$i][$x] . "<br>" ;
            }
        }
     }

  numbers([0,1,2,3,4,5] ,[50,60,70,80,90,100])."<br>"."<br>";

   echo "<b>"."Sum of numbers in an array"."</b>". "<br>";
  
   function sum($num){
    echo array_sum($num);
  }
  sum([10,20,30,40,50,60,70,80,90,100]);

 
?> 