<?php
/* accepting input could be good.... */
/* while not null  */
/* $test_case[$i]=readflt; $i=$i+1;*/
  $test_case = array (0.50, 7.0, 10.0, 15.5, 20.0);
  foreach ($test_case as $case => $item_price)
  
  {   if ($item_price<=10.00)
      {   $final_price = $item_price * 0.9;
      } else 
     {   $final_price = $item_price * 0.8;
      }
      print "Test case $case: Original price: $item_price; Discount price: $final_price"."<br>";
  }

?>