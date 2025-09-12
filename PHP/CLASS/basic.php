<?php
$m1=25;
$m2= 0;
$m3= 120;
$total= 0;
  for ($i= 0; $i<3; $i++) {
       if($i==0)
       {
       $total+=$m1;
       }

        if($i==1)
       {
       $total+=$m2;
       }
        if($i==2)
       {
       $total+=$m3;
       }
  }
  echo $total."";
?>