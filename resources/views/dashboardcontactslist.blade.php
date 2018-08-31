@extends('dashboard')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                    <h3 class="page-header"><a href="/contact/create" target="_contact">Add Contact</a></h3>
                </div>
                <!-- /.col-lg-12 -->
          <table class="table ">
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
            <td><a href="/registration_agency/{{ $contact->id }}/edit" target="_edit"><button class="btn btn-primary">edit</button></a></td>
            <td><a href="/registration_agency/{{ $contact->id }}/delete"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
    @endforeach
    </table>
    </div>
</div>
    
@endsection