<?php
 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try {
    $conn = new \PDO("sqlsrv:server = tcp:server-mdp.database.windows.net,1433; Database = DB-MDP", "adminmdp", "p@ssw0rd");
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $handle = $conn->prepare('select id, val from Graph '); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row){
        array_push($dataPoints, array("x"=> $row->id, "y"=> $row->val));
    }
	$link = null;
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
/*var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Graph"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc  
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	 }]  
   }); 
chart.render();
 
} */
	
	var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Stock Price of BMW - August"
	},
	axisX:{
		valueFormatString: "DD MMM",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY: {
		title: "Closing Price (in USD)",
		includeZero: false,
		valueFormatString: "$##0.00",
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			labelFormatter: function(e) {
				return "$" + CanvasJS.formatNumber(e.value, "##0.00");
			}
		}
	},
	data: [{
		type: "area",
		xValueFormatString: "DD MMM",
		yValueFormatString: "$##0.00",
		dataPoints: [
			{ x: new Date(2016, 07, 01), y: 76.727997 },
			{ x: new Date(2016, 07, 02), y: 75.459999 },
			{ x: new Date(2016, 07, 03), y: 76.011002 },
			{ x: new Date(2016, 07, 04), y: 75.751999 },
			{ x: new Date(2016, 07, 05), y: 77.500000 },
			{ x: new Date(2016, 07, 08), y: 77.436996 },
			{ x: new Date(2016, 07, 09), y: 79.650002 },
			{ x: new Date(2016, 07, 10), y: 79.750999 },
			{ x: new Date(2016, 07, 11), y: 80.169998 },
			{ x: new Date(2016, 07, 12), y: 79.570000 },
			{ x: new Date(2016, 07, 15), y: 80.699997 },
			{ x: new Date(2016, 07, 16), y: 79.686996 },
			{ x: new Date(2016, 07, 17), y: 78.996002 },
			{ x: new Date(2016, 07, 18), y: 78.899002 },
			{ x: new Date(2016, 07, 19), y: 77.127998 },
			{ x: new Date(2016, 07, 22), y: 76.759003 },
			{ x: new Date(2016, 07, 23), y: 77.480003 },
			{ x: new Date(2016, 07, 24), y: 77.623001 },
			{ x: new Date(2016, 07, 25), y: 76.408997 },
			{ x: new Date(2016, 07, 26), y: 76.041000 },
			{ x: new Date(2016, 07, 29), y: 76.778999 },
			{ x: new Date(2016, 07, 30), y: 78.654999 },
			{ x: new Date(2016, 07, 31), y: 77.667000 }
		]
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
