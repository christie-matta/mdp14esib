<html>  
<head>  
<Title>Azure SQL Database - PHP Website</Title>  
</head>  
<body>  
    <h1> welcome </h1>
    <form method="post" action="?action=add" enctype="multipart/form-data" >  
From : <input type="date" name="from" id="from"/></br>  
To :  <input type="date" name="to" id="to"/></br>  
<input type="submit" name="submit" value="Submit" />  
</form> 

<?php  
/*Connect using SQL Server authentication.*/  
$serverName = "tcp:server-mdp.database.windows.net,1433";
$connectionOptions = array(  
    "Database" => "DB-MDP",  
    "UID" => "adminmdp",  
    "PWD" => "p@ssw0rd"  
);  
$conn = sqlsrv_connect($serverName, $connectionOptions);  
  
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    }  
  
 
         echo(&$_POST['from']);

$sql =  "SELECT *  FROM Graph WHERE id=( SELECT max( id ) FROM Graph )"; 
 

$stmt = sqlsrv_query($conn, $sql); 
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
 
if(sqlsrv_has_rows($stmt)) 
{ 
print("<table border='1px'>"); 
print("<tr><td> Id</td>"); 
print("<td>Val</td>"); 
print("<td>date</td></tr>"); 
 
while($row = sqlsrv_fetch_array($stmt)) 
{ 
 
print("<tr><td>".$row['id']."</td>"); 
print("<td>".$row['val']."</td>"); 
print("<td>".$row['datee']."</td></tr>"); 
} 
 
print("</table>"); 
}
?>  
</body>  
</html>  
