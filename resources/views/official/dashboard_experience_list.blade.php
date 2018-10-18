@extends('official/dashboard')
 
@section('content')
 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><a href="/index_experience" class="btn btn-primary">Add Experience</a></h3>
        </div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>name</th>
                    <th>best_experience</th>
                    <th>hardest_experience</th>
                    <th>memorable_experience</th>
                    <th>improvement</th>
                    <th>recommend</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
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