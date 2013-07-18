<!-- Primary Page Layout -->

<div class="container">

    <div class="form-bg">
        <form method="post" action="<?php echo base_url('index.php/users/login_user');?>">
            <h2>Login</h2>
            <p><input type="text" name="UserName" placeholder="Username"></p>
            <p><input type="password" name="Password" placeholder="Password"></p>
            <label for="remember">
                <input type="checkbox" id="remember" value="remember" />
                <span>Remember me on this computer</span>
            </label>
            <button type="submit"></button>
            <form>
    </div>


    <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


</div><!-- container -->
