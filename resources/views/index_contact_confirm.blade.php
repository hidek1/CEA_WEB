@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('messages.Con_confirm_title') }}</div>
                <div class="panel-body">
                    <p>{{ __('messages.form_confirm') }}</p>
 
                    <table class="table">
                        <tr>
                            <th>{{ __('messages.Con_content1') }}</th>
                            <td>{{ $type }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Con_content2') }}</th>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Con_content3') }}</th>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Con_content4') }}</th>
                            <td>{{ $contact->body }}</td>
                        </tr>
                    </table>
                    {!! Form::open(['url' => 'contact/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
 
                    @foreach($contact->getAttributes() as $key => $value)
                        @if(isset($value))
                            @if(is_array($value))
                                @foreach($value as $subValue)
                                    <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                                @endforeach
                            @else
                                {!! Form::hidden($key, $value) !!}
                            @endif
 
                        @endif
                    @endforeach
 
                    {!! Form::submit(__('messages.back'), ['name' => 'action', 'class' => 'btn']) !!}
                    {!! Form::submit(__('messages.submit'), ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection