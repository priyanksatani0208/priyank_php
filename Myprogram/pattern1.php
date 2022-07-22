<h1><u>pattern for php</u></h1>

<?php
   $m=4;
   $n=5;
   
   for($i=1;$i<=$m;$i++)
   {
	   for($j=1;$j<=$n;$j++)
	   {
		   if($i==1 || $j==1 ||$i == $m ||$j == $n)
		   {
			   echo" * ";
		   }
		   else
		   {
			  echo"# ";
		   }
	   }
	   echo"<br>";
   }

?>