
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Carbon Fiber Signup Form | Tutorialzine Demo</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/register/styles.css');?>" />

</head>

<body>

<div id="carbonForm">
    <h1>Signup</h1>

    <form action="<?php echo base_url('index.php/main/validation'); ?>" method="post" id="signupForm">

        <div class="fieldContainer">

            <div class="formRow">
                <div class="label">
                    <label for="name">Name:</label>
                </div>

                <div class="field">
                    <input type="text" name="name" id="name" />
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
                    <input type="password" name="pass" id="pass" />
                </div>
            </div>
            <div class="formRow">
                <div class="label">
                    <label for="re_pass">Re-Enter Password:</label>
                </div>

                <div class="field">
                    <input type="password" name="re_pass" id="re_pass" />
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
            <input type="submit" name="submit" id="submit" value="Signup" />
        </div>

    </form>

</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('scripts/Registerscript.js');?>"></script>

</body>
</html>
