<?php 
//require('../confg/db.php');
 $mysql="select * from request where active_request='1'";

   $sel1=mysqli_query($conn,$mysql);
   
   ?>
 <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>user Name</th>
                    <th> Breif detail borrow </th>
                    <th>Add time</th>
                     
                      <th>Add rating</th>
                    
                      <th>show rating</th>
                      <th>type</th>
                  </tr>
                  </thead>

                 
                  <tbody>
       
   <?php while($rows=mysqli_fetch_array($sel1))
   {
      ?>

                  <tr>
                      <td><?php echo $rows['user_name'];?></a>

                      <td><a href="bref.php?id=<?php echo $rows['user_id'];?>"><span class="label label-success"><?php echo $rows['detail_user'];?></span></a>
                      <td><a  href='#time' data-toggle="modal"   data-id="<?php echo $rows['user_id']; ?>"><span class="label label-info">add time</span></a>
                      <td>
                   <?php 
                         $sel=mysqli_query($conn,"select * from request where user_id='".$rows['user_id']."' and rating!=' '");

                   if(mysqli_num_rows($sel)>0)
                   {
                     
                       

                   ?>

                           
                      <a href='#myModal' data-toggle="modal"   data-id="<?php echo $rows['user_id']; ?>" class='btn btn-warning'>
update rating </a>
                       
                   <?php }else{

                    ?>

                      <a href='#myModal' data-toggle="modal"   data-id="<?php echo $rows['user_id']?>">
<span class="label label-danger">rating </span></a>
                       

                    <?php


                   }?>

</td>
<td>
                   
<span class="label label-success"><?php echo $rows['rating'];?> %</span>
                       

</td>
                       <td><span class="label label-danger"><?php   
                                   
                                    if($rows['type']=='lend')
                                      {

                                        echo "as a lender";
                                      }else{

                                        echo "as a borrower";
                                      }
                          
                       ?></span>
                       </td>
                       
                  </tr>   



      <?php
 
   } 
 


?>
               </tbody>
                </table>
              </div>
             
