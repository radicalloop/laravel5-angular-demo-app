'user strict'

angular.module('myApp', [
    //'ngRoute',
  'ui.router',
  'myApp.config',
  'myApp.jokes',
  //'myApp.view2',
  'myApp.auth',
  'myApp.version',
  'satellizer',
  'permission'
])
.config(['$stateProvider', '$urlRouterProvider', '$authProvider', 'cfg', '$locationProvider', function($stateProvider, $urlRouterProvider, $authProvider, cfg, $locationProvider) {

    $authProvider.loginUrl = cfg.apiUrl + '/authenticate';
    // $urlRouterProvider.otherwise('/view1');
    $urlRouterProvider.otherwise('/auth');

    $locationProvider.html5Mode(true);
}])
.run(function ($rootScope, $state, $auth, Permission) {
    Permission.defineRole('isloggedin', function (stateParams) {
        // If the returned value is *truthy* then the user has the role, otherwise they don't
            // console.log("isloggedin ", $auth.isAuthenticated());
            if ($auth.isAuthenticated()) {
                return true; // Is loggedin
            }
            return false;
    });

    Permission.defineRole('anonymous', function (stateParams) {
        // If the returned value is *truthy* then the user has the role, otherwise they don't
        // var User = JSON.parse(localStorage.getItem('user'));
        // console.log("anonymous ", $auth.isAuthenticated());
        if (!$auth.isAuthenticated()) {
          return true; // Is anonymous
        }
        return false;
    });

    $rootScope.logout = function() {
        $auth.logout().then(function() {
            localStorage.removeItem('user');
            $rootScope.currentUser = null;
            $state.go('auth');
        });
    }

    $rootScope.currentUser = JSON.parse(localStorage.getItem('user'));
})


angular.module('myApp.config', [])
.constant('cfg', {
    'apiUrl' : '/api/v1'
});