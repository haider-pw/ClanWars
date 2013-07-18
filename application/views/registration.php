
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Clan Wars | User Registration</title>



</head>

<body>

<div id="carbonForm">
    <h1>Signup</h1>

    <?php echo form_open_multipart('users/register_user',array('id' => 'register_user','name' => 'register_user')); ?>

        <div class="fieldContainer">

            <div class="formRow">
                <div class="label">
                    <label for="name">Name:</label>
                </div>

                <div class="field">
                    <input type="text" name="UserName" id="UserName" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="game_name">Game Name:</label>
                </div>

                <div class="field">
                    <input type="text" name="game_name" id="game_name" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="age">Age:</label>
                </div>

                <div class="field">
                    <input type="text" name="age" id="age" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="cnic">Cnic Number:</label>
                </div>

                <div class="field">
                    <input type="text" name="cnic" id="cnic" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="email">Email:</label>
                </div>

                <div class="field">
                    <input type="text" name="email" id="email" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="re_email">Re-Enter Email:</label>
                </div>

                <div class="field">
                    <input type="text" name="re_email" id="re_email" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="pass">Password:</label>
                </div>

                <div class="field">
                    <input type="password" name="password" id="password" />
                </div>
            </div>
            <div class="formRow">
                <div class="label">
                    <label for="ConfirmPassword">Re-Enter Password:</label>
                </div>

                <div class="field">
                    <input type="password" name="ConfirmPassword" id="ConfirmPassword" />
                </div>
            </div>

            <div class="formRow">
                <div class="label">
                    <label for="gender">Select Gender:</label>
                </div>

                <div class="field">
                    <div class="gender">
                        Male:<input type="radio" name="gender" value="Male" checked id="gender"/>
                        Female:<input type="radio" name="gender" value="Female"/>
                    </div>
                </div>
            </div>




        </div> <!-- Closing fieldContainer -->

        <div class="signupButton">
            <input type="button" name="submit" id="submitBtn" value="Signup" />
        </div>

    <?php echo form_close(); ?>

</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#submitBtn").click(function() {
            submit_form();
        });
    });
    function  submit_form(){

        var user_n = $("#UserName").val().length;
        var user = $("#UserName").val();
        if(user == '')
        {
            //alert('Username is empty');
            fading_msg("error_message","Please enter your name");
            return;
        }
        if(user_n>0 && user_n<5)
        {
            //alert('Username must be atleast 5 characters long');
            fading_msg("error_message","Username must be atleast 5 characters long");
            return;
        }

        var g_name = $("#game_name").val();
        if(g_name == '')
        {
            fading_msg("error_message","Please enter in Game Name ");
            return;
        }

        var age = $("#age").val();
        if(age == '')
        {
            fading_msg("error_message","Please enter your age ");
            return;
        }



        var email = $("#email").val();
        var re_email = $("#re_email").val();
        if(email == '')
        {
            fading_msg("error_message","Please enter your email ");
            return;
        }

        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
        if(!pattern.test(email))
        {
            fading_msg("error_message","Please enter a valid email ");
            return;
        }

        else if(email != re_email)
        {
            fading_msg("error_message","Your email does not match");
            return;
        }


        var pass = $("#password").val();
        var c_pass = $("#ConfirmPassword").val();

        if(pass == '' || pass==null)
        {
            fading_msg("error_message","Please enter password ");
            return;
        }


        else if(pass.length<5 && pass.length>0)
        {
            fading_msg("error_message","Password must be atleast 5 characters long");
            //fading_msg("error_message","Password must be matched and Password must be atleast 5 characters long");
            return;
        }


        else if( pass!=c_pass)
        {
            fading_msg("error_message","Password must be matched");
            //fading_msg("error_message","Password must be matched and Password must be atleast 5 characters long");
            return;
        }

        $("#insert_user").ajaxSubmit({
            success: function(response){
                var data = response.split(":::")
                if(data[0] == 'error')
                {
                   fading_msg("error_message",data[1]);
                }else{
                    window.location.href = "<?php base_url('index.php/main'); ?>";
                    fading_msg("notification_message","New User is Created Successfully");
                }
            },
            error:function(xhr,error_status,error_thrown){
                //fading_msg("error_message",error_thrown);
                alert(error_thrown);
            }

        });
    } //---  End of submit_form  ---//

</script>

</body>
</html>
