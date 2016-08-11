<?php   

 require('../../confg/db.php');
if(isset($_POST['email']))
{
	$email=$_POST['email'];
  //  echo $email;
	$checkdata=" SELECT user_email FROM borrow_user WHERE user_email='$email'  ";

	$query=mysqli_query($conn,$checkdata);
   // echo mysqli_num_rows($query);
	if(mysqli_num_rows($query)>0)
	{
	echo "User email Already Exist";
	}
	else
	{
	echo "OK";
	}
exit();
}



?>