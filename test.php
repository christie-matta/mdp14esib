<?php
 include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350);

$serverName = "tcp:server-mdp.database.windows.net,1433";
$connectionInfo = array( "Database"=>"DB-MDP", "UID"=>"adminmdp", "PWD"=>"p@ssw0rd");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
$dataArray=array();
$sql = "SELECT id, val FROM Graph";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	$id=$row["id"];
      $val=$row["val"];
	$dataArray[$id]=$val;
      //echo $row['id'].", ".$row['val']."<br />";
	
  
}

sqlsrv_free_stmt( $stmt);
$graph->addData($dataArray);
$graph->setTitle("Sales by Group");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();

?>
