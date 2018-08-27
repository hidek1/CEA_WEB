@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3  make_center">
            <div class="panel panel-default">
                <div class="panel-heading">メールアドレス宛にパスワードをお送りします。</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        <input type="hidden" name="token" value="">
                            <label for="email" class="col-md-8 control-label">メールアドレス</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            </div>
                        <div class="form-group"  style="padding-top: 10px">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    送信する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection