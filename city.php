<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>city</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<?php

$cities = array (
    'New York,NY'=> '8175133',
    'Los Angeles,CA' => '3792621',
    'Chicago,IL' => '2695598',
    'Houston,TX' => '2100263',
    'Philadelphia,PA' => '1526006',
    'Phoenix,AZ' => '1445632',
    'San Antonio,TX' => '1327407',
    'San Diego,CA' => '1307402',
    'Dallas,TX' => '1197816',
    'San Jose,CA' => '945942',
);
?>
<h1 class="text text-center text-dark">US Census Bureau</h1>
	<div class="container">
		<div class="row">
	    <div class="col-md-4">
	        <table class="table table-bordered text-center">
	            <?php
	            echo "<thead> <th colspan=2>10 largest cities with population </th></thead>";
	                foreach ($cities as $key => $value)
	                {
	                    echo "<tr><td>$key<td>$value</tr>";
	                }

	            ?>
	        </table>
	    </div>

	    <div class="col-md-4">
	        <table class="table table-bordered text-center">
	            <?php
	            $population = asort($cities);
	            echo "<thead> <th colspan=4> sort by population </th></thead>";
	            foreach ($cities as $key => $value)
	            {
	                echo "<tr><td>$key<td>$value</tr>";
	            }

	            ?>
	        </table>
	    </div>

	    <div class="col-md-4">
	        <table class="table table-bordered text-center">
	            <?php
	            $city_name = ksort($cities);
	            echo "<thead> <th colspan=4> sort by name </th></thead>";
	            foreach ($cities as $key => $value)
	            {
	                echo "<tr><td>$key<td>$value</tr>";
	            }

	            ?>
	        </table>
	    </div>
	</div>
    </div>
</body>
</html>