<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Chess Board</h3>
	<table width="300px" border="1">
		
	<?php
		for($row=1; $row<=8; $row++){
			echo "<tr>";
			
			echo "<tr>";
			for ($col=1; $col<=8;$col++) { 
				$total=$row+$col;
				if($total%2==0)
				{	
					echo "<td width=10px height=30px bgcolor=#FFFFFF></td>";
					
				}
				else{
					echo "<td width=10px height=30px bgcolor=#000000></td>";
				}				
			}
			echo "</tr>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>