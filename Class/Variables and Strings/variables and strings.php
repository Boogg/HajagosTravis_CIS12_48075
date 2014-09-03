<?php
	/*
	Travis Hajagos 
	August 27th, 2014
	Purpose: Comments/variables/strings
	*/
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Strings And Variables</title>
</head>

<body>
	<?php
		//Declare variables
		$hours=40;//Worked 40 hours
		$payrate=9;//$'s/hour
		//Calculate the paycheck
		$grossPay=$hours*$payrate;
		//Output the result
		echo "<p>Hours Worked = $hours (hrs)</p>";
		echo '<p>Pay Rate = $$payrate</p>';
		echo "<p>Pay Check = $".$grossPay.'</p>';
	?>
</body>
</html>