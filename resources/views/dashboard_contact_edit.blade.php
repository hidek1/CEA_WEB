@extends('layout')

@section('content')
  <div class="container">
    <h2 class="form_title">お問い合わせフォーム</h2>
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
    
    {!! Form::model($contact, ['method' => 'PATCH', 'url' => ['contact', $contact->id],
                'class' => 'form-horizontal']) !!}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'お名前:', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'メールアドレス:', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        {!! Form::label('type', 'お問い合わせ種類:', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            @foreach($types as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::checkbox('type[]', $value, $contact->type == $value ? 'checked' : '') !!}
                    {{ $value }}
                </label>
            @endforeach
            @if ($errors->has('type'))
                <span class="help-block">
                <strong>{{ $errors->first('type') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
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