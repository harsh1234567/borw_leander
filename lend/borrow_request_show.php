
 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">borrower detail </h3>
            </div>
            <?php $mysql="select * from request where type='borr'";
    $mysqll=mysqli_query($conn,$mysql);
   $i=1; ?>


            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
               <tr>
                  <th>ID</th>
                  <th>User name</th>
                  <th>activate date</th>
                  <th>user detail</th>
                  <th>rating </th>
                  <th>bid </th>
                </tr>
                </thead>
                <tbody>
                 <?php while($rowss=mysqli_fetch_array($mysqll))
    {
    
     ?>
 
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $rowss['user_name'];?></td>
                  <td><?php echo $rowss['acvt_date'];?></td>
                  <td><?php echo $rowss['detail_user']; ?></td>
                  <td><<?php 
                  if($rowss['rating']==0)
                  {
                    $t="span class='label label-danger'>there is no rating for this user, bcoz this is new user</span>";
                  }else{
                    $t="span class='label label-success'>".$rowss['rating']."%</span>";
                  }
                  echo $t; ?></td>
                  <td><a href="go_with_him"><span class="label label-success">Bid<?php //echo $rowss['detail_user']; ?></a></span></td>
                 
                   </tr>
    
     
<?php
     } 
     ?>


                </tbody>
                <tfoot>
               <tr>
                  <th>ID</th>
                  <th>User name</th>
                  <th>activate date</th>
                  <th>user detail</th>
                  <th>rating </th>
                  <th>bid </th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       
    <!-- /.content -->
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
 