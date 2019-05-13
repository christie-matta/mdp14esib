
<?php

$serverName = "tcp:server-mdp.database.windows.net,1433";
$connectionInfo = array( "Database"=>"DB-MDP", "UID"=>"adminmdp", "PWD"=>"p@ssw0rd");  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Could not connect.\n";  
     die( print_r( sqlsrv_errors(), true));  
}
  if(isset($_POST['filter']))
  {
	 echo ($_POST['from_date']);
	   echo ($_POST['to_date']);
	  if($_POST['from_date']<=$_POST['to_date']){
	echo(  gettype($_POST['to_date']) );}
  $from_date=$_POST['from_date'];
  $to_date=$_POST['to_date'];
// $selectSql="Select * from Graph where ? <= ? ";
	  //$params=array($_POST['from_date'],$_POST['to_date']);
	$a="SELECT * from Graph where ";
	  $b= $_POST['from_date'];
	  $c=" <= ";
	  $d= $_POST['to_date'];
	  $e=$a.$b;
	  $f=$c.$d;
	  $g=$e.$f;
	  
$query = sqlsrv_query( $conn, $g );
 $count=sqlsrv_num_rows($query) ;
if($count >0) echo "wowo" ;
	  else echo "fail";
  }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kfaraabida  </title>
</head>
<body>
	<form method="post">
  From: <input type="date"  name="from_date">
To: <input type="date" name="to_date">
  <input type="submit" name="filter"  value="Filter ">

			<?php
		 if($count>0)
			{	echo "telit chi ";
				while($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC))
			{
					
				$result= $row['id'];
				$output='<h2>'.$result.'</h2>';
				echo $output;
			}
			}
			
			else 
			{
			echo "hi ";
			}
?>
			</form>
	</body>
</html>
	
	
