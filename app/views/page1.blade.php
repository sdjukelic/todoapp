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
        <h1>To do list</h1>
        <p>Here you can see your tasks and add new one</p>
      </div>
      <div class="col-sm-4">

      </div>
    </div>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class=" col-sm-4">
        <a class="btn btn-primary" href="{{ URL::to('new')}}">New task</a>
        <a class="btn btn-primary" href="{{ URL::to('done')}}">Completed tasks</a>
        <a class="btn btn-primary" href="{{ URL::to('undone')}}">Incomplited tasks</a>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <div class="row">
      <div class="col-sm-4">

      </div>
      <div id="border" class="col-sm-4">
        <table>
          <tr>
            @foreach($table as $task) @if($task->check==0)
            <td width="auto">
              {{ $task->task}}
            </td>
            <td width="10%"></td>
            <td width="auto">
              <form action="update/{{ $task->id }}" method="post">
                <input name="check_box" type="checkbox" onChange="this.form.submit()" />
              </form>
            </td>
          </tr>
          @else
          <tr>
            <td width="auto">
              <a href="deleteform/{{ $task->id }}">{{ $task->task}}</a>
            </td>
            <td width="10%"></td>
            <td width="auto">
              <input type="checkbox" checked disabled="true" />
            </td>
          </tr>
          @endif @endforeach
        </table>
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