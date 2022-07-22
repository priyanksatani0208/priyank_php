<h2><u>Comparison operator</h2></u>

<?php
  #equal(==) oprator
  
  $a=40;
  $b=40;
  
  if($a==$b)
  {
	  echo "<h2>Varible A and Varible B are Equal.</h2> ";
  }
  else
  {
	  echo "<h2>Both Varible are not Equal.</h2>";
  }  
  
  #(===)data type cheak operator
  $a=40;
  $b="40";
  
  if($a===$b) #three type equal sign.
  {
	  echo "<h2>Varible A and Varible B are Equal.</h2> ";
  }
  else
  {
	  echo "<h2>Both Varible are not Equal.</h2>";
  }  
  
  #less(<) than operator
  $a=80;
  $b=70;
  
  if($b<$a)
  {
	  echo "<h2>B less than A.</h2>";
  }  
  else
  {
	  echo "<h2>B Not less than A.</h2>";
  }
  
  #greater(>) than operator
  $a=70;
  $b=60;
  
  if($a>$b)
  {
	  echo "<h2>A greater than B.</h2>";
  }
  else
  {
	  echo"<h2>A not greater than B.</h2>";
  }
  
  #less than equal(<=) operator
  $a=10;
  $b=20;  
  
  if($a<=$b)
  {
	  echo"<h2>B is max.</h2>";
  }
  else
  {
	  echo"<h2>A is max.</h2>";
  }
  
  #greater than equal(>=) operator
  $a=1000;
  $b=900;
  
  if($a>=$b)
  {
    echo"<h2>A is max.</h2>";
  }
  
  else 
  {
	echo"<h2>B is max</h2>";
  }
  
  #not equal(!=) operator
   $a=100;
   $b=200;
   
   if($a!==$b)
   {
	   echo"<h2>Varible A and Varible B are note same.</h2>";
   }
   else
   {
	   echo"<h2>Varible A and Variblr B are same.</h2>";
   }
?>