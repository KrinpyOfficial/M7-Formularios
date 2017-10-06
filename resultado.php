<!DOCTYPE html>
<html>
	<head>
		<title>Formulario PHP Resultado</title>
		<meta charset="UTF-8">
		<style>
			td,th{
				border: solid 5px black;
			}
		</style>
	</head>
	<body>
		<table>
		<?php
			$fil = $_GET["fil"];
			$col = $_GET["col"];
			$charmander = 'A';
			for($x=-1 ; $x<$col ;$x++){
				if($x == -1){
					echo "<th>";
					echo "";
					echo "</th>";
				}else{
					echo "<th>";
					echo $x+1;
					echo "</th>";
				}
			}
			for($i=0 ; $i< $fil ; $i++){
				echo "<tr>";
				echo "<th>";
				echo "$charmander";
				echo "</th>";
				$charmander++;
				for($x=0 ; $x<$col ;$x++){
					if(($i+$x) % 2 == 0){
					echo "<th style='width:50px;height:50px;background-color:black'>";
					echo "</th>";
				}else{
					echo "<th style='width:50px;height:50px'>";
					echo "</th>";
					}
				}		
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>
