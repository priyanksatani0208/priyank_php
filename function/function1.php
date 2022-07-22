<h1><u>Function For php</u></h1>

<?php
   /*  without arrgument
   function hello()
   {
	   echo "<h3>Hello , How Are You !</h3>";
   }
   
   hello();
   */

   //with aargument
    function data($name,$passon,$subject)
    {
		echo "<h3>$name is $work .  Favorite subject is $subject.";
	}	
	data("Raj","BCA student","PhP");
	data("Vipul","BBA Student","Account");
	data("Shital","B.com student","Static");
?>