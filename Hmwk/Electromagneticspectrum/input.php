
<?php
/*
	Travis Hajagos
	Sept 17th, 2014
	Purpose: Electro magnetic spectrum
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electro Magnetic Spectrum</title>
</head>

<body>
<?php
	$wavelength=$_GET['wavelength'];
	//determine the spectrum
	$spctrm=($wavelength>5)?'Radio Wave':(
		($wavelength>=5e-4)?'MicroWave':(
		($wavelength>=5e-6)?'Infrared Wave':(
		($wavelength>=1e-7)?'Visible Light':(
		($wavelength>=1e-9)?'Ultraviolet Wave':'Xray'))));
		//output the results
	echo "<h1>A wavelength of $wavelength = $spctrm</h1>";
	?>
	
	
	<img src="electromagneticspectrum.jpg" />
	
</body>
</html>