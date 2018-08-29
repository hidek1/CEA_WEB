@extends('layout')

@section('content')
    <div class="container">
    <h2 class="form_title">代理店様情報編集</h2>
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
    
    {!! Form::model($regi_agency, ['method' => 'PATCH', 'url' => ['registration_agency', $regi_agency->id],
                'class' => 'form-horizontal']) !!}
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('agency_name', '代理店', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('agency_name', $regi_agency->agency_name, ['class' => 'form-control']) !!}

            @if ($errors->has('agency_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('agency_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
        {!! Form::label('program', 'プログラム', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-12">
            @foreach($programs as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('program', $value, $regi_agency->program == $value ? true: false) !!}
                    {{ $value }}
                </label>
            @endforeach
            @if ($errors->has('program'))
                <span class="help-block">
            <strong>{{ $errors->first('program') }}</strong>
        </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('term') ? ' has-error' : '' }}">
        {!! Form::label('term', '期間', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-12">
            @foreach($terms as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('term', $value, $regi_agency->term == $value ? true: false) !!}
                    {{ $value }}
                </label>
            @endforeach
            @if ($errors->has('term'))
                <span class="help-block">
            <strong>{{ $errors->first('term') }}</strong>
        </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('student_name', '生徒氏名', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('student_name',  $regi_agency->student_name, ['class' => 'form-control']) !!}

            @if ($errors->has('student_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('student_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('parent_name', '保護者氏名　*ファミリーキャンプのみ', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('parent_name', $regi_agency->parent_name, ['class' => 'form-control']) !!}

            @if ($errors->has('parent_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('parent_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('nationality', '国籍', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('nationality', $regi_agency->nationality, ['class' => 'form-control']) !!}

            @if ($errors->has('nationality'))
                <span class="help-block">
                    <strong>{{ $errors->first('nationality') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('student_age', '年齢(生徒)', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('student_age', $regi_agency->student_age, ['class' => 'form-control']) !!}

            @if ($errors->has('student_age'))
                <span class="help-block">
                    <strong>{{ $errors->first('student_age') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('parent_age', '年齢（保護者）　*ファミリーキャンプのみ', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('parent_age', $regi_agency->parent_age, ['class' => 'form-control']) !!}

            @if ($errors->has('parent_age'))
                <span class="help-block">
                    <strong>{{ $errors->first('parent_age') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('residence', '住所', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('residence', $regi_agency->residence, ['class' => 'form-control']) !!}

            @if ($errors->has('residence'))
                <span class="help-block">
                    <strong>{{ $errors->first('residence') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('phone_number', '電話番号', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('phone_number', $regi_agency->phone_number, ['class' => 'form-control']) !!}

            @if ($errors->has('phone_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'メールアドレス', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::email('email', $regi_agency->email, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-12" style="text-align: center;">
            {!! Form::submit('edit', ['class' => 'btn btn-primary button_width']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    </div>
  </div>
@endsection