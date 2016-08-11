<?php session_start();
      extract($_POST);
      require('../../confg/db.php');
   //  echo $_SESSION['id1'];
       $id=$_SESSION['id1'];
      
       $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
       $rowsss=mysqli_fetch_array($mysql);
       $lend_name=$rowsss['user_name'];
       echo "<strong>hello ".$lend_name."</strong>";
         if(isset($sub))
         {
             $mysql="insert into lend_detail values('','$lend_name','$id', '$pan','$account','$wallet')";
             $mysqll=mysqli_query($conn,$mysql);

         
        }
   
   

 ?> 


<form method="POST">
  <input type='number' name='pan' placeholder="pan card no ">
   <input type='number' name='account' placeholder="account no ">

   <input type='number' name='wallet' placeholder="wallet money ">
  <input type='submit' name='sub' value="add detail ">
  

</form>
<h2>you recent detail  detail 
</h2>
<?php 

     $mysql1="select * from lend_detail where lend_id='$id'";

     $mysql_b_d=mysqli_query($conn,$mysql1);
     $rowwss=mysqli_fetch_array($mysql_b_d);
     echo $rowwss[1]."<br/>";
      echo $rowwss[3]."<br/>"; echo $rowwss[4]."<br/>";
        echo $rowwss[5]."<br/>";
?>