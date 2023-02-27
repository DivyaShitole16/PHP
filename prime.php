  
<html>
<head>
<title>Given number is Prime Or Not in PHP</title>
</head>
<body>
<form method="POST">
   Enter The Number:
  <input type="text" name="input" id="number">
  <input type="Submit" name="Submit" value="Submit">
  </form>
  <?php
     if($_POST)
	 {
	   $input=$_POST['input'];
	
	   for($i=2;$i<=$input-1;$i++)
	   {
	    if($input%$i==0)
		{
		  $value=True;
		}
       }
		if(isset($value)&&value)
		{
		   echo 'The Number'.$input.'is not Prime';
		   
		}
		else
		{
		   echo 'The Number ' .$input.' is  Prime';
		}
	 }
	 ?>
	 </body>
	 </html>
	
	 
  