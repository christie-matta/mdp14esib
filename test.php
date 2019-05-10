<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 
/*$link = mysql_connect('localhost', 'username', 'password')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('Message') or die('Could not select database');*/
$serverName = "tcp:server-mdp.database.windows.net,1433";  

$connectionOptions = array(  

    "Database" => "DB-MDP",  

    "UID" => "adminmdp",  

    "PWD" => "p@ssw0rd"  

);  

$conn = sqlsrv_connect($serverName, $connectionOptions); 
  
$dataArray=array();
  
//get data from database
$sql="SELECT RoomNo, COUNT(*) AS 'count' FROM Message GROUP BY RoomNo";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["RoomNo"];
      $count=$row["count"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Sales by Group");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>
