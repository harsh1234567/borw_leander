	  <?php 
      session_start();
      extract($_POST);
       $id=$_SESSION['id1'];
    
      require('confg/db.php');

      $sel_for_lean=mysqli_query($conn,"SELECT * FROM employ_detail_lean, educatation_detail_lean WHERE(educatation_detail_lean.lean_id='".$id."' and educatation_detail_lean.lean_id=employ_detail_lean.leans_id)");
      

?>
			  <?php 
     $mysql1="select * from lend_detail where lend_id='$id'";
    
     $mysql_b_d=mysqli_query($conn,$mysql1);
     $rowwss=mysqli_fetch_array($mysql_b_d);
  //lender get name 

  $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
 $rowss=mysqli_fetch_array($mysql);
 $name= $rowss['user_name'];


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>leading | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src='plugins/morris/morris.min.js'></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>l</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>lean</b>L</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/IMG_1129.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                       
                       <?php  echo $name;?>

                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">
			  
			  <?php $mysql="select count(*) as cut from request where active_request=1";
			  
			  
			          $mysql1=mysqli_query($conn,$mysql);
			          $rows=mysqli_fetch_array($mysql1);
					  echo $rows['cut'];
			  ?> 
			  
			  
			  
			  
			  
			  </span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 
			  
			          <?php $mysql="select count(*) as cut from request where active_request=1";
			  
			  
			             $mysql1=mysqli_query($conn,$mysql);
			             $rows=mysqli_fetch_array($mysql1);
					         echo $rows['cut'];
			  ?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                      <?php if($rows['cut']<=0)
					   {   
						   echo "<li>
                    <a href='#'>
                      <i class='fa fa-users text-aqua'></i> no update 
                    </a></li>";
						   
					   }
					   else{
						    
							$find_rows="select * from request ";
							$sql=mysqli_query($conn,$find_rows);
						while($rows=mysqli_fetch_array($sql))
						 {
							  $id=$rows['user_id'];
							 echo "<li>
							<a href='pages/examples/noti.php?id=".$id."'>
								<i class='fa fa-user text-red'></i> ".$rows['detail_user']."</a></li>";		
					   }}				
				
				?>
				</ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <!-- end task item -->
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                          Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/IMG_1129.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/IMG_1129.jpg" class="img-circle" alt="User Image">
                 <p>
                 <?php echo $name;?>
				  <small>Member since july .2016</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                   <i class="fa fa-flag-o"></i>
              <span class="label label-danger"><?php echo $rowwss['lend_wallet']; ?></span>
              In wallet

                               </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/IMG_1129.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
                       <?php  echo $name;?>
</p>
		  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
<?php          if(mysqli_num_rows($sel_for_lean)>0)
      {
              
              echo "   <a href='index.php?option1='>
            <i class='fa fa-dashboard'></i> <span>Add loan type</span>
            <span class='pull-right-container'>
            </span>
          </a>";
           

      }else{


      }
?>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-8 connectedSortable">
              <?php 
   //  echo $_SESSION['id1'];
       $id=$_SESSION['id1'];
      
       $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
       $rowsss=mysqli_fetch_array($mysql);
       $lend_name=$rowsss['user_name'];
      // echo "<strong>hello ".$lend_name."</strong>";
         if(isset($submit))
         {
             $mysql="insert into lend_detail values('','$lend_name','$id', '$pan','$account','$wallet','$home_own','$salary','$o_income','$rent_o_house','$trans','$Food_e','$b_account')";
             $mysqll=mysqli_query($conn,$mysql);
           if($mysql==true)
           {
            
            echo "<script>alert('succuessfully inserted!!');
            window.location.href='step_2.php';

            </script>";

           }else{

             echo "Failed inserted!!";

           }
            
           }
   
   

 ?> 
<?php 

   $sel="select * from lend_detail where lend_id='$id'";
   $mysql=mysqli_query($conn,$sel);

 if(mysqli_num_rows($mysql)<1)
 {

?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-xs-6">
<form method="POST">

  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Pan card</span>
  <input type="text" class="form-control"   name="pan1" placeholder="pan card no">
  </div>
  <br/>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">account </span>
   <input type="text" name="account" class="form-control" placeholder="account no ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">
       wallet

  </span>
   <input type="text" class="form-control" name="wallet" placeholder=" " min="10000">(minimum 10000)
   </div>
<br/>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"> Home Ownership</span>
   <select  name="home_own" class="form-control" >
   <option >Home Ownership</option>
   <option values='1'>Rented</option>
   <option values='2'>Owned</option>
   <option values='3'>living with parents</option>

   </select>
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">salary </span>
   <input type='text' name="salary" class="form-control" placeholder="Salary ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">other income </span>
   <input type='text' name="o_income" class="form-control" placeholder="other income ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">rent on house </span>
   <input type='text' name="rent_o_house" class="form-control" placeholder="rent on house ">
   </div>
<br/><div class="input-group">
 <label class="radio-inline"><input type="radio" name="trans" value="two">two vehl</label>
<label class="radio-inline"><input type="radio" name="trans" value="four">four vehl</label>
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">food </span>
   <input type='text' name="Food_e" class="form-control" placeholder="Food and other Expenses">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">primary bank acnt </span>
   <input type='text' name="b_account" class="form-control" placeholder="primary bank account ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">bank statement in pdf format </span>
   <input type='file' name="b_pdf_format" class="form-control" >
  </div>
<br/>
  <input type="submit" name="submit" value="submit" class="btn btn-success btn-sm "/>
</form>
 </div>
 </div>
 <br/>
 <?php }else{


    include('borrow_request_show.php');

  }?>
<!-- <div class="panel panel-heading">
 <h2>you last detail  
</h2>
</div>

      <table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>pan no</th>
      <th>account no </th>
      <th>wallet </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php //echo $rowwss[1]; ?></td>
      <td><?php //echo $rowwss[3];  ?></td>
      <td><?php //echo $rowwss[4]; ?></td>
      <td><?php //echo $rowwss[5]; ?></td>
    </tr>
    </tbody>
</table>-->
  
    
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->

<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- Sparkline -->

<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
