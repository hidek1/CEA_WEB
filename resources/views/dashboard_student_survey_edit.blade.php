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
    
    {!! Form::model($survey, ['method' => 'PATCH','url' => ['survey', $survey->id],
                'class' => 'form-horizontal']) !!}
    <div class="row form_row">
        <div class="col-lg-6 form-group{{ $errors->has('class') ? ' has-error' : '' }}">
            {!! Form::label('class', 'How about our English Class?', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                @foreach($scores as $key => $value)
                    <label class="checkbox-inline survey_radio">
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

        <div class="col-lg-6 form-group{{ $errors->has('class_comment') ? ' has-error' : '' }}">
            {!! Form::label('class_comment', 'Comment *If you have', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::text('class_comment', $survey->class_comment, ['class' => 'form-control']) !!}

                @if ($errors->has('class_comment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('class_comment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row form_row">
        <div class="col-lg-6 form-group{{ $errors->has('class') ? ' has-error' : '' }}">
            {!! Form::label('teacher', 'How about our Guardian teachers and our staffs?', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                @foreach($scores as $key => $value)
                    <label class="checkbox-inline survey_radio">
                        {!! Form::radio('teacher', $value) !!}
                        {{ $value }}
                    </label>
                @endforeach
                @if ($errors->has('teacher'))
                    <span class="help-block">
                <strong>{{ $errors->first('teacher') }}</strong>
            </span>
                @endif
            </div>
        </div>
        <div class="col-lg-6 form-group{{ $errors->has('teacher_comment') ? ' has-error' : '' }}">
            {!! Form::label('teacher_comment', 'Comment *If you have', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::text('teacher_comment', $survey->teacher_comment, ['class' => 'form-control']) !!}

                @if ($errors->has('teacher_comment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('teacher_comment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row form_row">
        <div class="col-lg-6 form-group{{ $errors->has('class') ? ' has-error' : '' }}">
            {!! Form::label('facility', 'How about our facilities?', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                @foreach($scores as $key => $value)
                    <label class="checkbox-inline survey_radio">
                        {!! Form::radio('facility', $value) !!}
                        {{ $value }}
                    </label>
                @endforeach
                @if ($errors->has('facility'))
                    <span class="help-block">
                <strong>{{ $errors->first('facility') }}</strong>
            </span>
                @endif
            </div>
        </div>
        <div class="col-lg-6 form-group{{ $errors->has('facility_comment') ? ' has-error' : '' }}">
            {!! Form::label('facility_comment', 'Comment *If you have', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::text('facility_comment', null, ['class' => 'form-control']) !!}

                @if ($errors->has('facility_comment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('facility_comment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row form_row">
        <div class="col-lg-6 form-group{{ $errors->has('class') ? ' has-error' : '' }}">
            {!! Form::label('activity', 'How about our activities?', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                @foreach($scores as $key => $value)
                    <label class="checkbox-inline survey_radio">
                        {!! Form::radio('activity', $value) !!}
                        {{ $value }}
                    </label>
                @endforeach
                @if ($errors->has('activity'))
                    <span class="help-block">
                <strong>{{ $errors->first('activity') }}</strong>
            </span>
                @endif
            </div>
        </div>
        <div class="col-lg-6 form-group{{ $errors->has('activity_comment') ? ' has-error' : '' }}">
            {!! Form::label('activity_comment', 'Comment *If you have', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::text('activity_comment', null, ['class' => 'form-control']) !!}

                @if ($errors->has('activity_comment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('activity_comment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row form_row">
        <div class="col-lg-6 form-group{{ $errors->has('class') ? ' has-error' : '' }}">
            {!! Form::label('total', 'How about total experience through CEA camp?', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                @foreach($scores as $key => $value)
                    <label class="checkbox-inline survey_radio">
                        {!! Form::radio('total', $value) !!}
                        {{ $value }}
                    </label>
                @endforeach
                @if ($errors->has('total'))
                    <span class="help-block">
                <strong>{{ $errors->first('total') }}</strong>
            </span>
                @endif
            </div>
        </div>
        <div class="col-lg-6 form-group{{ $errors->has('total_comment') ? ' has-error' : '' }}">
            {!! Form::label('total_comment', 'Comment *If you have', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::text('total_comment', null, ['class' => 'form-control']) !!}

                @if ($errors->has('total_comment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('total_comment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    
    <div class="form-group">
        <div class="col-sm-12" style="text-align: center;">
            {!! Form::submit('confirm', ['class' => 'btn btn-primary button_width']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    </div>
  </div>
@endsection