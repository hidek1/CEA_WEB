@extends('official/dashboard')

@section('content')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><a href="#" target="_user">Add User</a></h3>
        </div>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
               <thead>
                    <tr style="background:#ccc; padding:10px;">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach($userlist as $user)
                    <tbody>
                        <tr>
                            <td>{{ str_limit(ucfirst($user->name),15,0) }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password_appear }}</td>
                            <td><a href="/user/{{ $user->id }}/edit" target="_edit"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"> Edit</span></button></a>
                            </td>
                            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['user', $user->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                                {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}</td>
                        </tr>
                    </tbody>
                 @endforeach
    </table>
    {{ $userlist->links() }}
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