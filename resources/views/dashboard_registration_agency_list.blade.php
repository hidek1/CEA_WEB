@extends('dashboard')
 
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><a href="/index_registration_agency" class="btn btn-primary" target="_blank">Add Agency</a></h3>
                </div>
                <!-- /.col-lg-12 -->
            <!-- /.row -->
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Agency Name</th>
            <th>Program</th>
            <th>Term</th>
            <th>Student Name</th>
            <th>Parent Name</th>
            <th>Nationality</th>
            <th>Student Age</th>
            <th>Parent Age</th>
            <th>Residence</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
            @foreach($angencylist as $i =>  $regi_agency)
                <tr>
                    <td>{{ str_limit(ucfirst($regi_agency->agency_name),15, 0) }}</td>
                    <td>{{ ucfirst($regi_agency->program) }}</td>
                    <td>{{ ucfirst($regi_agency->term) }}</td>
                    <td>{{ ucfirst($regi_agency->student_name) }}</td>
                    <td>{{ ucfirst($regi_agency->parent_name) }}</td>
                    <td>{{ ucfirst($regi_agency->nationality) }}</td>
                    <td>{{ ucfirst($regi_agency->student_age) }}</td>
                    <td>{{ ucfirst($regi_agency->parent_age) }}</td>
                    <td>{{ ucfirst($regi_agency->residence) }}</td>
                    <td>{{ $regi_agency->phone_number }}</td>
                    <td>{{ $regi_agency->email }}</td>
                    <td><a href="/registration_agency/{{ $regi_agency->id }}/edit"><button class="btn btn-primary">edit</button></a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => ['registration_agency', $regi_agency->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
     {{ $angencylist->links() }}
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