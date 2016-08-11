<?php  require('../../confg/db.php'); ?>
<?php 

    extract($_POST);
    if(isset($submit))
    {   

      if($pass==$c_pass)
      {   
      //    if($inlineRadioOptions=="male")
        //  {
          //  $gender=male;
         // }else{

            //$gender='female';
          //}
          $gender=($inlineRadioOptions=='m')? 'male':'female';
           $sel="select * from borrow_user  where user_email='".$email."'";
          $mysql11=mysqli_query($conn,$sel);

          if(mysqli_num_rows($mysql11)<=0)
          {             

      $sel="insert into borrow_user values('','$first_name','$father_name','$email','$pass','$gender','$address','$DOB','$phn')";
       $mysql_s=mysqli_query($conn,$sel);
         if($mysql_s==true)
        {

           //     $msg="your data is compeletlly inserted!!";
            header('location:index_bl.php');

        }
    }else{


        $msg="user already exit ";

    }
     }else{
 
         $msg="<font color='red'>confirm password don't match!! </font>";


     }
    }


?>

