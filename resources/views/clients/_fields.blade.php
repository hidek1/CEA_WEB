<legend class="col-form-legend col-sm-12 text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i> Personal Details</legend>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group {{ $errors->has('typeofroom') ? 'has-error' : '' }}">
        {!! Form::label('Type of Room') !!}
        {!! Form::select('typeofroom', $roomtype,null, ['class' => 'form-control']) !!}
        <span class="text-danger">{{ $errors->has('typeofroom')  ? $errors->first('typeofroom') : ''}}</span>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
            {!! Form::label('Gender') !!}
            {!! Form::select('gender',[''=>'Select Gender','Male'=>'Male', 'Female'=>'Female'], null,['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->has('gender') ? $errors->first('gender') : '' }}</span>
        </div>
    </div>
    <div class="col-md-6">
            <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                {!! Form::label('Birthday') !!}
                {!! Form::date('birthday', $client->birthday,['class'=>'form-control datepicker', 'id'=>'birthday']) !!}
                <span class="text-danger">{{ $errors->has('birthday') ? $errors->first('birthday') : '' }}</span>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('categoryst') ? 'has-error' : '' }}">
            {!! Form::label('Category Of Students') !!}
            {!! Form::select('categoryst',$category, null,['class' => 'form-control']) !!}
            <span class="text-danger">{{ $errors->has('categoryst') ? $errors->first('categoryst') : '' }}</span>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('course') ? 'has-error' : '' }}">
            {!! Form::label('Course') !!}
            {!! Form::text('course', $client->course,['class' => 'form-control', 'placeholder' => 'Course']) !!}
            <span class="text-danger">{{ $errors->has('course') ? $errors->first('course') : '' }}</span>
        </div>
    </div>
</div>
<legend class="col-form-legend col-sm-12 text-primary"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Room </legend>
<div class="row">
<div class="col-md-6">
        <div class="form-group {{ $errors->has('reserveroom') ? 'has-error' : '' }}">
            {!! Form::label('Available Rooms') !!}
            <select name="reserveroom" class="form-control">
                @foreach($available as $avail)
                <option value="{{$avail->roomID}}">{{$avail->typeroom}}</option>
                @endforeach
            </select>
            <span class="text-danger">{{ $errors->has('reserveroom') ? $errors->first('reserveroom') : '' }}</span>
        </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
        <div class="form-group {{ $errors->has('check_in') ? 'has-error' : '' }}">
            {!! Form::label('Check In Date') !!}
            {!! Form::date('check_in', $client->checkin,['class'=>'form-control datepicker', 'id'=>'start_date']) !!}
            <span class="text-danger">{{ $errors->has('check_in') ? $errors->first('check_in') : '' }}</span>
        </div>
</div>

<div class="col-md-6">
    <div class="form-group {{ $errors->has('check_out') ? 'has-error' : '' }}">
        {!! Form::label('Check Out Date') !!}
        {!! Form::date('check_out', $client->checkout,['class'=>'form-control datepicker', 'id'=>'end_week_return']) !!}
        <span class="text-danger">{{ $errors->has('check_out') ? $errors->first('check_out') : '' }}</span>
    </div>
</div>
</div>
@if(Auth::check())
<?php  
    $id = Auth::user()->id;
?>
    {{ Form::hidden('user_id',$id) }}
@endif
