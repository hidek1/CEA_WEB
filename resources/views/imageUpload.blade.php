@extends('dashboard')
@section('content')
<div id="page-wrapper">
	<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Upload Image Camp</h2></div>
      <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}" style="width:250px;height:150px;">
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(array('route' => 'image.upload.post','files'=>true)) !!}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::file('file', array('class' => 'form-control')) !!}
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>	
</div>
@endsection