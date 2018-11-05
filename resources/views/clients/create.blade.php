@extends('layouts.bookingdash')

@section('title')
    Details
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2><i class="fa fa-users"></i>Add </h2>
            <hr>

            @include('errors.errors')

            {{ Form::open(['url' => 'clients','files'=>true]) }}
            @include('clients._fields')
            <div class="form-group">
                {{ Form::submit('Register', ['class'=>'btn btn-primary']) }}
                <a href="/clients" class="btn btn-success">View Student</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <script type="text/javascript">
       
        var mealsByCategory = {
        available: ["101", "102", "103", "104", "105"],
        na: ["Commercial Shops ", "Commercial Showrooms ", "Commercial Office/Space ", "Commercial Land/Inst. Land ","Industrial Lands/Plots "],
        C: ["Residential Apartment ", "Independent/Builder Floor ", "Independent House/Villa ", "Residential Land ", "Studio Apartment "]
        }
     
    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in mealsByCategory[value]) {
                catOptions += "<option value="+mealsByCategory[value][categoryId]+">" + mealsByCategory[value][categoryId]+"</option>";
            }
            document.getElementById("category").innerHTML = catOptions;
        }
    }
        </script>
@endsection
