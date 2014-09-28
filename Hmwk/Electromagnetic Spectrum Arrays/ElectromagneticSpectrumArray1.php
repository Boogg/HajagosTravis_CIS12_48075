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


<?php
	//Declare the arrays
	$rownum=array();
	$wavelength=array();
	$spectrum=array();
	
	$wave=3;
	//Calculate for each parallel array
	for($row = 1;$row<=16; $row++){
		//calculate
		$rownum[$row]=$row;
		$wavelength[$row]=$wave;
		
			if($wave > 0){
				$spectrum[$row]="Radio";
			}elseif($wave > -4){
				$spectrum[$row]="Microwave";
			}elseif($wave > -6){
				$spectrum[$row]="Infrared";
			}elseif($wave > -7){
				$spectrum[$row]="Visiable";
			}elseif($wave > -9){
				$spectrum[$row]="Ultraviolet";
			}elseif($wave > -11){
				$spectrum[$row]="X-Ray";
			}else{
				$spectrum[$row]="Gamma Ray";
			};
			$wave=$wave-1;
		};
?>
	<!-- Table headings -->
<table width="200" border="1">
	<tr>
		<th>Row</th>
		<th>Wavelength</th>
		<th>Spectrum</th>
	</tr>
	
<?php
	// echo out the table data -->
	for($row = 1;$row<=16; $row++){
	
		echo "<tr>";
		echo "<td>".$rownum[$row]."</td>";
		echo "<td>10^".$wavelength[$row]."</td>";
		echo "<td>".$spectrum[$row]."</td>";
		echo "</tr>";
	
	};
?>
</table>

</body>
</html>