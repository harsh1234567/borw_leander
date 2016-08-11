<?php  session_start();

require('../../confg/db.php'); ?>
<?php 

    extract($_POST);
    if(isset($submit))
    {   

           $sel="select * from borrow_user  where user_email='".$email."'and user_pass='".$pass."'";
          $mysql11=mysqli_query($conn,$sel);
            $rowss=mysqli_fetch_array($mysql11);
          if(mysqli_num_rows($mysql11)>0)
          {             
                $_SESSION['id']=$rowss['id'];
               header('location:index_bl.php');         
              
          }
    else{

echo "you are wrong user!!";

    }
    }


?>