<!DOCTYPE HTML>

<html>

<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>

{{ Form::open(array('action' => 'HomeController@tryLogin',
                    'method' => 'post',
                    'class' => 'pure-form')) }}
<fieldset>
    {{Form::label('userType', "Select Login Type")}}
    <br>
    {{Form::radio('userType', "Customer")}}
    <br>
    {{Form::radio('userType', "Vendor")}}
    <br>
    {{ Form::label ('email_or_username', 'Email or Username')}}
    <br>
    {{ Form::text ('email_or_username', Input::old('email_or_username')) }}
    <br>
    {{ Form::label('password', 'Password') }}
    <br>
    {{ Form::password('password')}}
    <br>
    {{ Form::submit('Submit', array('class' => 'btn')) }}
</fieldset>
{{Form::close()}}


</body>

</html>