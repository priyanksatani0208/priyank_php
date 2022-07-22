<h1><u>Nested if else Statement</u></h1>

<?php
  $a=40;
  $b=40;
  
  if($a==$b)
  {
	  if($a==$b)
	  {
		  echo "<h2>Varible A and Varible B is Equal</h2>";
	  }
	  else
	  {
		  echo "<h2>Both Varible is not Equal</h2>";
	  }
  }
  else
  {
	  echo "<h2>Varible A and Varible B are not Sem.</h2>";
  }
?>