<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
<?php  
   session_start();
   $admin=$_SESSION["admin"] ;
   
   
  if($admin=='admin'){

  }
  else{
    echo '<script> location.replace("../../adminlogin.php"); </script>';
  }
   ?>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </br>
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="addQazi.php"><i class="fa fa-table fa-fw"></i> Add Qazi </a>
                        </li>
                        <li>
                            <a href="qazitable.php"><i class="fa fa-table fa-fw"></i> Qazi List </a>
                        </li>
                        <li>
                            <a href="review.php"><i class="fa fa-table fa-fw"></i> Review Registration </a>
                        </li>
                        <li>
                            <a href="divorceList.php"><i class="fa fa-table fa-fw"></i> Divorce List </a>
                        </li>
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut </a>
                        </li>
                        
                      
                       
                    </ul>
                </div>
             
            </div>
         
        </nav>
    <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Registration Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
<table class="table table-hover table-bordered">
  
  


<?php

include "connection.php";

if(isset($_GET['Registration_id'])){
  $Registration_id = $_GET['Registration_id'];
  /*$_SESSION["bikeid"]=$product_id;*/
  /*echo $product_id;*/
  
  $get_info = "select * from marriagelist where id='$Registration_id'";
  
  $run_info = mysqli_query($connection, $get_info);
  
    
  while($row=mysqli_fetch_array($run_info)){
  
  $registration_id=$row['id'];
  $registration_names=$row['d2'];
  $registration_named=$row['d4'];
  $registration_sfather=$row['f1'];
  $registration_dfather=$row['f2'];
$registration_date=$row['date'];
  $registration_RegNo=$row['RegNo'];
  $registration_ages=$row['d3'];
  $registration_aged=$row['d6'];
  $registration_dower=$row['d13'];
  $registration_adress=$row['a1'];
  $registration_adress=$row['a2'];

 
  
  echo "


 
  
  <tbody>
    <tr>
      <th>Marrage Registraion ID: </th>
      <td>$registration_id</td>
     
      
    </tr>
    <tr>
      <th>Name of the bridegroom </th>
      <td>$registration_names</td>
     
      
    </tr>
    <tr>
      <th>The name of the bride </th>
      <td>$registration_named</td>
     
      
    </tr>
    <tr>
      <th>Marrage Date</th>
      <td> $registration_date</td>
      
    </tr>
    <tr>
      <th>Age of Bridegroom</th>
      
      <td>$registration_ages</td>
    </tr>
    <tr>
      <th>Age of the Bride</th>
      
      <td>$registration_aged</td>
    </tr>
    <tr>
      <th>Amount of Dower</th>
      
      <td>$registration_dower</td>
    </tr>
    <tr>
      <th>Adress of Bridegroom</th>
      
      <td>$registration_adress</td>
    </tr>
    <tr>
      <th>Adress of Bride</th>
      
      <td>$registration_adress</td>
    </tr>
  </tbody>

  ";
    
  }
  }
  
    
  
    
    



?>

</table>

                
               
            
                       
             </div>
               
                </div>
               






        
                    </div>
                   

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>

</html>
