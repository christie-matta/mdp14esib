
<?php
 
$dataPoints = array();

//Best practice is to create a separate file for handling connection to database
try {
	
    $conn = new \PDO("sqlsrv:server = tcp:server-mdp.database.windows.net,1433; Database = DB-MDP", "adminmdp", "p@ssw0rd");
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      if (isset($_GET['action']))  
      {  
      if ($_GET['action'] == 'add')  
          { 
          $debut="SELECT *  FROM Graph WHERE dates>='";
          $datefrom=&$_POST['from'];
          $dateto=&$_POST['toto'];
          $and="' and dates<='";
          $fin="';";
          $a=$debut.$datefrom;
              $b=$a.$and;
              $c=$b.$dateto;
              $sql=$c.$fin;
     
    $handle = $conn->prepare($sql); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    foreach($result as $row){
        array_push($dataPoints, array(
		"x"=> $row->id, 
		"y"=> $row->dates));		      
    }
	$link = null;
}
	       }
      }

catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
	
?>



<!DOCTYPE HTML>
<html>
 <head>  
  <Title>Azure SQL Database - PHP Website</Title>  
  </head>  
 
  <form method="post" action="?action=add" enctype="multipart/form-data" >  
  From : <input type="date" name="from" id="from"/></br>  
  To : <input type="date" name="toto" id="toto"/></br>  
  <input type="submit" name="submit" value="Submit" />  
  </form> 
<script>
window.onload = function () {
 var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Temperature"
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
	       	var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "pH"
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
}
	    	       
	
</script>
</head>
<body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="chartContainer1" style="height: 370px; width: 40%;"></div>
	<br><br>

<div id="chartContainer2" style="height: 370px; width: 40%;"></div>

	
</body>
</html>
