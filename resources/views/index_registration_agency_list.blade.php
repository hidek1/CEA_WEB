@extends('dashboard')
 
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agency</h1>
                </div>
                <!-- /.col-lg-12 -->
            
            <!-- /.row -->
       
    <table class="table ">
        <tr>
            <th>agency_name</th>
            <th>program</th>
            <th>term</th>
            <th>student_name</th>
            <th>parent_name</th>
            <th>nationality</th>
            <th>student_age</th>
            <th>parent_age</th>
            <th>residence</th>
            <th>phone_number</th>
            <th>email</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    @foreach($regi_agencys  $regi_agency)
        <tr>
            <td>{{ $regi_agency->agency_name }}</td>
            <td>{{ $regi_agency->program }}</td>
            <td>{{ $regi_agency->term }}</td>
            <td>{{ $regi_agency->student_name }}</td>
            <td>{{ $regi_agency->parent_name }}</td>
            <td>{{ $regi_agency->nationality }}</td>
            <td>{{ $regi_agency->student_age }}</td>
            <td>{{ $regi_agency->parent_age }}</td>
            <td>{{ $regi_agency->residence }}</td>
            <td>{{ $regi_agency->phone_number }}</td>
            <td>{{ $regi_agency->email }}</td>
            <td><a href="/registration_agency/{{ $regi_agency->id }}/edit"><button class="btn btn-primary">edit</button></a></td>
            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['registration_agency', $regi_agency->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
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