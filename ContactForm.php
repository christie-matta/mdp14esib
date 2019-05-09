<!DOCTYPE html>
<html lang="fr">
<head>
   <link rel="stylesheet" type="text/css" href="css/contact_us.css">

<title>Contact Us-Lebanese Cost Line Water and Air Quality Monitoring</title>
<META name="author" content="Romy Charbel" >
<META charset="UTF-8">
<META name="description" content="Page measurments" >
<META name="keywords" content="MDP" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>


 <!---- <body style='background-image: linear-gradient(LightSteelBlue, #1E90FF);'>-->
 
<body style='background-image: linear-gradient(to bottom right,#8AECAF, #06a7cf);'>
       

        <ul class="nav nav-tabs" id="myTab" role="tablist" >
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kfarabida beach</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Live news</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lebanese map</a>
                      </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Our mission</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact us</a>
                    </li>
              </ul>
            
              




   

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="500">
                    <img src="beach1.jpg" class="d-block w-100" alt="Beach Kfar Abida">
                  </div>
                  <div class="carousel-item" data-interval="500">
                    <img src="beach2.jpg" class="d-block w-100" alt="Beach Kfar Abida">
                  </div>
                  <div class="carousel-item" data-interval="500">
                    <img src="beach3.jpg" class="d-block w-100" alt="Beach Kfar Abida">
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
              </div>
              <br><br><br>
<!--<form id="contactform" method="post" action="?action=add" enctype="multipart/form-data"  >  
 First Name : <input type="text" name="fname" id="fname" class="form-control"/ ></br>  
Last Name : <input type="text" name="lname" id="lname"  class="form-control"/><te/br>  
E-mail : <input type="text" name="email" id="email"  class="form-control"/></br>
Message : <input type="text" name="message" id="message"  class="form-control" /></br>  <br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" justify-content="center"/>  
   <br><br>
</form> --> 
   
   <form id="contactform" method="post" action="?action=add" enctype="multipart/form-data" >     
<div>
    <div> 
        <div class="row d-flex justify-content-center">
              <h1 style="color:white" class="white-text mb-0 py-5 font-weight-bold">Contact Us</h1>
            </div>
      
          </div>
        
      <div class="card-body mx-4">
      
            <div class="md-form">
              <i class="fas fa-user prefix grey-text"></i>
              <label for="form104">Your first name:</label>
              <input type="text" id="form104" name="fname" class="form-control">
              <br>
            </div>

            <div class="md-form">
              <i class="fas fa-user prefix grey-text"></i>
              <label for="form104">Your last name:</label>
              <input type="text" id="form104" name="lname" class="form-control">
              <br>
            </div>
      
            <div class="md-form">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label for="form105">Your e-mail:</label>
              <input type="text" id="form105" name="email" class="form-control">
              <br>
              
            </div>
      
            
      <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <label for="form107">Your message:</label>
              <textarea id="form107" name="message" class="md-textarea form-control" rows="5"></textarea>
              <br>
              
            </div>
      
      
         <div class="row d-flex align-items-center mb-3 mt-4">
              <div class="col-md-12">
                <div class="text-center">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg"  />  
                </div>
              </div>
            </div>
          </div>
      
        </div>

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
  
if (isset($_GET['action']))  
    {  
    if ($_GET['action'] == 'add')  
        {  
        /*Insert data.*/  
        $insertSql = "INSERT INTO ContactForm (form_fname,form_lname,form_email,form_message,form_date)   
VALUES (?,?,?,?,?)";  
        $params = array( &$_POST['fname'], &$_POST['lname'], &$_POST['email'] ,&$_POST['message']  , date("Y-m-d")
        );  
        $stmt = sqlsrv_query($conn, $insertSql, $params);  
        if ($stmt === false)  
            {  
            /*Handle the case of a duplicte e-mail address.*/  
            $errors = sqlsrv_errors();  
            if ($errors[0]['code'] == 2601)  
                {  
                echo " Success </br>";  
                }  
  
            /*Die if other errors occurred.*/  
              else  
                {  
                die(print_r($errors, true));  
                }  
            }  
          else  
            {  
            echo "Message sent </br>";  
            }  
        }  
    }  
  ?>
   
    
</body>


<footer class="page-footer font-small teal pt-4" style="background-color: #2650D1; color:white">
<!-- Footer -->
<footer class="page-footer font-small indigo">

        
        <div class="container text-center text-md-left">
    
          
          <div class="row">
    
            <div class="col-md-3 mx-auto">
    
            
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Our coordinates</h5>
              <p> For further information, you can contact: <br>

                  romy.charbel@net.usj.edu.lb<br>
                  christie.matta@net.usj.edu.lb<br>
                  berthe.hajjar@net.usj.edu.lb<br>
                  mira.abiakl@net.usj.edu.lb<br>
                  thea-rosette.khoury@net.usj.edu.lb<br>

              </p>
    
              
    
            </div>
            
    
            <hr class="clearfix w-100 d-md-none">
    
           
            <div class="col-md-3 mx-auto">
                <img src="esib.png"
    
    
            </div>
            
    
            <hr class="clearfix w-100 d-md-none">
    
           
          
           
    
            <hr class="clearfix w-100 d-md-none">
    
           
           
    
    
        </div>
        
    
       
     
    
      
       
       
    
      </footer>
      
</html>
