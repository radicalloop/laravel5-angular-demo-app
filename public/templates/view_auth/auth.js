angular.module('myApp.auth', ['myApp.config'])

.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
  $stateProvider
  .state('auth', {
    url: '/auth',
    data: {
        permissions: {
          except: ['isloggedin'],
          redirectTo: 'jokes'
        }
    },
    views: {
      'jokesContent': {
        templateUrl: "/templates/view_auth/auth.html",
        controller: 'AuthCtrl as auth'
      }
    }
  })
}])

.controller('AuthCtrl', ['$auth', '$state', '$http', '$rootScope', 'cfg', function($auth, $state, $http, $rootScope, cfg) {

    var vm = this;

    vm.signInBtnTxt = 'Sign In';
    vm.loginError   = false;
    vm.loginErrorText;

    vm.login = function() {

        vm.signInBtnTxt = 'Sign In...';

        var credentials = {
            email: vm.email,
            password: vm.password
        }

        $auth.login(credentials).then(function() {
            console.log(cfg);
            $http.get(cfg.apiUrl + '/authenticate/user').success(function(response){
                var user = JSON.stringify(response.user);
                localStorage.setItem('user', user);
                $rootScope.currentUser = response.user;
                $state.go('jokes');
            })
            .error(function(error){
                vm.loginError = true;
                vm.loginErrorText = error.data.error;
                console.log(vm.loginErrorText);
            })
        });
    }
}])