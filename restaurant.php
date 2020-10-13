<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<h3>Restaurant</h3>
	<div class="col-md-4">
	<table class="table table-bordered">
	<?php
		$hamburger=4.95;
		$total_hamburger=2*4.95;
		$chocolate=1.95;
		$cola=0.85;
		$total=$hamburger+$chocolate+$cola;
		

		$tax_rate=$total*7.5/100;
		

		$pre_tax=$tax_rate*16/100;
		
		$totalCost=$total+$tax_rate+$pre_tax;
	?>
	 	<thead>
                <th>No</th>
                <th>Recipe</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
        </thead>
         <tbody>
               <tr>
                   <td>1.</td>
                   <td><?php echo "Hamburger"; ?></td>
                   <td>$ <?php echo $hamburger; ?></td>
                   <td>x2</td>
                   <td>$ <?php echo $total_hamburger; ?></td>
               </tr>
               <tr>
               		<td>2.</td>
               		<td><?php echo "Chocolate Milkshake";?></td>
               		<td> $<?php echo "$chocolate";?></td>
               		<td>x1</td>
               		<td> $<?php echo "$chocolate";?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td><?php echo "Cola";?></td>
					<td> $<?php echo "$cola";?></td>
					<td>x1</td>
					<td> $<?php echo "$cola";?></td>
				</tr>
				 <tr>
                    <td colspan="4">Total Price</td>
                    <td>$ <?php echo $total; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Tax (7.5%)</td>
                    <td>$ <?php echo $tax_rate; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Pre-tax (16%)</td>
                    <td>$ <?php echo $pre_tax; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Total Cost</td>
                    <td>$ <?php echo $totalCost; ?></td>
                </tr>
            </tbody>
	</table>
	</div>
</body>
</html>


