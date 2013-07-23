angular.module('link',[],function($routeProvider, $locationProvider){
    $routeProvider.when('/login', {
        templateUrl:BASE_URL+'index.php/users/login'
    });

    $routeProvider.when('/forums', {
        templateUrl:BASE_URL+'index.php/main/default_form_view'
    });

    $routeProvider.when('/register', {
        templateUrl:BASE_URL+'index.php/main/validation_form'
    });

    $routeProvider.when('/', {
        controller:default_view,
        templateUrl:BASE_URL+'index.php/main/default_view'
    });

});

function default_view()
{
    $.include('scripts/js_library.js')

}
        /* awShowcase --> End */


