<?php

if(isset($_POST["from_date"], $_POST["to_date"])) 
{
   $conn = new \PDO("sqlsrv:server = tcp:server-mdp.database.windows.net,1433; Database = DB-MDP", "adminmdp", "p@ssw0rd");
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  $output = '';
    $handle = $conn->prepare('select * FROM Graph  WHERE order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' ); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		 
  
  
    $output .= '  
       <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">value</th>  
                       
                     <th width="12%"> Date</th>  
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
