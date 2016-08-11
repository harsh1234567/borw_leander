	  <?php 
      session_start();
      extract($_POST);
       $id=$_SESSION['id1'];
      if(!isset($id))
      {

       header('location:../temp/site/index.php');

      }
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
<?php include('header.php');?>
<?php include('side_bar.php');?>
  <!-- Left side column. contains the logo and sidebar -->
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
<?php
 extract($_POST);
   if(isset($submit111))
   {
  
     foreach ($_POST['borr_rate'] as $selectedOption)
    echo $selectedOption."<br/>";

   }

 

?>
<div class="modal fade" id="loan" tabindex="-1" role="dialog" aria-labelledby="loan" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">loan detail </h4>
            </div>
            <div class="modal-body">
                <h3>option to choose lender detail </h3>
               

                   <form class="form-inline" method="POST">
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-icon-rupee"></span></div>
    <label class="sr-only" for="exampleInputEmail3">Cash load</label>
    <select multiple class="form-control"  name="cash_loader[]">
      <option value='1'>1Lac-10Lac</option>
      <option value='2'>10Lac-25Lac</option>
      <option value='3'>1Lac-50Lac</option>
      <option value='4'>50Lac-1cre</option>
      <option value='5'>1cre-10cre</option>
      <option value='6'>All</option>

    </select>
    </div>
  </div>
  <div class="form-group">
   <div class="input-group">
      <div class="input-group-addon">add rating</div>
  <label class="sr-only" for="exampleInputPassword3">Borrower rating</label>
    <select multiple class="form-control"  name="borr_rate[]">
    <?php for($i=1;$i<=10;$i++)
    {
     
       echo "<option value=".$i.">".$i."</option>"; 

      }?>


    </select>
  </div>
  </div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="submit111" class="btn btn-primary" value="\Add detail"/>
</form>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>


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
 // $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<!-- DataTables -->
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
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
</body>
</html>
