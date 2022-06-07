@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Админ панель</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    
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
      <td class="text-center">
                <form action="{{ route('dashboard.destroy', ['id' => $message->id])}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Удалить</button>
                  </form>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection