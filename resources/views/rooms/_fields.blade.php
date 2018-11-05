<div class="form-group {{ $errors->has('roomnumber') ? 'has-error' : '' }}">
    {!! Form::label('roomnumber','Room Number:') !!}
    {!! Form::select('roomnumber', $room_numbers, null, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('roomnumber') ? $errors->first('roomnumber') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('typeofroom') ? 'has-error' : '' }}">
    {!! Form::label('typeofroom','Type of Room:') !!}
    {!! Form::select('typeofroom', ['' => 'Select Room','Single' => 'Single', 'Double' => 'Double', 'Triple '=>'Triple', 'Quad'=> 'Quad','Fifth' =>'Fifth', 'Sixth' => 'Sixth'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Select Room Type']) !!}
    <span class="text-danger">{{ $errors->has('typeofroom') ? $errors->first('typeofroom') : ''  }}</span>
</div>

  <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
     {!!  Form::label('gender','Select Gender:') !!}<br />
     {!! Form::radio('gender', 'Female' , false) !!} Female &nbsp; &nbsp;
     {!! Form::radio('gender', 'Male' , false) !!} Male
    <span class="text-danger">{{ $errors->has('gender') ? $errors->first('gender') : ''  }}</span>
  </div>




@if(Auth::check())
<?php  
    $id = Auth::user()->id;
?>
    {{ Form::hidden('user_id',$id) }}
@endif

