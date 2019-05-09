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
      
          /*Insert data.*/  
          $insertSql = "INSERT INTO ContactForm (form_fname,form_lname,form_email,form_message,form_date)   
  VALUES (?,?,?,?,?)";  
          $params = array('a','a','a','a','a')
          );  
          $stmt = sqlsrv_query($conn, $insertSql, $params);  
          if ($stmt === false)  
              {  
              /*Handle the case of a duplicte e-mail address.*/  
              $errors = sqlsrv_errors();  
              if ($errors[0]['code'] == 2601)  
                  {  
                  echo " There was a problem. Try Again ! </br>";  
                  }  
    
              /*Die if other errors occurred.*/  
                else  
                  {  
                  die(print_r($errors, true));  
                  }  
              }  
            else  
              {  
              echo " Message Sent ! </br>";  
              }  

     
      ?>

      </body>
      </html
