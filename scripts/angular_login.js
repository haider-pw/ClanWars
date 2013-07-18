angular.module('link',[],function($routeProvider, $locationProvider){
    $routeProvider.when('/login', {
        templateUrl:BASE_URL+'index.php/users/login'
    });

    $routeProvider.when('/register', {
        templateUrl:BASE_URL+'index.php/main/validation_form'
    });

    $routeProvider.when('/', {
        templateUrl:BASE_URL+'index.php/main/default_view'
    });
});
