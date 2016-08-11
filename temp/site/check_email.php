

    <?php 

        $email = $_REQUEST['useremail'];

         $check="harsh";
               if ($check == '0' or empty($check)) {
                echo 'true';
            } else {
                echo  'false';

            }

?>