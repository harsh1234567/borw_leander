 <?php
    $registeredEmail = array('jenson1@jenson.in', 'jenson2@jenson.in', 'jenson3@jenson.in', 'jenson4@jenson.in', 'jenson5@jenson.in');

    $requestedEmail  = $_REQUEST['email'];

    if( in_array($requestedEmail, $registeredEmail) ){
        echo 'false';
    }
    else{
        echo 'true';
    }
    ?>