<div class="form-group">
    {!! Form::label('name','Client:') !!}
    <select class="selectpicker form-control" data-live-search="true" title="" name="client_id">
        @foreach ($clients as $client)
            <option data-subtext="{{ $client->name }}" value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('room','Room:') !!}
    <select class="selectpicker form-control" data-live-search="true"
            title="" name="room_id">
        @foreach ($rooms as $room)
            <option data-subtext="{{ $room->name }}" value="{{ $room->id }}">Room ID:{{ $room->id }}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('start_date','Start Date:') !!}
    {!! Form::date('start_date', $booking->start_date ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('start_date') ? $errors->first('start_date') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
    {!! Form::label('end_date','End Date') !!}
    {!! Form::date('end_date', $booking->end_date ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('end_date') ? $errors->first('end_date') : '' }}</span>
</div>
    <script type="text/javascript">
            var mealsByCategory = {
    country: ["America", "Canada", "New York", "Mexico"],
    B: ["Commercial Shops ", "Commercial Showrooms ", "Commercial Office/Space ", "Commercial Land/Inst. Land ","Industrial Lands/Plots "],
    C: ["Residential Apartment ", "Independent/Builder Floor ", "Independent House/Villa ", "Residential Land ", "Studio Apartment "]
}

    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in mealsByCategory[value]) {
                catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
            }
            document.getElementById("category").innerHTML = catOptions;
        }
    }
        </script>