<?php   session_start();
          $id1=$_SESSION['id1'];
function imagess_insert($img)
       { $GLOBALS['id'] = $$GLOBALS['id1'];
           
         require('../../../confg/db.php');

          ///image upload







        
   
         $sel="insert into images values('','".$GLOBALS['id']."','$img')";
      
         $mysql=mysqli_query($conn,$sel);
         if($mysql)
         {
            echo "your image is successfullly inserted ";
         }
     
      }
?>	
