@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('messages.Re_confirm_title') }}</div>
                <div class="panel-body">
                    <p>{{ __('messages.form_confirm') }}</p>
 
                    <table class="table">
                        <tr>
                            <th>{{ __('messages.Re_content1') }}</th>
                            <td>{{ $regi_agency->agency_name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content2') }}</th>
                            <td>{{ $regi_agency->program }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content3') }}</th>
                            <td>{{ $regi_agency->term }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content4') }}</th>
                            <td>{{ $regi_agency->student_name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content5') }}</th>
                            <td>{{ $regi_agency->parent_name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content6') }}</th>
                            <td>{{ $regi_agency->nationality }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content7') }}</th>
                            <td>{{ $regi_agency->student_age }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content8') }}</th>
                            <td>{{ $regi_agency->parent_age }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content9') }}</th>
                            <td>{{ $regi_agency->residence }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content10') }}</th>
                            <td>{{ $regi_agency->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('messages.Re_content11') }}</th>
                            <td>{{ $regi_agency->email }}</td>
                        </tr>
                    </table>
 
                    {!! Form::open(['url' => 'registration_agency/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
 
                    @foreach($regi_agency->getAttributes() as $key => $value)
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
 
                    {!! Form::submit( __('messages.back') , ['name' => 'action', 'class' => 'btn']) !!}
                    {!! Form::submit( __('messages.submit') , ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection