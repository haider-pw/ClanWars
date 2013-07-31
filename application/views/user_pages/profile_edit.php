<div class="span9" ng-controller="controller">

    <!-- About -->
    <div class="heading">
        <h4>Mr.Awesome</h4>
        <a id="button" href="#" ng-click="update()" >Done</a><br>
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

        <label for="Name">User Name:</label><input type="text" id="Name" ng-model="user.UserName"><br>
        <label for="GameName">Game Name:</label><input type="text" id="GameName" ng-model="user.InGameName"><br>
        <label for="Cnic">Cnic:</label><input type="text" id="cnic" ng-model="user.Cnic"><br>
        <label for="Email">Email:</label><input type="text" id="Email" ng-model="user.Email"><br>
        <label for="Password">User Name:</label><input type="text" id="Password" ng-model="user."><br>
        <label for="Age">Age:</label><input type="text" id="Age" ng-model="user.Age"><br>
        <label for="Gender">Gender:</label>
        <label class="gender" for="male">Male:</label><input style="margin-left: -100px;"   type="radio" id="male" name="gen" ng-model="user.Gander" >
        <label class="gender" for="female">Female:</label><input style="margin-left: -85px;" type="radio" id="female" name="gen" ng-model="user.Gender" value="Female">

    </form>
</div>

<script>

    function controller ($scope,$http)
    {
        var formupdate="<?php echo base_url('index.php/users/update_profile'); ?>"
        $scope.update=function()
        {
            $http.post(formupdate, $scope.userdata);
        }
    }
</script>