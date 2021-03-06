@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ 'Experience story' }}</div>
                <div class="panel-body">
                    <p>Please confirm and submit.</p>

                            <h5 class="sub_title4">{{ 'What is best experience through CEA?' }}</h5>
                            <p>{{ $experience->best_experience }}</p>

                            <h5 class="sub_title4">{{ 'What is hardest experience through CEA?' }}</h5>
                            <p>{{ $experience->hardest_experience }}</p>

                            <h5 class="sub_title4">{{ 'what is memorable experience? ' }}</h5>
                            <p>{{ $experience->memorable_experience }}</p>
                            <h5 class="sub_title4">{{ 'what do you think improvement your English skills?' }}</h5>
                               <p>{{ $experience->improvement }}</p>
                            <h5 class="sub_title4">{{ 'what do you think improvement your English skills?' }}</h5>
                                <p>{{ $experience->recommend }}</p>
                    {!! Form::open(['url' => 'experience/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
                    {{Form::hidden('user_id', $user_id)}}
                    {{Form::hidden('page', $page)}}
                    @foreach($experience->getAttributes() as $key => $value)
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
 
                    {!! Form::submit('back', ['name' => 'action', 'class' => 'btn']) !!}
                    {!! Form::submit('submit', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection