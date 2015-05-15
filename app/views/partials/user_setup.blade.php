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

<div class="partytype">

  {{-- Verify that this CONTROLLER is correct --}}
  {{ Form::open(array('action' => 'HomeController@doUserSetup', 'method' => 'post')) }}

    <h3>Choose your party type:</h3>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Child Birthday
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Adult Birthday Party
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
        Anniversary
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option4">
        Other
      </label>
    </div>
  {{ Form::close() }}

  {{ $errors->first('title', '<span class="help-block">:message</span>') }}

</div>



  {{-- Verify that this CONTROLLER is correct --}}
  {{ Form::open(array('action' => 'HomeController@doUserSetup', 'method' => 'post')) }}
  <div class="service">
    <h3>Services needed:</h3>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Catering
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Cakes, etc.
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Chairs/Tables
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Moon Bounce
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Pinatas
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Beverages
      </label>
    </div>
  </div>
  {{ Form::close() }}

</body>
</html>