<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	
	include('db.php');
	
	$route = isset($_POST['route']) ? $_POST['route'] : '';
	$bus = isset($_POST['bus']) ? $_POST['bus'] : '';
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<marquee>Welcome to PALKI Bus Scheduling System</marquee>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to PALKI Bus Scheduling System</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
                  
            <li class="current"><a href="routes.php">Routes</a></li>
          
            <li><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>	
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:20px 20px 20px 20px; width:820px;">	
			<h2 style="color:#3333CC" align="center"> PALKI Bus Scheduling System</h2> <br />

<br />

			
			
			
			
					<table style="color:#000000" cellspacing="0" cellpadding="0" border="1"><colgroup><col width="136"> <col width="179"> <col width="134"> </colgroup>
<thead>
<tr style="color:#000033; font-size:14px; font-weight:bold">
<th width="5%"  class="xl65"><strong>Serial</th>
<th class="xl66"><strong>Route</th>
<th  class="xl67"><strong>Bus Name </th>
<th  class="xl67"><strong>Time</th>
<th  class="xl67"><strong>Number of seat </th>
<th  class="xl67"><strong>Price</th>
</tr>
</thead>
<?php 
$sl=1;
$result = mysql_query("SELECT * FROM route");
while($row = mysql_fetch_array($result))
{
?>

<tr>
<td   class="xl66"><?php echo $sl ; ?></td>
<td  class="xl67"><?php echo $row['route'] ; ?></td>
<td  class="xl67"><?php echo $row['type'] ; ?></td>
<td  class="xl67"><?php echo $row['time'] ; ?></td>
<td class="xl67"><?php echo $row['numseats'] ; ?></td>
<td class="xl67"><?php echo $row['price'] ; ?></td>
</tr>
<?php $sl++ ; } ?>
</table>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div id="footer">
	<h4>++8801926789870 &bull; <a href="contact.php">PALKI Bus Scheduling System Limited, 2nd Floor, Bus Bhaban, Panthapath, Dhaka-1212</a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;24/7</p>

	<p>&copy; Copyright A. K. M. Shajjadul Islam  M.Sc. in CSE (Evening)/2nd Batch/2016 | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
