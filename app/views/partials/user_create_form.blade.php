<!DOCTYPE html>

<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <style type="text/css">
          .partytype{
            float:left;
          }
          .service{
            float: left;
            padding-left: 40px;
          }
        </style>
</head>

<body>

{{-- Verify that this CONTROLLER is correct --}}
{{-- {{ Form::open(array('action' => 'HomeController@showUserSignUp', 'method' => 'post')) }} --}}
    <form class="pure-form pure-form-stacked">
        <fieldset>
            <legend>Create Account</legend>

            <label for="username">Username</label>
            <input id="username" type="text" placeholder="Username">

            <label for="email">Email</label>
            <input id="email" type="email" placeholder="Email">

            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password">

            <button type="submit" class="pure-button pure-button-primary">Create Account</button>
        </fieldset>
    </form>
{{ Form::close() }}

</body>

</html>
