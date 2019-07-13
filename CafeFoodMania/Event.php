<?php
	include 'config.php';	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event</title>
<link rel="stylesheet" type="text/css" href="../CafeFoodMania/Event.css">
</head>
<body>
<div class ="Header">
	<h1><span id = "First">Cafe</span><span id ="Last">Food Mania</span></h1>
    <ul>
    <li><a href="../CafeFoodMania/Home.php" >Home</a></li>
    <li><a href="../CafeFoodMania/Menu.php" >Menu</a></li>
    <li><a href="../CafeFoodMania/Event.php" >Event</a></li>
    <li><a href="../CafeFoodMania/ContactUs.php" >Contact Us</a></li>
    </ul>

</div>
<div class="Event">

		<br><br><br>
        <?php 
			$sql = "SELECT E_des FROM event";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
        <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
		<div class ="p">
        <p><span><?php echo $row['E_des']; ?></span></p>
        </div>
        <br><br><br>
        <?php 	
					}
				}
			?>
            
        <div class = "Footer">
    	<div id = "Copy">
     	  <ul>
          	<li><span id = "e">&copy;Cafe Food Mania</span></li>
            <li><span id ="c">Opening Hour :</span><br><span id = "d">Sat - Fri : 11:00AM - 11:00PM</span></li>
            <li>
            	<span id= "a"> Address: </span><br><span id ="b"> House - 566/A, Block-C, 
                    Khilgaon Taltola(4th Floor),  Shahid Baki Rd, Dhaka 1219 Dhaka, Bangladesh</span>
            </li>
          </ul>
     	</div>
    </div>
</div>
 
</body>
</html>
<?php
	include 'close.php';
?>
