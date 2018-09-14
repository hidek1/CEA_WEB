@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">体験談</div>
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>

                            <h5 class="sub_title4">CEAキャンプを通して、一番の経験は何ですか？</h5>
                            <p>{{ $experience->best_experience }}</p>

                            <h5 class="sub_title4">CEAキャンプを通して、一番の大変だった事は何ですか？</h5>
                            <p>{{ $experience->hardest_experience }}</p>

                            <h5 class="sub_title4">CEAキャンプを通して、思い出に残ったことは？</h5>
                            <p>{{ $experience->memorable_experience }}</p>
                            <h5 class="sub_title4">CEAキャンプを通して、英語力は向上しましたか？</h5>
                               <p>{{ $experience->improvement }}</p>
                            <h5 class="sub_title4">CEAキャンプをお勧めできますか？</h5>
                                <p>{{ $experience->recommend }}</p>
                    {!! Form::open(['url' => 'experience/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
                    {{Form::hidden('user_id', $user_id)}}
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
 
                    {!! Form::submit('戻る', ['name' => 'action', 'class' => 'btn']) !!}
                    {!! Form::submit('送信', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection