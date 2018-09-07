@extends('layout')

@section('content')
  <div class="container">
    <h2 class="form_title">student survey</h2>
    <div class="make_center">
     {{-- エラーの表示 --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    {!! Form::open(['url' => 'registration_agency/confirm',
                'class' => 'form-horizontal']) !!}
    <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
        {!! Form::label('class', 'How about our English Class?', ['class' => 'col-sm-6 control-label']) !!}
        <div class="col-sm-12">
            @foreach($classes as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('class', $value) !!}
                    {{ $value }}
                </label>
            @endforeach
            @if ($errors->has('class'))
                <span class="help-block">
            <strong>{{ $errors->first('class') }}</strong>
        </span>
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-12" style="text-align: center;">
            {!! Form::submit('確認', ['class' => 'btn btn-primary button_width']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    </div>
  </div>
@endsection