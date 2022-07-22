<h1><u>Result</u></h1>

<?php
  $java=75;
  $php=80;
  $Csharp=72;
  $sql=85;
  $total=$java+$php+$Csharp+$sql;
  
  echo "<h1>Sum of subject marks :=".$total."</h1>";
  
  $per=($total*100)/400;
  
  echo "<h1>student persentage is := ".$per."</h1>";
  if($per>=75)
  {
	  echo "<h1>youre class is district &#128525;</h1>";
  }
  else if($per >=60 && $per < 70)
  {
	  echo "youre class is Frist.".$total;
  }
  else if($per >=40 && $per < 60)
  {
	  echo "youre class is secound .".$total;
  }
  else if($per >=35 && $per < 40 )
  {
      echo " youre class is pass .".$total;
  }	  
  else
  {
	  echo "Better luck next Time".$total;
  }
?>