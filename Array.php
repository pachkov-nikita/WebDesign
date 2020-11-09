<?php $Arr;
print "<p>  Random Array 5x10 </p> "; 
echo '<table width="1500" height = "400" cellpadding="10" border="2">';
for($N = 0; $N < 5; $N++)
	{
		for($M = 0; $M < 10; $M++)
		{
			$Arr[$N][$M] = rand( 0, 50);
		}
	}

for($N = 0; $N < count($Arr); $N++)
	{
		echo "<tr>";
		for($M = 0; $M < count($Arr[$N]); $M++){
			echo "<td>".$Arr[$N][$M]."</td>";
		}
		echo "</tr>";
	}

echo '</table>';
