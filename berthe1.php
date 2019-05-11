
<?php
$serverName = "tcp:server-mdp.database.windows.net,1433";
$connectionInfo = array( "Database"=>"DB-MDP", "UID"=>"adminmdp", "PWD"=>"p@ssw0rd");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM Graph";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
sqlsrv_free_stmt( $stmt);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
<br /><br />
<div class="container" style="width:900px;">
    <h2 align="center">Ajax PHP MySQL Date Range Search using jQuery DatePicker</h2>
    <h3 align="center">Graph Data</h3><br />
    <div class="col-md-3">
        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
    </div>
    <div class="col-md-3">
        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
    </div>
    <div class="col-md-5">
        <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />
    </div>
    <div style="clear:both"></div>
    <br />
    <div id="graph_table">  
        <table class="table table-bordered">
            <tr>
                <th width="5%">ID</th>
                <th width="30%">Value</th>
                <th width="12%">Order Date</th>
            </tr>
            <?php
            
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
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
</body>
</html>


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
            {
                $.ajax({
                    url:"filter.php",
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




