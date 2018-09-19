@extends('layout')

@section('content')
  <div class="container">
    <h2 class="form_title">{{ __('messages.Ex_confirm_title') }}</h2>
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
    
    {!! Form::open(['url' => 'experience/confirm',
                'class' => 'form-horizontal']) !!}
    {{Form::hidden('page', $page)}}
    <div class="row">
        <div class="col-sm-6 form-group{{ $errors->has('best_experience') ? ' has-error' : '' }}">
            {!! Form::label('best_experience', __('messages.Ex_content1'), ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::textarea('best_experience', null, ['class' => 'form-control']) !!}
                @if ($errors->has('best_experience'))
                    <span class="help-block">
                        <strong>{{ $errors->first('best_experience') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('hardest_experience') ? ' has-error' : '' }}">
            {!! Form::label('hardest_experience', __('messages.Ex_content2'), ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::textarea('hardest_experience', null, ['class' => 'form-control']) !!}
                @if ($errors->has('hardest_experience'))
                    <span class="help-block">
                        <strong>{{ $errors->first('hardest_experience') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group{{ $errors->has('memorable_experience') ? ' has-error' : '' }}">
            {!! Form::label('memorable_experience', __('messages.Ex_content3'), ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::textarea('memorable_experience', null, ['class' => 'form-control']) !!}
                @if ($errors->has('memorable_experience'))
                    <span class="help-block">
                        <strong>{{ $errors->first('memorable_experience') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('improvement') ? ' has-error' : '' }}">
            {!! Form::label('improvement', __('messages.Ex_content4'), ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::textarea('improvement', null, ['class' => 'form-control']) !!}
                @if ($errors->has('improvement'))
                    <span class="help-block">
                        <strong>{{ $errors->first('improvement') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group{{ $errors->has('recommend') ? ' has-error' : '' }}">
            {!! Form::label('recommend', __('messages.Ex_content5'), ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
                {!! Form::textarea('recommend', null, ['class' => 'form-control']) !!}
                @if ($errors->has('recommend'))
                    <span class="help-block">
                        <strong>{{ $errors->first('recommend') }}</strong>
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