
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


<div class="partytype">

  {{-- Verify that this CONTROLLER is correct --}}
  {{ Form::open(array('action' => 'HomeController@doUserSetup', 'method' => 'post')) }}

    <h3>Choose your party type:</h3>
    <div class="radio">
      <label>
        <input type="radio" name="childBday" id="childBday" value="0" checked>
        Child Birthday
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="anniversary" id="anniversary" value="1">
        Anniversary
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="adultBday" id="adultBday" value="2">
        Adult Birthday
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="other" id="other" value="3">
        Other
      </label>
    </div>
  {{ Form::close() }}
</div>


{{-- Verify that this CONTROLLER is correct --}}
  {{ Form::open(array('action' => 'HomeController@doUserSetup', 'method' => 'post')) }}
  <div class="service">
    <h3>Services needed:</h3>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="0">
        Balloons
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="1">
        Catering
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="2">
        DJ
      </label>
    </div>
  </div>
  {{ Form::close() }}

  </body>
</html>