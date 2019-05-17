<html>  
<head>  
<Title>Latest Updates-Lebanese Cost Line Water and Air Quality Monitoring</Title> 
<META name="author" content="Romy Charbel" >
<META charset="UTF-8">
<META name="description" content="Page measurments" >
<META name="keywords" content="MDP" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <style>
        .navbar{
              background-color:#6495ED;
        }
       </style>
</head> 

<body>
<body style='background-image: linear-gradient(to bottom right,#8AECAF, #06a7cf);'>
       
       <nav class="navbar text-white navbar-expand-lg  navbar-light">
         <a class="navbar-brand text-white" href="#">MDP 14</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link text-white" href="home.html">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-white" href="now.html">Latest updates</a>
             </li>
              <li class="nav-item active">
               <a class="nav-link text-white" href="home.html"> Map <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link  text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Beaches
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item " href="#">Kfaraabida's public Beach</a>
                 <a class="dropdown-item" href="#">Sour beach</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Other beaches</a>
               </div>
             </li>
             <li class="nav-item active">
               <a class="nav-link text-white" href="mission.html"> Our Mission <span class="sr-only">(current)</span></a>
             </li>
               <li class="nav-item active">
               <a class="nav-link text-white" href="contact.html"> Contact Us <span class="sr-only">(current)</span></a>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
               <li class="nav-item active">
               <a class="btn btn-light" href="contact.html"> Sign In <span class="sr-only">(current)</span></a>
             </li>
           </form>
         </div>
       </nav>
          
          
                 
    <!--<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                       <div class="carousel-inner">
                         <div class="carousel-item active" data-interval="500">
                           <img src="beach11.jpg" class="d-block w-100" alt="Beach Kfar Abida">
                         </div>
                         <div class="carousel-item" data-interval="500">
                           <img src="beach22.jpg" class="d-block w-100" alt="Beach Kfar Abida">
                         </div>
                         <div class="carousel-item" data-interval="500">
                           <img src="beach33.jpg" class="d-block w-100" alt="Beach Kfar Abida">
                         </div>
                       </div>
                       <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                       </a>
                     </div> -->
      
      
                     <br><br>
       
       
   <div id="mnt" align="center">
            <h1 style="color:white;" font-size="50px" ><bold> Latest Updates </bold></h1>
         <br>
         <h3 style="color:#6495ED;" font-size="20px"><bold> TODAY </bold></h3>
         <br>
         
      </div>
<form id="now" method="post" action="?action=add" enctype="multipart/form-data" >  
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
  
 
         
 
$sql =  "SELECT *  FROM Graph WHERE id=( SELECT max( id ) FROM Graph )"; 
 
 
$stmt = sqlsrv_query($conn, $sql); 
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
 
if(sqlsrv_has_rows($stmt)) 
{ 
/*print("<table border='1px'>"); 
 print("<tr><td> Id</td>"); 
print("<td>Val</td>"); 
print("<td>date</td></tr>"); */
 
while($row = sqlsrv_fetch_array($stmt)) //il cherche dans chaque row
{ 
 echo $row['dates'];
 echo "<br>";
 //echo "<h4 style="color:white;"> Temperature: </h4>";
 echo $row['val'];
    
/*print("<tr><td>".$row['id']."</td>"); */
//print("<td>".$row['val']."</td>"); 
//print("<td>".$row['dates']."</td></tr>");
/*print($row['val']); 
print($row['datee']);*/

} 
 print("</table>"); 
}
?>  

      <br>
      <div id="photo" align="center">
      <img src="undersea.jpg" class="img-fluid" alt="Responsive image" width="600px" height="400px">
            <br><br>
      </div>
      
</body>  
</html>
