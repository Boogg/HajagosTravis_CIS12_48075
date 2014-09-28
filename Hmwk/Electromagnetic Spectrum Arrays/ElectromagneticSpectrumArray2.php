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
	$SpectrumTable=array();
	for($col=1;$col<=3;$col++){
		$SpectrumTable[$col]=array();
	}
	
	$wave=3;
	//Calculate for each parallel array
	for($row = 1;$row<=16; $row++){
		//assign the elements in the array
		$SpectrumTable[1][$row]=$row;
		$SpectrumTable[2][$row]=$wave;
		
			if($wave > 0){
				$SpectrumTable[3][$row]="Radio";
			}elseif($wave > -4){
				$SpectrumTable[3][$row]="Microwave";
			}elseif($wave > -6){
				$SpectrumTable[3][$row]="Infrared";
			}elseif($wave > -7){
				$SpectrumTable[3][$row]="Visiable";
			}elseif($wave > -9){
				$SpectrumTable[3][$row]="Ultraviolet";
			}elseif($wave > -11){
				$SpectrumTable[3][$row]="X-Ray";
			}else{
				$SpectrumTable[3][$row]="Gamma Ray";
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
	// echo out the table data
	for($row = 1;$row<=16; $row++){
	
		echo "<tr>";
		for($col=1;$col<=3;$col++){
			echo "<td>".$SpectrumTable[$col][$row]."</td>";
		}
		echo "</tr>";
	
	};
?>
</table>

</body>
</html>