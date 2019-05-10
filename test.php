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
	

	
	var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		
	}]
});
//chart1.render();


	       	var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		
	}]
});

chart.render();
chart.render();

}

	    	       
	
</script>
</head>
<body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>

<div id="chartContainer2" style="height: 370px; width: 100%;"></div>

	
</body>
</html> 
