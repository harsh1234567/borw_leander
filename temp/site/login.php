<?php require('../../confg/db.php'); ?>
<?php session_start();
//echo "ctre";
          
    extract($_POST);
 //for session validation 
     if(isset($_SESSION['id1']) && !empty($_SESSION['id1']))
      {
      
      $mysql="select * from borrow_user where id='".$_SESSION['id1']."'";
      $sel=mysqli_query($conn,$mysql);
      $rows=mysqli_fetch_array($sel);
      echo $rows['user_type'];
      if($rows['user_type']==1)
        {
 
       
          header('location:../../borrow/index.php');
         exit();      

       }
       if($rows['user_type']==2)
       {
      
          header('location:../../lend/index.php');
         exit();


       }
      }


    if(isset($log))
    {    

         

           $email=mysqli_real_escape_string($conn,$email);
           $pass=mysqli_real_escape_string($conn,$pass);
         // echo $email;
         
          if($type1!='')
        {
          $sel="select * from borrow_user  where user_email='".$email."' and user_pass='".$pass."' ";
          $mysql11=mysqli_query($conn,$sel);

          
           $rowss=mysqli_fetch_array($mysql11);
           echo mysqli_num_rows($mysql11);
        
          if(mysqli_num_rows($mysql11)==1)
          {         
            ;
            
             if($type1==1)
             {   $_SESSION['id1']=$rowss['id']; 
             header('location:../../borrow/index.php');
          //  echo  $rowss['user_type'];
            }
           else if($type1==2){
               // echo  $rowss['user_type'];
                 $_SESSION['id1']=$rowss['id']; 
           
                 header('location:../../lend/index.php');
              
              }  
                 
            
  
                }
          else{

           $msg= "<font color='red'>you are wrong user!!</font>";

         }

      }else{


    $msg="<font color='red'>pleae choose the select box !!</font>";


      }

     } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <title>Home</title>
  <!-- Bootstrap -->

 <link rel="stylesheet" href="../../css/bootstrapValidator.css"/>
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Links -->
  <!--JS-->
   <style>
   .form-control {
    display: block;
    width: 100%;
    height: 35px;
    padding: 8px 60px;
    border-radius: 10px;
    font-size:13px;

  }.btn-sm, .btn-group-sm > .btn {
    padding: 0.5rem 0.9375rem;
    font-size: 0.9rem;
    line-height: 1.375rem;
    border-radius: 1.0rem;
    padding-top: 0.4375rem;
}
  </style>
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
  <!--[if lt IE 9]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
  <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
<!--  <header>
    <div id="stuck_container" class="stuck_container">
      <div class="container container-wide">
        <div class="navbar-brand">
          <a href="./">
          </a>
        </div>
       <!-- <nav class="navbar navbar-default navbar-static-top">
          <div class="navbar-header center-xs">
          </div>
          <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
            <li class="active">
              <a href="./">Home</a>
            </li>
            <li class="dropdown">
              <a href="index-1.html">Register</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Most Popular</a>
                </li>
                <li>
                  <a href="#">Latest News</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">Latest</a>
                    </li>
                    <li>
                      <a href="#">Archive</a>
                    </li>
                    <li>
                      <a href="404.html">404</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Company Info</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="index-2.html">Search</a>
            </li>
            <li>
              <a href="index-3.html">FAQ</a>
            </li>

            <li>
              <a href="index-4.html">Contacts</a>
            </li>

             </ul>
          <div class="trig">
            <p>Menu</p>
            <span></span>
          </div>
        </nav>
      </div>
    </div>
  </header>
