<div class="span9">

    <!-- About -->
    <div class="heading">
        <h4>Mr.Awesome</h4>
        <a id="button" href="<?php echo site_url('#/users/'.$id. '/edit'); ?>">Edit</a><br>
    </div>
    <div class="menubar links primary">
        <ul class="site">
            <li>Website:</li>
            <li><input id="site" type="url"></li>

    </div>
    <h3>About</h3>
    <textarea class="textarea"></textarea>
    <!-- // About END -->

    <form class="form" ng-repeat="user in userdata">

        <label for="Name">User Name:</label><h5>{{user.UserName}}</h5><br>
        <label for="GameName">Game Name:</label><h5>{{user.InGameName}}</h5><br>
        <label for="Cnic">Cnic:</label><h5>{{user.Cnic}}</h5><br>
        <label for="Email">Email:</label><h5>{{user.Email}}</h5><br>
        <label for="Age">Age:</label><h5>{{user.Age}}</h5><br>
        <label for="Gender">Gender:</label><h5>{{user.Gender}}</h5><br>

    </form>
</div>