<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>

{{-- Form needs an action, I had to remove to get the page to render w/o redirect loops --}}
    <div class='container'>
        <h1>Sign up for an account today!</h1>
        {{ Form::open(array(
                            'method' => 'post',
                            'class' => 'pure-form')) }}
            <fieldset>
                {{ Form::label ('email_or_username', 'Email or Username')}}
            <br>
                {{ Form::text ('email_or_username', Input::old('email_or_username')) }}
            <br>
                {{ Form::label('password', 'Password') }}
            <br>
                {{ Form::password('password')}}
            <br>
                {{ Form::submit('Sign Up', array('class' => 'btn')) }}
            </fieldset>
        {{Form::close()}}
    </div>

</body>