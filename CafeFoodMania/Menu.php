<?php
	include 'config.php';	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
<link rel="stylesheet" type="text/css" href="../CafeFoodMania/Menu.css">
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
<div class= "Menu">
<br>

<div class="Catagories">
<p class = "cat">Catagories</p>
	<ul>
    	<li><a href="#1">Appetizers</a></li>
        <li><a href="#2">Soup</a></li>
        <li><a href="#3">Pizza Italian (Thin Crust)</a></li>
        <li><a href="#4">Chicago Style Pizza (Deep Dish)</a></li>
        <br><br><br>
        <li><a href="#5">Pasta & Spaghetti</a></li>
        <li><a href="#6">Chowmein & Coupsuey</a></li>
        <li><a href="#7">Burger</a></li>
        <li><a href="#8">Sandwich</a></li>
        <br><br><br>
        <li><a href="#9">Shawarma (Arabian)</a></li>
        <li><a href="#10">Wrap</a></li>
        <li><a href="#11">Fried Chicken</a></li>
        <li><a href="#12">BBQ & Grilled</a></li>
        <br><br><br>
        <li><a href="#13">Rice</a></li>
        <li><a href="#14">Chicken</a></li>
        <li><a href="#15">Beef</a></li>
        <li><a href="#16">Prawn</a></li>
        <li><a href="#17">Set Menu</a></li>
        
	</ul>

</div>
	<p id ="1"  style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Appetizers</p>
    <?php 
			$sql = "SELECT * FROM appetizers";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="2" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Soup</p>
    <?php 
			$sql = "SELECT * FROM soup";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="3" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Pizza Italian (Thin Crust)</p>
    <?php 
			$sql = "SELECT * FROM pizza_italian";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="4" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;"> Chicago Style Pizza (Deep Dish)</p>
    <?php 
			$sql = "SELECT * FROM chicago_style_pizza";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="5" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Pasta & Spaghetti</p>
    <?php 
			$sql = "SELECT * FROM pastaspaghetti";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="6" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Chowmein & Coupsuey
</p>
    <?php 
			$sql = "SELECT * FROM chowmeincoupsuey";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="7" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Burger</p>
    <?php 
			$sql = "SELECT * FROM Burger";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="8" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Sandwich</p>
    <?php 
			$sql = "SELECT * FROM Sandwich";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="9" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Shawarma (Arabian)</p>
    <?php 
			$sql = "SELECT * FROM Shawarma";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="10" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Wrap</p>
    <?php 
			$sql = "SELECT * FROM Wrap";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="11" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Fried Chicken</p>
    <?php 
			$sql = "SELECT * FROM friedchicken";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="12" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">BBQ & Grilled</p>
    <?php 
			$sql = "SELECT * FROM bbq_grilled";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="13" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Rice</p>
    <?php 
			$sql = "SELECT * FROM Rice";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="14" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;"> Chicken</p>
    <?php 
			$sql = "SELECT * FROM  Chicken";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="15" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Beef</p>
    <?php 
			$sql = "SELECT * FROM Beef";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="16" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;"> Prawn
</p>
    <?php 
			$sql = "SELECT * FROM  Prawn";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<p id ="17" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;">Set Menu</p>
    <?php 
			$sql = "SELECT * FROM setmenu";
			$myqueryresults = mysqli_query($conn,$sql) or die(mysql_error());
		?>
 <table style="width:1000px;border:2px solid black; background-color:rgba(240,227,227,0.76);margin-left:240px">
  <tbody>
    <tr>
    <th style="width:20px;border:2px solid black; text-align:left;padding:10px;font:20px white Tahoma;">
      Serial
      </th>
      <th style="width:500px;border:2px solid black; text-align:center;padding:10px;font:20px white Tahoma;">
      Items
      </th>
      <th style="width:100px; border:2px solid black;text-align:center;padding-left:50px;padding-right:50px;">
      Price
      </th>
    </tr>
    <?php 
				if(mysqli_num_rows($myqueryresults) > 0)
				{
					while ($row = mysqli_fetch_array($myqueryresults))
					{ 
			?>
    <tr>
    <td style="width:20px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['id']; ?>
      </span></td>
      <td style="width:500px;border:2px solid black; text-align:center;padding:10px;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['name']; ?> 
      </span></td>
      <td  style="width:100px; border:2px solid black;text-align:center;padding:10px;font:20px white Tahoma;">
      <span style="font:20px white Tahoma;">
      <?php echo $row['price']; ?>
      </span></td>
    </tr>
    <?php 	
					}
				}
			?>
  </tbody>
</table>
<br><br>
<p class ="abc" style ="color:rgba(201,194,194,1.00); text-align:center; font-size:36px; background-color:rgba(15,11,12,0.81);padding:20px;"><a href="#1" >TOP</a></p>


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

