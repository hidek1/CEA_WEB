@extends('dashboard')
 
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                    <h3 class="page-header"><a href="/index_survey">Add Survey</a></h3>
                </div>
                <!-- /.col-lg-12 -->
            
            <!-- /.row -->

    <table class="table">
        <tr style="background:#ccc; padding:10px; ">
            <th>name</th>
            <th>class</th>
            <th>class_comment</th>
            <th>teacher</th>
            <th>teacher_comment</th>
            <th>facility</th>
            <th>facility_comment</th>
            <th>activity</th>
            <th>activity_comment</th>
            <th>total</th>
            <th>total_comment</th>
            <th colspan="2">Action</th>
            
        </tr>
    @foreach($surveylist as $i =>  $survey)
        <tr>
            <td>{{ $survey->name }}</td>
            <td>{{ substr($survey->class, 0, 1) }}</td>
            <td>{{ $survey->class_comment }}</td>
            <td>{{ substr($survey->teacher, 0, 1) }}</td>
            <td>{{ $survey->teacher_comment }}</td>
            <td>{{ substr($survey->facility, 0, 1) }}</td>
            <td>{{ $survey->facility_comment }}</td>
            <td>{{ substr($survey->activity, 0, 1) }}</td>
            <td>{{ $survey->activity_comment }}</td>
            <td>{{ substr($survey->total, 0, 1) }}</td>
            <td>{{ $survey->total_comment }}</td>
            <td><a href="/survey/{{ $survey->id }}/edit"><button class="btn btn-primary">edit</button></a></td>
            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['survey', $survey->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
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