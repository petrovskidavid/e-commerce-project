<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>  
    <link rel="stylesheet" type="text/css" href="../assets/css/body.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/header.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/button.css" />
</head>

<body>
    <?php
        /**
         * @file employee_home.php
         * 
         * @brief This is the employee home page.
         *        This is where they can access the orders they need to process.
         * 
         * @author David Petrovski
         * @author Isabelle Coletti
         * @author Amanda Zedwick
         * 
         * CSCI 466 - 1
         */

         
        include("header.php"); // Creates the header of the page
        include("secrets.php"); // Logs into the db
	include("functions.php"); // Gives the file with the login window creation function

	$sql="SELECT ProductID, Name, Price, Quantity FROM Products";

	$result = $pdo->query($sql);
	$result->setFetchMode(PDO::FETCH_ASSOC); ?>

	<h2 style="text-align:center"> Inventory </h2>

	<table border=1 width="100%">
		<tr>
			<th style="text-align:center"> ProductID </th>
			<th style="text-align:center"> Name </th>
			<th style="text-align:center"> Price </th>
			<th style="text-align:center"> Quantity </th>
		</tr>

		<?php foreach($result as $row)
		{ ?>
			<tr>
				<td style="text-align:center"> <?php echo "$row[ProductID]"; ?> </td>
				<td style="text-align:center"> <?php echo "$row[Name]"; ?> </td>
				<td style="text-align:center"> $<?php echo "$row[Price]"; ?> </td>
				<td style="text-align:center"> <?php echo "$row[Quantity]"; ?> </td>
			</tr>
<?php }
	echo "</table>";
?>

</body>
</html>



