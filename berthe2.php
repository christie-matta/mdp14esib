<?php

if(isset($_POST["from_date"], $_POST["to_date"])) 
{
  /* Connect to the local server using Windows Authentication and  
specify the AdventureWorks database as the database in use. */  
$serverName = "tcp:server-mdp.database.windows.net,1433";;  
$connectionInfo = array( "Database"=>"DB-MDP", "UID"=>"adminmdp", "PWD"=>"p@ssw0rd");  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Could not connect.\n";  
     die( print_r( sqlsrv_errors(), true));  
}
	else {
		 echo "connection successful .\n"; 
	}
   $output = '';
 
/* Set up and execute the query. */  
$sql = "SELECT * FROM Graph WHERE datee BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
$stmt = sqlsrv_query( $conn, $sql);  
if( $stmt === false)  
{  
     echo "Error in query preparation/execution.\n";  
     die( print_r( sqlsrv_errors(), true));  
}  
	 $output .= ' 
	  <table class="table table-bordered">  
                <tr> 
                     <th width="5%">ID</th>  
                     <th width="30%">Customer Name</th>   
                     <th width="12%">Order Date</th>  
                </tr>  
      ';
	 if(sqlsrv_num_rows($result) > 0)
    {
        while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
        {
		echo $row['id'].", ".$row['val']."\n";  
            $output .= '  
                     <tr>  
                          <td>'. $row["id"] .'</td>  
                          <td>'. $row["val"] .'</td>  
                   
                          <td>'. $row["datee"] .'</td>  
                     </tr>  
                ';
        }
    }
    else
    {
        $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';
    }
    $output .= '</table>';
    echo $output;
  

  
/* Free statement and connection resources. */  
sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);
}
?>
