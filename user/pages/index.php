
<?php  
   session_start();
   $Qid=$_SESSION["Cid"] ;
   
   
  if($_SESSION["Cid"]){

  }
  else{
    echo '<script> location.replace("../../coupleLog.php"); </script>';
  }
   ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

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
                <a class="navbar-brand" href="index.php">User</a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="Certificate.php"><i class="fa fa-table fa-fw"></i> Marrage Certificate</a>
                        </li>
                        <li>
                            <a href="divorce.php"><i class="fa fa-table fa-fw"></i> Application For Divorce</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut</a>
                        </li>
                        
                        
                        
                        
                      
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Couple Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
               <table class="table table-hover table-bordered">
  
  <tbody>

    <?php 
include "connection.php";
$RegID=$_SESSION["Cid"] ;
$query=("select * from marriagelist where RegNo ='$RegID'");
$result=mysqli_query($connection,$query);
if ($result) {
  while ($row = mysqli_fetch_array($result)) {


    echo "
    <tr>
      <th> Photo of the bridegroom: </th>
    
      <td><img src='../../qazi/pages/".$row['photoH']."'width='100' height='100'/></td>
     
      
    </tr>
    <tr>
      <th> Photo of the bridegroom: </th>
      <td><img src='../../qazi/pages/".$row['photoW']."'width='100' height='100'/></td>
     
      
    </tr>
    <tr>
      <th> Name of the bridegroom: </th>
      <td>".$row['d2']."</td>
     
      
    </tr>
    <tr>
      <th> The name of the bride: </th>
      <td>".$row['d4']."</td>
     
      
    </tr>
    <tr>
      <th>Date of Marriage:</th>
      <td>".$row['date']."</td>
      
    </tr>
    <tr>
      <th>Marriage Registrar’s Id</th>
      
      <td>".$row['RegNo']."</td>
    </tr>
    ";
    }
  
}
else{
  echo "<h6 >NO RECORD FOUND</h6>";
}

?>

  </tbody>
</table>

            
                       
             </div>
               
                </div>
               
         
          
       </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

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

</body>

</html>
