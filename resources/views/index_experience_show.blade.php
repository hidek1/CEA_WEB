@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user_name }}さんの体験談</div>
                <div class="panel-body">

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection