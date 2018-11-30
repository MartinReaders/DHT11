<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Température</h1>
	
	<?php 

$json_url = "data.txt";
$json = file_get_contents($json_url);
$data = json_decode($json);


?>

<p>il fait <?php echo $data->temperature; ?>°C et humidite est <?php echo  $data->humidite; ?>%</p>

<div id="thermometer">
	
  <div id="bargraph"></div>
</div>

</body>
</html>


