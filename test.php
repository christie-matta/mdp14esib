<?php
 
$serverName = "tcp:servername.database.windows.net,1433";
$connectionInfo = array( "Database"=>"DBName", "UID"=>"Username", "PWD"=>"Password");
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
      echo $row['id'].", ".$row['val']."<br />";
	
  
}

sqlsrv_free_stmt( $stmt);

?>
