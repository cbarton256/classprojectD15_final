<?php
/* accepting input could be good.... */
/* while not null  */
/*  { $base=readint; */
  $base = 5;
  
  print "Here's the $base table:"."<br>";
  for ($i=1; $i<=10; $i=$i+1)
  {   
      $tmp = $base*$i;
      print "  $base x $i = $tmp"."<br>";
  }

/* } */
?>