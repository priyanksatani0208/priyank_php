<html>
   <head>
      <title>Odd Evan Number</title>
   </head>
   
   <body>
      <h1>PRIME NUMBER</h1>
      <form method="post">
        <lable><strong>Enter Number :</strong></lable>
        <input type="number" name="number">
        <input type="submit" name="submit">
      </form>
    </body>

</html>

<?php
if($_POST){
 
   $number=$_POST['number'];
   $n=0;
   for($i = 2;$i < $number; $i++)
   {
	 if(($number % $i==0))
	 {
		$n++;
		break;
	 }
   }
   
    if($n == 0)
	{
		echo"<h3>$number is a prime number.</h3>";
	}		
	else
	{
		echo "<h3>$number is a not prime number.</h3>";
	}
}
?>