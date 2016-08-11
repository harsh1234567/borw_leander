<?php session_start();
      extract($_POST);
      require('../../confg/db.php');
   //  echo $_SESSION['id1'];
       $id=$_SESSION['id1'];
       
       $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
       $rowsss=mysqli_fetch_array($mysql);
       $borr_name=$rowsss['user_name'];
         echo "<strong>hello ".$borr_name."</strong>";
       if(isset($sub))
     {   
      $mysql="insert into borrow_detail values('','$borr_name','$id', '$pan','$account','$bor_demand')";
      $mysqll=mysqli_query($conn,$mysql);
       if($mysqll)
       {
        //   echo "okkkk";
          
       }else{

       	//  echo "scetre";
       }
     }
     
   

 ?> 


<form method="POST">
  <input type='number' name='pan' placeholder="pan card no ">
   <input type='number' name='account' placeholder="account no ">

   <input type='number' name='bor_demand' placeholder="borrow demand ">
  <input type='submit' name='sub' value="add detail ">
  

</form>
<h2>show detail 
</h2>
<?php 

     $mysql="select * from borrow_detail where borrower_id='$id'";

     $mysql_b_d=mysqli_query($conn,$mysql);
     $rowwss=mysqli_fetch_array($mysql_b_d);
     echo $rowwss[1]."<br/>";
      echo $rowwss[3]."<br/>"; echo $rowwss[4]."<br/>";
        echo $rowwss[5]."<br/>";
?>