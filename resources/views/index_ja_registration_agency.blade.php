@extends('layout')

@section('content')
<h2 class="form_title">代理店様用</h2>
  <div class="container">
    <form action="confirm.php" method="post" name="Form1">
        <div class="form-group">
            <label>代理店　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="11111" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <label>プログラム</label><br>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxA" onClick="changeDisabled()"> ジュニアキャンプ
        </label>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxB" onClick="changeDisabled()"> ファミリーキャンプ
        </label>
        <div class="form-group">
            <label>生徒氏名　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="フォーム太朗" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>保護者氏名　<span class="label label-danger">ファミリーキャンプのみ</span></label>
            <input type="text" class="form-control" placeholder="フォーム太朗" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>国籍　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>年齢(生徒)　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="xx歳" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>年齢（保護者）　<span class="label label-danger">ファミリーキャンプのみ</span></label>
            <input type="text" class="form-control" placeholder="xx歳" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>住所　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>電話番号　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>メールアドレス　<span class="label label-danger">必須</span></label>
            <input type="email" class="form-control" placeholder="xxxxxx@yahoo.co.jp" name="email" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>値段</label>
            <label>1xxxxx 円</label>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 make_center">
            <button type="submit" class="btn btn-warning btn-lg btn-block">送信</button>
          </div>
        </div>
    </form>
  </div>
@endsection