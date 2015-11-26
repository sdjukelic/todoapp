<!DOCTYPE html>
<html>

<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">

      </div>
      <div id="background" class="col-sm-4">
        <h1>Delete task</h1>
        <p>Click button below to delete task</p>
      </div>
      <div class="col-sm-4">

      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">

      </div>
      <div class="col-sm-4">
        <a class="btn btn-primary" href="{{ URL::to('page1') }}">Back</a>
        <form action="delete/{{ $task->id }}" method="post">
          {{ $task->task }}
          <input type="checkbox" checked="true" disabled="true">
          <input class="btn btn-primary" type="submit" value="Delete task">
        </form>
      </div>
      <div class="col-sm-4">

      </div>
    </div>
  </div>
</body>

</html>

<style type="text/css">
  #background {
    background-color: lightblue;
    text-align: center;
  }
  
  body {
    background-color: gainsboro;
    font-style: arial;
  }
  
  #border {
    border: double;
    border-color: 1px black solid;
  }
</style>