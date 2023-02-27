<html>
<body>
<form method="post">
   Enter The Number:<br>
  <input type="number" name="number" id="number">
  <input type="Submit" name="Submit" value="Submit">
  </form>
  <?php
   if($_POST)
	 {
	   $number = $_POST['number'];
       echo"Odd number between 1 to 100: <br><br>";
	   for($j=1;$j<=$number;$j++)
	   {
	    if($j%2!=0)
		{
		  echo $j.",";
		}
	   }
	 }
    ?>
	</body>
	</html>
	
	 
  