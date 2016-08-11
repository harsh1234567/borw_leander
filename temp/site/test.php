<html>
<head>

<script src="../../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"/></script>

<script language="javascript" type="text/javascript">
        $(document).ready(function() {
            $("#form2").validate({
                rules: {

                    'useremail': {// compound rule
                        required: true,
                        email: true,



                        remote:{


                            url: "check_email.php",
                            type: "post",

                            data:
                            {
                                emails: function()
                                {
                                    return $('#singupfrom :input[name="useremail"]').val();
                                }
                            }


                        }
                    }

                },
                  // here custom message for email already exists
                 messages: {
                    useremail: { remote: "Email already exists"}

                }

            });

        });
    </script>
</head>
<body>
  <form method="post" id="form2">
 <label>Email :</label>
                                <input type="text" name="useremail" id="useremail" value=""  />

                                <button name="submit" id="submt" >submit</button>
</body>
</html>

    <!-- your user email end -->