<?php
/*
	Travis Hajagos
	Sept 27th, 2014
	Purpose: Electro Magnetic Arrays
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electrmagnetic Table with Arrays</title>
</head>
<body>
<h1>Electro Magnetic Spectrum</h1>

<table width="200" border="1">
	<tr>
		<th>Row</th>
		<th>Wavelength</th>
		<th>Spectrum</th>
	</tr>
<?php
	$wavelength=3;
	$spectrum=" ";
	for($row = 1;$row <= 16; $row++){
	if($wavelength > 0){
		$spectrum="Radio";
	}elseif($wavelength > -4){
		$spectrum="Microwave";
	}elseif($wavelength > -6){
		$spectrum="Infrared";
	}elseif($wavelength > -7){
		$spectrum="Visiable";
	}elseif($wavelength > -9){
		$spectrum="Ultraviolet";
	}elseif($wavelength > -11){
		$spectrum="X-Ray";
	}else{
		$spectrum="Gamma Ray";
	}
	echo "<tr>";
	echo "<td>$row</td>";
	echo "<td>10^$wavelength</td>";
	echo "<td>$spectrum</td>";
	echo "</tr>";
	
	$wavelength=$wavelength-1;
	};
?>
</table>

</body>
</html>