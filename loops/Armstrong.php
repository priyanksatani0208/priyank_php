<h3><u>Armstrong Number </u></h3>

<?php
  $num=407;
  $total=0;
  $x=$num;
  
  while($x!=0)
  {
	$rem=$x%10;
	$total=$total+$rem*$rem*$rem;
	$x=$x/10;
  }
  
  if($num==$total)
  {
	  echo"<h3>$num is Armstrongm number.</h3>";
  }
  else
  {
	  echo"<h3>$num is not Armstrong number.</h3>";
  }
  
  
?>