<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>

    <body ng-app="">
        <form action="login" method="post" name="login_form" novalidate>
            <input type="text" name="user_name" ng-model="user_name" ng-minlength="5" required /><br />
            <span ng-show="login_form.user_name.$touched && login_form.user_name.$invalid" class="ng-touched ng-invalid">The username is invalid.<br/></span>
            <input type="password" name="user_pass" ng-model="user_pass" ng-minlength="5" required/><br />
            <span ng-show="login_form.user_pass.$touched && login_form.user_pass.$invalid" class="ng-touched ng-invalid">The password is invalid.<br/></span>
            {{@csrf_field()}}
            <button type="submit" ng-disabled="login_form.$invalid">Login</button>
        </form>
    </body>
</html>
