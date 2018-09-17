@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user_name }}さんの体験談</div>
                <div class="panel-body">

                            <h5 class="sub_title4">{{ __('messages.Ex_content1') }}</h5>
                            <p>{{ $experience->best_experience }}</p>

                            <h5 class="sub_title4">{{ __('messages.Ex_content2') }}</h5>
                            <p>{{ $experience->hardest_experience }}</p>

                            <h5 class="sub_title4">{{ __('messages.Ex_content3') }}</h5>
                            <p>{{ $experience->memorable_experience }}</p>
                            <h5 class="sub_title4">{{ __('messages.Ex_content4') }}</h5>
                               <p>{{ $experience->improvement }}</p>
                            <h5 class="sub_title4">{{ __('messages.Ex_content5') }}</h5>
                                <p>{{ $experience->recommend }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection