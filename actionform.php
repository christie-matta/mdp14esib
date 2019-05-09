   <html>
   <body>
   processing
    <?php


      // database connection and table name
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
      else { echo("success <br>");}

     
      ?>

      </body>
      </html
