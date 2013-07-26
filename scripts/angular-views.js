var myapp = angular.module('link', ["ui.state"])
myapp.config(function ($stateProvider, $routeProvider) {

        $stateProvider
            .state('index', {
                url: "",
                abstract:true,
                templateUrl: BASE_URL + 'index.php/main/default_view',
                controller: default_view
            })

            .state('login', {
                url: "/login",
                views: {
                    "": {
                        templateUrl: BASE_URL + 'index.php/users/login'              }
                }
            })

            .state('register', {
                url: "/register",
                views: {
                    "": {
                        templateUrl: BASE_URL + 'index.php/main/validation_form'                }
                }
            })

            .state('forums', {
                url: "/forums",
                views: {
                    "": {
                        templateUrl: BASE_URL + 'index.php/main/default_form_view'                }
                }
            })

            .state('users', {
                url: "/users",
                abstract:"true",
                templateUrl: BASE_URL + 'index.php/users/user_profile_view',
            })
            .state('users.list', {
                url: '',
                templateUrl: BASE_URL + 'index.php/users/profile_view'
            })
    }
);
myapp.run(function($rootScope,   $state,   $stateParams){
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
});

function default_view() {
    $.include('scripts/js_library.js')

}


//angular.module('link',[],function($routeProvider, $locationProvider){
//    $routeProvider.when('/login', {
//        templateUrl:BASE_URL+'index.php/users/login'
//    });
//
//    $routeProvider.when('/forums', {
//        templateUrl:BASE_URL+'index.php/main/default_form_view'
//    });
//
//    $routeProvider.when('/register', {
//        templateUrl:BASE_URL+'index.php/main/validation_form'
//    });
//
//    $routeProvider.when('/users', {
//        templateUrl:BASE_URL+'index.php/users/user_profile_view'
//    });
//
//    $routeProvider.when('/', {
//        controller:default_view,
//        templateUrl:BASE_URL+'index.php/main/default_view'
//    });
//
//});
//
//function default_view()
//{
//    $.include('scripts/js_library.js')
//
//}
//        /* awShowcase --> End */
//
//
