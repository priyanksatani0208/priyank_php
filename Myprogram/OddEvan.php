<html>
   <head>
      <title>Odd Evan Number</title>
   </head>
   
   <body>
      <h1>Odd Evan Number</h1>
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
   
   if(($number%2)==0)
   {
      echo"<h3>$number is Evan</h3>";
   }
   else
   {
      echo"<h3>$number is Odd</h3>";
   }
}
?>