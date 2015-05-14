<!DOCTYPE html>

<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Pure CSS Forms CDN -->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

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

$table->string('vendor_name')->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->integer('serviceCode');
            $table->text('description');


{{-- Verify that this CONTROLLER is correct --}}
{{ Form::open(array('action' => 'HomeController@showUserSignUp', 'method' => 'post', 'class' => 'pure-form pure-form-stacked')) }}
    <fieldset>
        <legend>Create Account</legend>

        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Username">

        <label for="email">Email</label>
        <input id="email" type="email" placeholder="Email">

        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Password">

        <label for="address">Address</label>
        <input id="address" type="text" placeholder="Address">

        <label for="state">City</label>
        <input id="city" type="text" placeholder="City">

        <label for="state">State</label>
        <input id="state" type="text" placeholder="State">

        <label for="zip">ZIP</label>
        <input id="ZIP" type="text" placeholder="ZIP">

        <div class="container">
            <div class="form-group">
              <label for="description">Description of Services</label>
              <textarea class="form-control" rows="3" id="description" placeholder="Description"></textarea>
            </div>
        </div>

        <button type="submit" class="pure-button pure-button-primary">Create Account</button>
    </fieldset>
{{ Form::close() }}



{{-- Verify that this CONTROLLER is correct --}}
{{ Form::open(array('action' => 'HomeController@showVendorSignUp', 'method' => 'post')) }}
    <h3>What service do you offer?</h3>
    <div class="radio">
      <label>
        <input type="radio" name="balloons" id="balloons" value="0" checked>
        Balloons
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="catering" id="catering" value="1">
        Catering
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="dj" id="dj" value="2">
        DJ
      </label>
    </div>
{{ Form::close() }}

</body>
</html>