-->
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main class="text-center">
    <!-- Jumbotron section -->
    <!-- END jumbotron section-->

    <!-- Welcome -->

 <div class="container container-wide">
        <h3>Welcome!</h3>
      </div>
      <div class="row row-no-gutter">
           <div class="col-md-6 col-lg-4 grid-1">
          <!-- Owl Carousel -->
          <div class="owl-carousel"
               data-items="2"
               data-stage-padding="20"
               data-loop="false"
               data-sm-items="3"
               data-sm-stage-padding="0"
              >
          </div>
          <!-- END Owl Carousel -->
        </div>
        <div class="col-md-4 col-lg-4 pull-lg-right grid-1">
           <div class="owl-carousel"
               data-items="2"
               data-stage-padding="20"
               data-loop="false"
               data-sm-items="3"
               data-sm-stage-padding="0"
              >
          </div>
          <!-- END Owl Carousel -->
        </div>
        <div class="col-md-10 col-md-offset-1 col-lg-4 col-lg-offset-0 grid-2">
        
         <form  method="post" action=""  id="defaultForm12">
            <!-- RD Mailform Type -->
            <input type="hidden" name="form-type" value="contact"/>
            <!-- END RD Mailform Type -->
            <div class="panel panel-danger">
               <div class="panel panel-heading">
              <h5 class="text-center">It`s free to join</h5>
               </div>
           <div class="panel panel-body">
             <?php   
             if(isset($msg))
              {
                   echo $msg;

              }
               ?>
            <div class="row ">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                
                    <input 
                         type="text"
                         placeholder="email" 
                         class="form-control"
                         name="email"/>
                    <br/>
                  <input                       
                     type="password"
                         name="pass"
                         placeholder="password" 
                         class="form-control"/>
                  <br/>
                  <label class="form-label" >user type</label>
                     <select id='type' name="type1" class="form-control">
                       <option>
                           select type 
                       </option>
                            <option value='1'>
                             borrower
                       </option>
                       <option value='2'>
                           lender
                       </option>
                   
                     </select>

                </div>
            </div>
            <div class="row ">
              <div class="col-sm-6">
               </div>
           <div class="row ">
                 <div class="col-sm-12">
                   <div class="form-group">
                  <input type='submit' name='log' value='login' class="btn btn-success btn-sm" />
                 <a href="index.php" >register </a>
     
                </div>
              </div>

            </div>
            </div>
            </div>
          </form>
      </div>
      </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm12').bootstrapValidator({
            message: 'This value is not valid',
            container: 'tooltip',
           feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               email: {
                   validators: {
                         notEmpty: {
                          message: 'The email is required and cannot be empty'
                     }
                } 
            },
            pass: {
                 validators: {
                     notEmpty: {
                        message: 'The password is required and cannot be empty'
                     }
                 }
             }
      

    }
  }
    );

});

</script>
</div>
    <!-- END Welcome-->

    <!-- Last Added Profiles -->
      <div class="container container-wide">
        <h3>Last Added Profiles</h3>

        <div class="row flow-offset-1">
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <img src="images/page-1_img11.jpg" class="img-circle img-wide" alt=""/>
            <h5 class="small text-primary">Monica</h5>

            <p class="offset-0">
              <small class="text-muted">Age: 21, London</small>
            </p>
            <a href="#" class="btn btn-xs btn-default">More Info</a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <img src="images/page-1_img12.jpg" class="img-circle img-wide" alt=""/>
            <h5 class="small text-primary">Lisa</h5>

            <p class="offset-0">
              <small class="text-muted">Age: 25, New York</small>
            </p>
            <a href="#" class="btn btn-xs btn-default">More Info</a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <img src="images/page-1_img13.jpg" class="img-circle img-wide" alt=""/>
            <h5 class="small text-primary">Mike</h5>

            <p class="offset-0">
              <small class="text-muted">Age: 28, Washington</small>
            </p>
            <a href="#" class="btn btn-xs btn-default">More Info</a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <img src="images/page-1_img14.jpg" class="img-circle img-wide" alt=""/>
            <h5 class="small text-primary">Natali</h5>

            <p class="offset-0">
              <small class="text-muted">Age: 19, Lynchburg</small>
            </p>
            <a href="#" class="btn btn-xs btn-default">More Info</a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <img src="images/page-1_img15.jpg" class="img-circle img-wide" alt=""/>
            <h5 class="small text-primary">Jessica</h5>

            <p class="offset-0">
              <small class="text-muted">Age: 18, London</small>
            </p>
            <a href="#" class="btn btn-xs btn-default">More Info</a>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <img src="images/page-1_img16.jpg" class="img-circle img-wide" alt=""/>
            <h5 class="small text-primary">Andrew</h5>

            <p class="offset-0">
              <small class="text-muted">Age: 30, Moscow</small>
            </p>
            <a href="#" class="btn btn-xs btn-default">More Info</a>
          </div>
        </div>
      </div>
    <!-- END Last Added Profiles-->

    <!-- Members Who Have Found Love -->
    <section class="bg-secondary-variant-1 text-left center-lg">
      <div class="row">
        <div class="col-lg-3 grid-3 prefix-1 well-2">
          
          <!-- Owl Carousel -->
          <div class="owl-carousel"
               data-dots="true"
               data-nav="false"
               data-margin="2">
            <div class="owl-item">
              <blockquote class="media quote">
               
              
              </blockquote>
            </div>
            <div class="owl-item">
              <blockquote class="media quote">
               
               
              </blockquote>
            </div>
            <div class="owl-item">
              <blockquote class="media quote">
               
              </blockquote>
            </div>
          </div>
          <!-- END Owl Carousel -->
        </div>
       </section>
    <!-- END Members Who Have Found Love-->
  </main>

  <!--========================================================
                          FOOTER
  =========================================================-->
  <!--<footer>

    <section>
      <div class="container container-wide center-sm">
        <div class="row">
          <div class="col-xs-12">
            <p class="rights">
              BBW and BHM Dating Site &#169; <span id="copyright-year"></span> All rights reserved. <br/>
              <a href="#">Terms of use</a> | <a href="index-5.html">Privacy Policy</a>
              More Dating Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/dating-web-templates/" target="_blank">TemplateMonster.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </footer>-->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"/></script>

<!-- </script> -->

</body>
</html>
