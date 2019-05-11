
<?php
$dataPoints = array();
try {
    $conn = new \PDO("sqlsrv:server = tcp:server-mdp.database.windows.net,1433; Database = DB-MDP", "adminmdp", "p@ssw0rd");
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $handle = $conn->prepare('select * FROM Graph '); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
	print(" connecting to SQL Server was a success");	
  
	$link = null;
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kfaraabida  </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
<br /><br />
<div class="container" style="width:900px;">
    <h2 align="center">Information About Temperature & pH !</h2>
    <h3 align="center">Graph Data</h3><br />
    <div class="col-md-3">
        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
    </div>
    <div class="col-md-3">
        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
    </div>
    <div class="col-md-5">
        <input type="button" name="filter" id="filter" value="Filter" onclick="return mess();" class="btn btn-info" />
    </div>
    <div style="clear:both"></div>
    <br />
    <div id="graph_table">  
        <table class="table table-bordered">
            <tr>
                <th width="5%">ID</th>
                <th width="30%">Value</th>
                <th width="12%"> Date</th>
            </tr>
            <?php
            
            while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["val"]; ?></td>
                    <td><?php echo $row["datee"]; ?></td>
                </tr>
                <?php
            }
            ?>
          
        </table>
    </div>
</div>
	<script type="text/javascript">
      function mess()
      {alert("Excellent ! now wait for your
      }
   </script>
	
	
	<script>
    $(document).ready(function(){
        $.datepicker.setDefaults({
            dateFormat: 'yy-mm-dd'
        });
        $(function(){
            $("#from_date").datepicker();
            $("#to_date").datepicker();
        });
        $('#filter').click(function(){
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            if(from_date != '' && to_date != '')
            {//alert("you ve just entered");
                $.ajax({
                    url:"https://github.com/christie-matta/mdp14esib/blob/master/berthe2.php",
                    method:"POST",
                    data:{from_date:from_date, to_date:to_date},
                    success:function(data)
                    {
                        $('#order_table').html(data);
                    }
                });
            }
            else
            {
                alert("Please Select Date");
            }
        });
    });
</script>
	
	
</body>
</html>

   






