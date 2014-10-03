<?php
	/*
		Travis Hajagos
		Oct 3rd, 2014
		Purpose:php Savings Array
		
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Savings Account</title>
</head>

<body>
<h1>Savings Table</h1>
<?php
//setup the savings table
	$balance5=100; //unit = $'s
	$balance10=$balance5;
	$intRate=5;  //unit = annual percentage rate
	echo "<p>Initial Balance = $".$balance5."</p>";
?>

<table width="300" border="0">


  <tbody>
    <tr style="text-align:left">
      <th>Year</th>
      <th>Savings @ 5%</th>
	  <th> </th>
	  <th> </th>
	  <th> </th>
	  <th> </th>
	  <th>Savings @ 10%</th>
	  
    </tr>

<?php

		//Declare the arrays
		$SavingsTable=array();
			for($col=1;$col<=7;$col++){
				$SavingsTable[$col]=array();
			};
		//Calculate for each parallel array
		for($row = 1;$row<=50; $row++){
		//Assign the elements in the array
		$SavingsTable[1][$row]= $row;
		$SavingsTable[2][$row]= $balance5;
		for($col=3;$col<7;$col++){
			$SavingsTable[$col][$row]= ".";
		};
		$SavingsTable[7][$row]= $balance10;
		
			//calculate the new balances
		$balance5*=(1+$intRate/100);
		//$balance5= number_format($balance5,2);
		$balance10*=(1+($intRate*(2))/100);
		//$balance10= number_format($balance10,2);
		
		}
		
?>

<?php

	//output arrays
	for($row=1;$row<=50;$row++){
		echo "<tr>";
		echo "<td>".$SavingsTable[1][$row]."</td>";
		echo "<td>$".number_format($SavingsTable[2][$row],2)."</td>";
		
		for($col=3;$col<=6;$col++){
			echo "<td>".$SavingsTable[$col][$row]."</td>";
		};
		echo "<td>$".number_format($SavingsTable[7][$row],2)."</td>";
		echo "</tr>";
	};


?>
</tbody>
</table>
</body>
</html>
