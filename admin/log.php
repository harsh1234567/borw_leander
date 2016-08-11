<?php session_start();

  require('../confg/db.php');
   extract($_POST);
   if(isset($email) &&(!empty($email)))
   { 
    
     $sel="select * from admin where email='$email' and password='$pass'";
     $mysql=mysqli_query($conn,$sel);
     if($mysql)
     {
        if(mysqli_num_rows($mysql)==1)
        {
          $year = time() + 31536000;
              $rows=mysqli_fetch_array($mysql);
              $_SESSION['id']=$rows[0];
         

       ////remember me code

  if (isset($_POST['rem']) && $_POST['rem'] == 1) {
    /*
     * Set Cookie from here for one hour
     * */
    setcookie("email", $email, time()+(60*60*1));
    setcookie("password", $pass, time()+(60*60*1));  /* expire in 1 hour */
  } else {
    /**
     * Following code will unset the cookie
     * it set cookie 1 sec back to current Unix time
     * so that it will invalid
     * */
    //setcookie("username", $username, time()-1);
    //setcookie("password", $password, time()-1);
  }



           echo "<script>
              window.location.href='home.php';
          </script>";
        
       // /header('location:index.php');

        }else{

        echo "<div class='alert alert-danger'>
  <strong>Danger!</strong> you are wrong user!!
</div>";


        }
  
     }



   }
 


?>