
<?php

$serverName = "tcp:server-mdp.database.windows.net,1433";
$connectionInfo = array( "Database"=>"DB-MDP", "UID"=>"adminmdp", "PWD"=>"p@ssw0rd");  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Could not connect.\n";  
     die( print_r( sqlsrv_errors(), true));  
}
 /* if(isset($_POST['filter']))
  {
	 echo ($_POST['from_date']);
	   echo ($_POST['to_date']);
	  if($_POST['from_date']<=$_POST['to_date']){
	echo(  gettype($_POST['to_date']) );}
  $from_date=$_POST['from_date'];
  $to_date=$_POST['to_date'];
// $selectSql="Select * from Graph where ? <= ? ";
	  //$params=array($_POST['from_date'],$_POST['to_date']);*/
	  
$query = sqlsrv_query( $conn, "SELECT * from Graph" );
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
if(sqlsrv_has_rows($stmt)) 
{ 
print("<table border='1px'>"); 
print("<tr><td> Id</td>"); 
print("<td>val</td>");  
print("<td>datee</td></tr>"); 
 
while($row = sqlsrv_fetch_array($stmt)) 
{ 
 
print("<tr><td>".$row['id']."</td>"); 
print("<td>".$row['val']."</td>"); 
print("<td>".$row['datee']."</td></tr>"); 
} 
 
print("</table>"); 
}
// $count=sqlsrv_num_rows($query) ;
//	  while($row = sqlsrv_fetch_array($stmt)) 
//{ 
 
//print("<tr><td>".$row['id']."</td>"); 
//print("<td>".$row['val']."</td>"); 
//print("<td>".$row['datee']."</td>"); 

} 
//if($count >0) echo "wowo" ;
//	  else echo "fail";
 // }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kfaraabida  </title>
</head>
<body>
	<!-- <form method="post">
  From: <input type="date"  name="from_date">
To: <input type="date" name="to_date">
  <input type="submit" name="filter"  value="Filter ">

		-->	
	</form>
	</body>
</html>
	
	
