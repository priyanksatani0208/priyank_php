<h1><u>Logical operator(&& , || , !)</u></h1>

<?php

   #And(&&) operator
   $a=100;
   $b=200;
   
   if($a==100 && $b==200) #both are condition true
   {
	   echo"<h2>Hello , My Name is priyank Satani.</h2>";
   }
   
   #OR(||) operator
   $a=50;
   $b=40;
   
   if($a==50 || $b==40) #any one condition true ,than return ans.
   {
	   echo"<h2>Hello , My Name is priyank satani.</h2>";
   }
   
   #NOT(!) operator
   $a=50;
   
   if($a!=40) #condition False ,than return ans
   {
	   echo "<h2>Hello , My Name is priyank satani.</h2>";
   } 
?>