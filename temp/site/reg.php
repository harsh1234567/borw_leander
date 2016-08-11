<?php  session_start();


  require('../../confg/db.php'); ?>

<?php 

    


        require '../../PHPMailer/PHPMailerAutoload.php';
    extract($_POST);
   if(isset($login)){
     header('location:login.php');

   }

    if(isset($submit1))
    {   
      
       $name=$first_name." ".$last_name;

      if($pass==$c_pass)
      {   

         if(isset($inlineRadioOptions))
         {
           
           $gender=($inlineRadioOptions=='m')? 'male':'female';

           
         }else{



           $gender="";
         }
      //    if($inlineRadioOptions=="male")
        //  {
          //  $gender=male;
         // }else{

            //$gender='female';
          //}inlineRadioOptions
        //echo $iinlineRadioOptions;
          
          
          $sel="select * from borrow_user  where user_email='".$email."'";
          $mysql11=mysqli_query($conn,$sel);

          if(mysqli_num_rows($mysql11)<=0)
          {             
     ///email verification 
     $mail = new PHPMailer;

      $mail->isSMTP();                                   // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                            // Enable SMTP authentication
      $mail->Username = 'ariharsh1994@gmail.com';          // SMTP username
     $mail->Password = 'pythonsep123'; // SMTP password
     $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
     $mail->Port = 587;                                 // TCP port to connect to

     $mail->setFrom('ariharsh1994@gmail.com', 'CodexWorld');   
    $mail->addReplyTo($email, 'formation');
    $mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML



$mail->Subject = 'email verification';
$mail->Body    = "<a href='localhost/email_verification.php'>wefwefefwefe</a>";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}





      $sel="insert into borrow_user(user_name,user_father_name,user_email,user_pass,user_gender,user_address,user_dob,phn,user_type,avt_date) values('$name','$father_name','$email','$pass','$gender','$address','$DOB','$phn','$type1',NOW())";
       $mysql_s=mysqli_query($conn,$sel);
         if($mysql_s==true)
        {
             //echo "weert4";
           //     $msg="your data is compeletlly inserted!!";
           
             header('location:login.php');

             
   
        }else{

          echo "wr";
        }
    }
    else{


        $msg="user already exit ";

    }
     }else{
 
         $msg="<font color='red'>confirm password don't match!! </font>";


     }
    }


?>

