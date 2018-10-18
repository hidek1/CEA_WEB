@extends('dashboard')
@section('content')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><a href="/index_survey" class="btn btn-primary" target="survey">Add Survey</a></h3>
        </div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>name</th>
                    <th>class</th>
                    <th>class_comment</th>
                    <th>teacher</th>
                    <th>teacher_comment</th>
                    <th>facility</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($surveylist as $i =>  $survey)
                    <tr>
                        <td>{{ $survey->name }}</td>
                        <td>{{ substr($survey->class, 0, 1) }}</td>
                        <td>{{ $survey->class_comment }}</td>
                        <td>{{ substr($survey->teacher, 0, 1) }}</td>
                        <td>{{ $survey->teacher_comment }}</td>
                        <td>{{ substr($survey->facility, 0, 1) }}</td>
                        <td><a href="/survey/{{ $survey->id }}/edit"><button class="btn btn-primary">edit</button></a></td>
                        <td>{!! Form::open(['method' => 'DELETE', 'url' => ['survey', $survey->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                            {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        destroy: true,
        responsive: true,
        fixedColumns: true
    });
    $('#dataTables-example').dataTable().fnDestroy();
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