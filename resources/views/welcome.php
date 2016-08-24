<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My AngularJS App</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/html5-boilerplate/dist/css/normalize.css">
  <link rel="stylesheet" href="/css/html5-boilerplate/dist/css/main.css">
  <link rel="stylesheet" href="/css/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/app.css">
  <link id="linkApiRoot" href="http://dev.angularavel.com/api/v1"/>
  <script src="/css/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>
  <base href="/">
</head>
<body>
  <div class="container">
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Jokes App</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a ui-sref="auth">Auth</a></li>
            <li><a ui-sref="jokes">Jokes</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" ng-show="currentUser != null">
          <li><a href="">Welcome, {{currentUser.name}}</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a ng-click="logout()" style="cursor: pointer;">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div ui-view="jokesContent"></div>

    <div>Angular seed app: v<span app-version></span></div>
 </div>

  <!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
  -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/angular.js"></script>
  <!-- <script src="bower_components/angular-route/angular-route.js"></script> -->
  <script src="/js/angular-ui-router.js"></script>
  <script src="/js/angular-permission.js"></script>
  <script src="/js/satellizer.js"></script>
  <script src="/js/app.js"></script>
  <script src="/templates/view_auth/auth.js"></script>
  <script src="/templates/view_jokes/jokes.js"></script>
  <script src="/components/version/version.js"></script>
  <script src="/components/version/version-directive.js"></script>
  <script src="/components/version/interpolate-filter.js"></script>
</body>
</html>