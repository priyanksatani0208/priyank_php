<h1><u>Array For PhP</u></h1>

<?php
  /*
  $varible=array("shital"=>50000,"vipul"=>80000,"mahesh"=>45000);
  
  foreach($varible as $key => $value)
  {
	  echo "<h3>$key Salary is : $value</h3>";
  }*/
  
  $pri=array
  (
    array(1,"Priyank",100000),
	array(2,"Raj",50000),
	array(3,"Mihir",40000)
  );
  
   for($row=0;$row<3;$row++)
   {
	   for($col=0;$col<3;$col++)
	   {
		   echo $pri[$row][$col]." ";
	   }
	   echo"<br>";
   }
   

  
  
?>