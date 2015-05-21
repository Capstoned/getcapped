<!DOCTYPE html>

<html>

    <head>
        <title>Confirmation Email</title>
    </head>

    <body>
        <h2>Welcome to Party Planner, {{$first_name}}</h2>

        <div>
            Thanks for creating an account.
            Please follow the link below to view your dashboard.
            {{ URL::to('users.users-dash') }}.<br/>
        </div>

    </body>

</html>