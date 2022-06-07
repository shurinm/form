<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</head>
<body>
    <div class="container mt-5">
                        <a href="{{ route('login') }}">Вход в админку</a>
        <!-- Success message -->
        <form action="" method="post" action="{{ route('form.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
<div class="form-group">
                <label>Сообщение</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" name="send" value="Добавить" class="btn btn-dark btn-block">
        </form>
        <div class="container">
  <div class="row">
    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Имя</th>
          <th>Сообщение</th>
          <th>Дата</th>
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
</div>



    </div>
</body>
</html>
