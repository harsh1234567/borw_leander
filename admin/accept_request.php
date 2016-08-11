<?php  require('../confg/db.php');
    
$id=  $_GET['id'];
     $sel_name="select * from borrow_user where id='$id'";
     $mysql=mysqli_query($conn,$sel_name);
     $rows=mysqli_fetch_array($mysql);
     $uname=$rows['user_name'];
     $type=$rows['user_type'];
     //echo $type;
     if($type==1)
     {
      $t='borr';

     }else{

    $t='lend';


     }
    // echo $t;
       
        $sel_amount="select bor_demand  as d from borrow_detail where borrower_id='$id'";
        $mysql_amu=mysqli_query($conn,$sel_amount);
        $rows_a=mysqli_fetch_array($mysql_amu);
        $demand=$rows_a['d'];
     //have to change in future 
        $detail=$rows['user_address'];
    // echo $demand;
       $sel="insert into request values('','$id','$uname','','1','$demand','$detail','','$t',NOW())";
       $mysql_query1=mysqli_query($conn,$sel);
       if($mysql_query1)
       {      

        echo '<script type="text/javascript">';
        echo 'window.location.href="home.php";';
        echo "
            alert('request is accepted');";
        echo '</script>';

    }
    else{

      echo "error!!!";
    }


?>