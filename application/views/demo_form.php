<html ng-app>
<head>
    <title></title>
    <script src="http://localhost/projects/ClanWars/scripts/angular.min.js" type="text/javascript"></script>
</head>
<body>
<div ng-controller="TodoCtrl">
<form>
    <h1>{{Message}}</h1>
    <input type="text" name="UserName" ng-model="user.UserName">
    <input type="text" ng-model="user.LastName" placeholder="LastName">

    <input type="button" ng-click="save()" value="submit">
</form>
</div>
<script>
     function TodoCtrl($scope, $http){
        var InsertURL = "<?php echo base_url() ?>welcome/insert";
         $scope.user = {};
         $scope.Message = "Username Below";
        $scope.save = function(){
            $http({
                method: 'POST',
                url: InsertURL,
                data: $scope.user
            }).
                success(function(data, status, headers, config) {
                    // this callback will be called asynchronously
                    // when the response is available
                }).
                error(function(data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
        }
    }
</script>
</body>
</html>