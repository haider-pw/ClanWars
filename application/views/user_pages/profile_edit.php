<div class="span9">

    <!-- About -->
    <div class="heading">
        <h4>Mr.Awesome</h4>
        <a id="button" href="#" onclick="update()" >Done</a><br>
    </div>
    <div class="menubar links primary">
        <ul class="site">
            <li>Website:</li>
            <li><input id="site" type="url"></li>

    </div>
    <h3>About</h3>
    <textarea class="textarea"></textarea>
    <!-- // About END -->
    <?php echo form_open_multipart('users/register_user',array('id' => 'register_user','name' => 'register_user')); ?>
    <form class="form" ng-repeat="user in userdata">
    <label for="Name">User Name:</label><input type="text" id="Name" ><br>
        <label for="GameName">Game Name:</label><input type="text" id="GameName" ><br>
        <label for="Cnic">Cnic:</label><input type="text" id="cnic" ><br>
        <label for="Email">Email:</label><input type="text" id="Email" ><br>
        <label for="Password">User Name:</label><input type="text" id="Password" ><br>
        <label for="Age">Age:</label><input type="text" id="Age" ><br>
        <label for="Gender">Gender:</label>
        <label class="gender" for="male">Male:</label><input style="margin-left: -100px;"   type="radio" id="male" name="gen"  >
        <label class="gender" for="female">Female:</label><input style="margin-left: -85px;" type="radio" id="female" name="gen" value="Female">
</form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#submitBtn").click(function() {
            submit_form();
        });
    });

    function  submit_form(){
        $("#register_user").ajaxSubmit({
            success: function(response){
                var data = response.split(":::")
                if(data[0] == 'error')
                {
                    fading_msg("error_message",data[1]);
                }else{
                    window.location.href = "<?php base_url('index.php/main'); ?>";
                    fading_msg("notification_message","Profile Updated Successfully");
                }
            },
            error:function(xhr,error_status,error_thrown){
                //fading_msg("error_message",error_thrown);
                alert(error_thrown);
            }

        });
    }




</script>