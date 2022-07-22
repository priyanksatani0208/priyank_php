<h1><u>pattern 2 for php</u></h1>

<?php
  $n=4;
  
  for($i=1;$i<=$n;$i++)   //outer
  {
	  for($j=1;$j<=$i;$j++) //inner
	  {
		  echo"* ";
	  }
	  echo"<br>";
  }
  
?>
<br><br>
<?php
  $n=5;
		for($i=$n;$i>=1;$i--)  
		{
			for($j=1;$j<=$i;$j++)
			{
				echo"* ";
			}
			echo"<br>";
		}
?>
<br><br>
<?php
  $n=5;

    for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo"$j";
		}
		echo"<br>";		
	}   
	
?>

<br><br>
<?php
    
		for($i=4;$i>=1;$i--)
		{
			for($j=1;$j<=$i;$j++)
			{
				echo"$j";
			}
			echo"<br>";
		}   
?>
<br><br>
<?php
 $n=5;
 $number=1;
 	for($i=1;$i<=$n;$i++)     //row(inner)
	 {
		 for($j=1;$j<=$i;$j++)    //col(outer)
		 {
			 echo"$number  ";
			 $number++;
		 }
		 echo"<br>";
	 }
?>
<br><br>
<?php
   $n=5;

   for($i=1;$i<=$n;$i++)
   {
	   for($j=1;$j<=$i;$j++)
	   {
		   $sum=$i+$j;
		   if($sum % 2 == 0)
		   {
			   echo"1 ";
		   }
		   else
		   {
			   echo"0 ";
		   }
	   }
	   echo"<br>";
   }
?>
