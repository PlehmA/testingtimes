<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<?php
	$var1 = '04:57';
	$var2 = '04:37';
	$intervarlo = '20';
	$grupos = 12;

	$fechaInicio = new DateTime($var1);
	$fechaFin = new DateTime($var2);
	$fechaFin = $fechaFin->modify( '+1 day 20 minutes' ); 

	$rangoFechas = new DatePeriod($fechaInicio, new DateInterval('PT20M'), $fechaFin);
	$lineas = 0;
		echo "<table class='table table-bordered table-sm table-responsive'>";
		echo "<thead>";
		echo	"<tr>";
				for ($i=1; $i <= $grupos; $i++) { 
					echo "<th>Grupo $i</th>";
				}
		echo	"</tr>";
		echo"</thead>";
		echo "<tbody>";
		echo "<tr>";
		foreach($rangoFechas as $fecha){
			$lineas += 1;
			if ($fecha >= date("H:i") || strtotime ( '+19 minute' , strtotime ($fecha->format('Y-m-d H:i:s')) ) <= date("H:i")) {
				echo "<td style='background-color: #000;'>".$fecha->format("H:i") . PHP_EOL."</td>";
			}else{
				echo "<td>".$fecha->format("H:i") . PHP_EOL."</td>";
			}
			
			if ($lineas == 12) {
				$lineas = 0;
				echo "</tr>";
			}
		}
		echo "</tbody>";
		echo"</table>";
	?>
</div>
</body>
</html>
