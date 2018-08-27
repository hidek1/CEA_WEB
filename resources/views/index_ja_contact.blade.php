@extends('layout')

@section('content')
  <div class="container">
    <h2 class="form_title">お問い合わせフォーム</h2>
    <form action="confirm.php" method="post" name="Form1">
        <div class="form-group">
            <label>お名前　<span class="label label-danger">必須</span></label>
            <input type="text" class="form-control" placeholder="フォーム太朗" name="name" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>メールアドレス　<span class="label label-danger">必須</span></label>
            <input type="email" class="form-control" placeholder="xxxxxx@yahoo.co.jp" name="email" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <label>件名</label><br>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxA" onClick="changeDisabled()"> Jr Campについて
        </label>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxB" onClick="changeDisabled()"> family campについて
        </label>
        <label class="radio-inline">
            <input type="radio" name="subjectR" value="others" onClick="changeDisabled()"> その他(下記の件名にご記入ください)
        </label>
        <div class="form-group" style="margin-top:10px;">
            <input type="text" class="form-control" placeholder="〇〇について" name="subject" onClick="changeDisabled()">
        </div>
        <div class="form-group">
            <label>お問い合わせ内容　<span class="label label-danger">必須</span></label>
            <textarea placeholder="お問い合わせ内容" rows="10" class="form-control" name="main" required></textarea>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 make_center">
            <button type="submit" class="btn btn-warning btn-lg btn-block">送信</button>
          </div>
        </div>
    </form>
  </div>
@endsection