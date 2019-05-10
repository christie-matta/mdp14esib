<?php

$serverName = "tcp:servername.database.windows.net,1433";  

$connectionOptions = array(  
    "Database" => "DBName",  
    "UID" => "Username",  
    "PWD" => "Password"  
);  

$conn = sqlsrv_connect($serverName, $connectionOptions);  
  
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    }  

$sql = "SELECT * FROM Graph"; 
$stmt = sqlsrv_query($conn, $sql); 
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
 
if(sqlsrv_has_rows($stmt)) 
{ 
print("<table border='1px'>"); 
print("<tr><td>Id</td>"); 
print("<td>Val</td></tr>"); 
 
while($row = sqlsrv_fetch_array($stmt)) 
{ 
 
print("<tr><td>".$row['id']."</td>"); 
print("<td>".$row['val']."</td></tr>"); 
} 
 
print("</table>"); 
}*

 
$dataPoints = array(
	array("label"=> 1997, "y"=> 254722.1),
	array("label"=> 1998, "y"=> 292175.1),
	array("label"=> 1999, "y"=> 369565),
	array("label"=> 2000, "y"=> 284918.9),
	array("label"=> 2001, "y"=> 325574.7),
	array("label"=> 2002, "y"=> 254689.8),
	array("label"=> 2003, "y"=> 303909),
	array("label"=> 2004, "y"=> 335092.9),
	array("label"=> 2005, "y"=> 408128),
	array("label"=> 2006, "y"=> 300992.2),
	array("label"=> 2007, "y"=> 401911.5),
	array("label"=> 2008, "y"=> 299009.2),
	array("label"=> 2009, "y"=> 319814.4),
	array("label"=> 2010, "y"=> 357303.9),
	array("label"=> 2011, "y"=> 353838.9),
	array("label"=> 2012, "y"=> 288386.5),
	array("label"=> 2013, "y"=> 485058.4),
	array("label"=> 2014, "y"=> 326794.4),
	array("label"=> 2015, "y"=> 483812.3),
	array("label"=> 2016, "y"=> 254484)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	//theme: "light2",
	title:{
		text: "Salmon Production - 1997 to 2006"
	},
	axisX:{
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY:{
		title: "in Metric Tons",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	toolTip:{
		enabled: false
	},
	data: [{
		type: "area",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    
