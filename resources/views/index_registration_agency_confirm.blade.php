@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">代理店様お申し込み</div>
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>
 
                    <table class="table">
                        <tr>
                            <th>代理店名</th>
                            <td>{{ $regi_agency->agency_name }}</td>
                        </tr>
                        <tr>
                            <th>プログラム</th>
                            <td>{{ $regi_agency->program }}</td>
                        </tr>
                        <tr>
                            <th>期間</th>
                            <td>{{ $regi_agency->term }}</td>
                        </tr>
                        <tr>
                            <th>生徒氏名</th>
                            <td>{{ $regi_agency->student_name }}</td>
                        </tr>
                        <tr>
                            <th>保護者氏名　*ファミリーキャンプのみ</th>
                            <td>{{ $regi_agency->parent_name }}</td>
                        </tr>
                        <tr>
                            <th>国籍</th>
                            <td>{{ $regi_agency->nationality }}</td>
                        </tr>
                        <tr>
                            <th>年齢(生徒)</th>
                            <td>{{ $regi_agency->student_age }}</td>
                        </tr>
                        <tr>
                            <th>年齢（保護者）　*ファミリーキャンプのみ</th>
                            <td>{{ $regi_agency->parent_age }}</td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td>{{ $regi_agency->residence }}</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>{{ $regi_agency->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>{{ $regi_agency->email }}</td>
                        </tr>
                    </table>
 
                    {!! Form::open(['url' => 'registration_agency/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
 
                    @foreach($regi_agency->getAttributes() as $key => $value)
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