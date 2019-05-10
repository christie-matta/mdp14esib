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
echo("<br> essai <br>");  
$dataArray=array();
  
//get data from database
$sql="SELECT * FROM Graph";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $id=$row["id"];
      $val=$row["val"];
      //add to data areray
      $dataArray[$id]=$val;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Value by id");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>



