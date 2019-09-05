<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// echo $name,"<br>";
	// echo $mobile,"<br>";
	// echo $address;

	
	

		foreach($students as $values){
		foreach($values as $key=>$val){
		echo $key,":", $val,"<br>";
	}
      }
	?>


</body>
</html>