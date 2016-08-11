<?php  require('../../confg/db.php'); ?>
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
   <link rel="icon" href="https://cdn.jsdelivr.net/bootstrap-social/5.0.0/bootstrap-social.css" >
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
  <header>
   </header>

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
        <div class="col-md-6 col-lg-4 pull-lg-right grid-1">
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
        <div class="col-md-10 col-md-offset-1 col-lg-4 col-lg-offset-0 grid-2">
          <form  method="post"  id="defaultForm11" action="reg.php"  onsubmit="return checkall();"  >
            <!--class='rd-mailform'--><!-- RD Mailform Type -->
            
            <div class="panel panel-danger">
             <div class="pane panel-heading">
              <h5 class="text-center">It`s free to join</h5>
             </div>
             <div class="panel panel-body">
                <div class="row">
                 <div class="col-md-2"></div>
                  <div class="col-sm-8">
                    <div class="form-group">

                       <input 
                         type="text"
                         name="first_name"
                         placeholder="first name"              
                         class="form-control"
                         data-constraints="@NotEmpty @LettersOnly"/>
                     </div>
                 <div class="form-group">
                  <label class="form-label"></label>
                    <input id="mailform-input-fname"
                         type="text"
                         name="last_name"
                         placeholder="last name"              
                         class="form-control"
                         data-constraints="@NotEmpty @LettersOnly"/>
                </div>
                <div class="form-group">
                  <label class="form-label" data-add-placeholder for="mailform-input-faname">
                   
                  </label>
                  <input id="mailform-input-faname"
                         type="text"
                         name="father_name"
                         
                         placeholder="father name"
                         class="form-control"
                         data-constraints="@NotEmpty @LettersOnly"/>
                </div>
                <div class="form-group">
                   <label class="form-label" data-add-placeholder for="mailform-input-faname" >
                  </label>
                   <input id="mailform-input-DOB"
                          type="date"
                          name="DOB"
                          
                         placeholder="DOB "
                         class="form-control"
                         
                          data-constraints="@NotEmpty "/>
                  </div>
                          
                 
              
            <div class="col-md-2"></div>
                <div class="input_form">
                  <label class="form-label" data-add-placeholder
                         for="mailform-input-email"></label>
                  <input 
                         type="text"
                         name="email"
                         onkeyup="checkemail()"          
                         placeholder="email" 
                         class="form-control"
                         id="email"
                         data-constraints="@NotEmpty @Email"/>
                  <span id="email_status"></span>
                </div>

                <br/>
                <div class="form-group">
                  <label class="form-label" data-add-placeholder
                         for="mailform-input-pass" palceholder="password"></label>
                  <input id="mailform-input-pass"
                         type="password"
                         name="pass"
                         class="form-control"
                         placeholder="password" 
                         data-constraints="@N

                         class="form-control"otEmpty"/>
                </div>
                <div class="form-group">
                  <label class="form-label" data-add-placeholder for="mailform-input-pass-confirm">
                    </label>
                  <input id="mailform-input-pass-confirm"
                         type="password"
                         name="c_pass"
                         
                         placeholder="confirm password"
                         class="form-control"
                         data-constraints="@NotEmpty"/>

                </div>
                     
                      <div class="form-group">
                        <label class="form-label" data-add-placeholder for="mailform-input-faname">
                         </label>
                    
                        <textarea name="address" data-constraints="@NotEmpty " 
                           class="form-control" placeholder="address"></textarea>

                      </div> 
                 <div class="form-group">
                    <label class="form-label" data-add-placeholder
                           for="mailform-input-pass"></label>
                    <input id="mailform-input-phn"
                            type="text"
                            name="phn"

                             placeholder="PHN NO"
                             class="form-control"
                             data-constraints="@NotEmpty"/>
                </div>

                <div class="form-group radio">
                  <label class="radio-inline" for="inlineRadio1">male 
                       <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="m">
                  </label>
                   <label class="radio-inline" for="inlineRadio2">female
                     <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="f">
                   </label>
                </div>
                <br/>
                <div class="form-group">
                  <select id="type" name="type1" class="form-control">
                    <option  readonly>select type
                    </option>
                   
                    <option value='1'>Borrower
                    </option>
                    <option value='2'>lender
                    </option>
                  </select>
                  </div>

            </div>
            <!--row-no-gutter flow-offset-2-->
            <div class="row ">
              <div class="col-md-12">
                <div class="form-group ">
                  <input type="submit" name="submit1" class="btn btn-success btn-sm"   value="register"/>
                     <a href="login.php" >login</a>
                     <br/><button class="btn btn-social-icon btn-sm">
    <span class="fa fa-linkedin"></span> Sign up with linkedin
  </button>
  <button class="btn btn-social-icon btn-sm">
    <span class="fa fa-facebook"></span> Sign up with facebook
  </button>
                 </div>
              </div>
       
               
     
  
              </div>
            </div>
        </div>
      </div>
  </form>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
      
    $(document).ready(function() {
    
        $("#btnn").click(function(){
          var url="delete.php";
          // alert("fwer");
          $.ajax({
             type:"POST",
             url:url,
             data:msg1,
             cache:false,
             success:function(data){
                 alert(data);

             }


          });
             
        });


     });

</script>
<script type="text/javascript">
    $(document).ready(function() {
     
      
        $('#defaultForm11').bootstrapValidator({
           live:'enable',
            message: 'This value is not valid',
            submitButton: '$defaultForm11 button[type="submit"]',
            submitHandler: function (validatior, form, submitButton) {
//                   alert("wffw");
                 //  console.log("fwrefg");
   //            // return false;
            },
            container: 'tooltip',
           feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               first_name: {
                   validators: {
                         notEmpty: {
                          message: 'The first name is required and cannot be empty'
                     }
                     
                } 
            },
            last_name: {
                   validators: {
                         notEmpty: {
                          message: 'The first name is required and cannot be empty'
                     },
                      
                       regexp: {
                          regexp: /^[A-Z\s]+$/i,
                          message: 'The first name can only consist of alphabetical characters and spaces'
                     }
                } 
            },
               father_name: {
                   validators: {
                         notEmpty: {
                          message: 'The father name is required and cannot be empty'
                     },
                      regexp: {
                          regexp: /^[A-Z\s]+$/i,
                          message: 'The father name can only consist of alphabetical characters and spaces'
                     }
                } 
            },
             
            email: {
                container: 'popover',
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                     notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                }
            },
            pass: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            },
            c_pass: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The  confirm password is required and cannot be empty'
                    },
                    same: {
                        field: 'pass',
                        message: 'The confirm password can be  same as password'
                    }
                }
            },

            DOB: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The DOB is required and cannot be empty'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
      address: {
                validators: {
                    notEmpty: {
                        message: 'The Address is required'
                    }
                }
            },
      phn: {
                validators: {
                    notEmpty: {
                        message: 'The phone no  is required'
                    }, 
                    stringLength: {
                         min: 10,
                         max: 10,
                         message: 'The mobile number must be vlaid with 10  number '
                     }
                   
                }
            }


        ,
         type1: {
                validators: {
                    notEmpty: {
                        message: 'do not select to select type please choose option'
                    }
                }
            }


        }
    });

});
</script>
 <script>
  
     function checkemail()
    {
  
     var email=document.getElementById( "email" ).value;
      //alert(email);
       if(email)
     {
         $.ajax({
         type: 'post',
         url: 'email_check.php',
         data: {
         email:email,
         },
         success: function (response) {
        //  alert(response);
         $('#email_status').html(response);
           if(response=="OK") 
               {
                  return true;  
               }
               else
               {
                  return false; 
               }
             }
       });


      }
      else
      {
       $( '#email_status' ).html("");
       return false;
      }
  
  }


  function checkall()
  {
   //     var namehtml=document.getElementById("name_status").innerHTML;
        var emailhtml=document.getElementById("email_status").innerHTML;
       
     if((emailhtml)=="OK")
     {
          return true;
     }
     else
     {
          return false;
     }
  }




</script>

    <!---alidation for form -->




    <!-- END Welcome-->

    <!-- Last Added Profiles -->
    <!-- END Last Added Profiles-->

    <!-- Members Who Have Found Love -->
    <!-- END Members Who Have Found Love-->
  
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
<script type="text/javascript" src="js/bootstrapValidator.min.js"/></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->

</body>
</html>
