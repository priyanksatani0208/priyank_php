<html>
    <head>
	    <title>Add and diff</title>
	</head>
	<body>
	   <form method='post'>
	      Frist Number :
		<input type="number" name="frist"><br><br>
		  Secound Number:
		  <input type="number" name="secound"><br><br>
		  <input type="submit" name="sub" value="ADDTION">
		  <input type="submit" name="diff" value="DIVISON">
	   </form>
	</body>
</html>
<?php

 function sub($x,$y)
 {
	$sub=$x+$y;
	echo"<h3>sub is : $sub</h3>";
	 
 }
 
 function diff($x,$y)
 {
	$diff=$x-$y;
	echo"<h3>Diff is : $diff</h3>";
	 
 }
 
 if(isset($_POST['sub']))
 {
	sub($_POST['frist'],$_POST['secound']);
 }
 if(isset($_POST['diff']))
 {
	diff($_POST['frist'],$_POST['secound']);
 }
 
?>
