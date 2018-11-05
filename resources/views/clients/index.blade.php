@extends('layouts.bookingdash')

@section('title')
    Students
@endsection

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search In Students">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
@endsection

@section('content')
    <h2><i class="fa fa-users"></i>Students</h2>
    <hr>
    <a href="/clients/create" class="btn btn-primary">Create</a>
    <br><br>

    @include('errors.errors')
    <table class="table table-bordered table-hover" id="clients">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td><img src="{{ url('/uploads').'/'. $client->image }}" width="30px" class="img-thumbnail"></td>
                    <td>
                    {!! Form::open(['route'=> ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                    {!! link_to_route('clients.edit', '', [$client->id], ['class'=>'btn btn-primary btn-sm fa fa-pencil']) !!}
                    {!! link_to_route('clients.show','',[$client->id], ['class'=>'btn btn-success btn-sm fa fa-bars'])  !!}
                    {{ Form::button('<span class="fa fa-trash"></span>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("Are you sure you want to Delete?")'] )  }}
                    {!! Form::close() !!}
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <script type="text/javascript">
            /*
            $(document).ready(function(){
            $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{ url('/grocery/post') }}",
                  method: 'post',
                  data: {
                     name: $('#name').val(),
                     type: $('#type').val(),
                     price: $('#price').val()
                  },
                  success: function(result){
                     console.log(result);
                  }});
               });
            });
            */
    </script>
@endsection

@section('script')
@endsection