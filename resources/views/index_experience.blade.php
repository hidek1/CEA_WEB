@extends('layout')

@section('content')
  <div class="container">
    <h2 class="form_title">体験談投稿</h2>
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
    
    {!! Form::open(['url' => 'contact/confirm',
                'class' => 'form-horizontal']) !!}

    <div class="col-sm-6 form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        {!! Form::label('body', '内容:', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
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