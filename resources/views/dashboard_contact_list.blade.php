@extends('dashboard')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                    <h3 class="page-header"><a href="#" target="_contact">Add Contact</a></h3>
                </div>
                <!-- /.col-lg-12 -->
          <table class="table table-striped table-bordered table-hover ">
        <tr style="background:#ccc; padding:10px;">
            <th>Name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Body</th>
            <th colspan="2">Action</th>
        </tr>
    @foreach($contactlist as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->type }}</td>
            <td>{{ $contact->body }}</td>
            <td><a href="/contact/{{ $contact->id }}/edit" target="_edit"><button class="btn btn-primary">edit</button></a></td>
            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['contact', $contact->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}</td>
        </tr>
    @endforeach
    </table>
    {{ $contactlist->links() }}
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