@extends('dashboard')
@section('content')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><a href="/user/create" target="_user">Add User</a></h3>
        </div>
          <table class="table ">
        <tr style="background:#ccc; padding:10px;">
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    @foreach($userlist as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password_appear }}</td>
            <td><a href="#" target="_edit"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"> Edit</span></button></a>
            </td>
            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['user', $user->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}</td>
        </tr>
    @endforeach
    </table>
    </div>
 </div>
    <script>
      function ConfirmDelete()
      {
      var x = confirm("Are you sure you want to delete?");
      if (x)
        return true;
      else
        return false;
      }
    </script>
@endsection