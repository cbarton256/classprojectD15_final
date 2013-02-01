<?php
  $days_per_wk = 7;
  $hrs_per_day = 24;
  $mins_per_hr = 60;
  
  $total = $days_per_wk * $hrs_per_day * $mins_per_hr;
  print "<p>";
  print "Minutes per week (24 hrs/day): ";
  print $total;
  
  $hrs_per_day = 26;
  $total = $days_per_wk * $hrs_per_day * $mins_per_hr;
  print "<p>";
  print "Minutes per week ($hrs_per_day hrs/day): ";
  print $total;
  print "</p></p>"

  ?>