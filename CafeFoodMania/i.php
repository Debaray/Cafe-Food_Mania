<?php
	include 'config.php';	
?>
<html>
	<head>
		<title>Drinks</title>
	</head>
	<body>
		<?php 
			$sql = "SELECT * FROM drinks";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
						<ul>
								
<li><?php echo $row['Dumy']; ?></li>
<li><?php echo $row['Dumy'];?></li>
						</ul>
					<?php 	
					}
				}
			?>
			
	</body>
</html>
<?php
	include 'close.php';
?>









