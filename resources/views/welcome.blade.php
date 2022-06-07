<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
<<<<<<< HEAD
        <form action="" method="post" action="{{ route('form.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
=======
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('form.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
>>>>>>> 50d0443dba57495da2b334dd0cd570f895826a36
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Имя
      </th>
      <th class="th-sm">Сообщение
      </th>
      <th class="th-sm">Дата
      </th>
    </tr>
  </thead>
  <tbody>
  @foreach($message as $message)
    <tr>
      <td>{{$message->name}}</td>
      <td>{{$message->message}}</td>
      <td>{{$message->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    </div>
</body>
</html>
