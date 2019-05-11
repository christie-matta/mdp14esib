<?php

if(isset($_POST["from_date"], $_POST["to_date"])) 
{
$serverName = "tcp:server-mdp.database.windows.net,1433";
$connectionInfo = array( "Database"=>"DB-MDP", "UID"=>"adminmdp", "PWD"=>"p@ssw0rd");
$connect = sqlsrv_connect( $serverName, $connectionInfo );
  $output = '';
  $query = "SELECT * FROM Graph WHERE order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";
  
$result = sqlsrv_query( $connect,$query );

    $output .= '  
       <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">value</th>  
                       
                     <th width="12%">Order Date</th>  
                </tr>  
      ';    
    if(sqlsrv_num_rows($result) > 0)
    {
        while($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
        {
            $output .= '  
                     <tr>  
                          <td>'. $row["id"] .'</td>  
                        
                          <td>$ '. $row["val"] .'</td>  
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
}
?>
