@extends('dashboard')

@section('content')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><a href="#" target="_user"></a></h3>
        </div>
    <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
               <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
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
    </div>
 </div>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            fixedColumns: true
        });
    });

      function ConfirmDelete(){
      var x = confirm("Are you sure you want to delete?");
      if (x)
        return true;
      else
        return false;
      }
    </script>
@endsection
