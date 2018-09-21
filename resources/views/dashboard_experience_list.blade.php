@extends('dashboard')
 
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                    <h3 class="page-header"><a href="/index_experience">Add Experience</a></h3>
                </div>
                <!-- /.col-lg-12 -->
            
            <!-- /.row -->

    <table class="table table-striped table-bordered table-hover">
        <tr style="background:#ccc; padding:10px; ">
            <th>name</th>
            <th>best experience</th>
            <th>hardest experience</th>
            <th>memorable experience</th>
            <th>improvement</th>
            <th>recommend</th>
            <th colspan="2">Action</th>
            
        </tr>
    @foreach($experiencelist as $i =>  $experience)
        <tr>
            <td>{{ $experience->name }}</td>
            <td>{{ $experience->best_experience }}</td>
            <td>{{ $experience->hardest_experience }}</td>
            <td>{{ $experience->memorable_experience }}</td>
            <td>{{ $experience->improvement }}</td>
            <td>{{ $experience->recommend }}</td>
            <td><a href="/experience/{{ $experience->id }}/edit"><button class="btn btn-primary">edit</button></a></td>
            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['experience', $experience->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
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