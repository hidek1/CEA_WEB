<div class="form-group {{ $errors->has('roomnumber') ? 'has-error' : '' }}">
    {!! Form::label('roomnumber','Room Number:') !!}
    {!! Form::select('roomnumber', $room_numbers,null, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('roomnumber') ? $errors->first('roomnumber') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('typeofroom') ? 'has-error' : '' }}">
    {!! Form::label('typeofroom','Type of Room:') !!}
    {!! Form::select('typeofroom', ['Single' => 'Single', 'Double' => 'Double', 'Triple '=>'Triple', 'Quad'=> 'Quad','Fifth' =>'Fifth', 'Sixth' => 'Sixth'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
    <span class="text-danger">{{ $errors->has('typeofroom') ? $errors->first('typeofroom') : ''  }}</span>
</div>

  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
     {!!  Form::label('gender','Select Gender:') !!}<br />
     {!! Form::radio('gender', 'Female' , true) !!} Female &nbsp; &nbsp;
     {!! Form::radio('gender', 'Male' , false) !!} Male
    <span class="text-danger">{{ $errors->has('gender') ? $errors->first('gender') : ''  }}</span>
  </div>
  <div class="form-group {{ $errors->has('categorygroup') ? 'has-error' : '' }}">
     {{ Form::label('group','Select Group:') }}<br />
     {{ Form::radio('group', 'Normal' , true, array('id'=>'normal')) }} Normal &nbsp; &nbsp;
     {{ Form::radio('group', 'Family' , false, array('id'=>'family')) }} Family &nbsp; &nbsp;
     {{ Form::radio('group', 'Group' , false, array('id'=>'group')) }} Group
    <span class="text-danger">{{ $errors->has('group') ? $errors->first('group') : ''  }}</span>
  </div>
<div class="col-sm-6">
<div class="form-group start_date {{ $errors->has('start_date') ? 'has-error' : '' }}" id="start_date">
    {!! Form::label('start_date','Start Date:') !!}
    {!! Form::date('start_date', '',['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('start_date') ? $errors->first('start_date') : '' }}</span>
</div>
</div>
<div class="col-sm-6">
<div class="form-group end_date {{ $errors->has('end_date') ? 'has-error' : '' }}" id="end_date">
    {!! Form::label('end_date','End Date') !!}
    {!! Form::date('end_date', '',['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('end_date') ? $errors->first('end_date') : '' }}</span>
</div>
</div>
<div class="form-group {{ $errors->has('categoryname') ? 'has-error' : '' }}">
    {!! Form::label('categoryname','Category Name:') !!}
    {!! Form::text('categoryname',$room->categoryname,['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->has('categoryname') ? $errors->first('categoryname') : ''  }}</span>
</div>

@if(Auth::check())
<?php  
    $id = Auth::user()->id;
?>
    {{ Form::hidden('user_id',$id) }}
@endif

