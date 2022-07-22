<?php

  $p=40;
  
  if(isset($p))
  {
	  echo "SET";
  }
  else
  {
	  echo "NOT SET ";
  }
  
?>

<form>
   <input type="submit" name="submit" value="Register">
</form>

<?php
 if(isset($_REQUEST['submit']))
 {
	 echo "HELLO";
 }
?>
