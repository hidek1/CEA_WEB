@extends('layout_main')
@section('content')
    <div id="content">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center" style="background-color:#34324b; padding-top:10px; border-radius:10px;">
                            <a href="#" target="_english_cea"><img src="{{ asset('images/ceabldg.jpg') }}" class="ceabldg_img"></a>
                            <div class="row pa_20px">
                                <div class="col-sm-4">
                                    <img src="{{ asset('images/cea_logo.png') }}" class="cea20px">
                                </div>
                                <div class="col-sm-7">
                                    <p class="font_c_w text-left"><strong>Academy</strong>&nbsp;please click your country.</p>
                                 <div class="c_box_01">
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ja.png') }}" style="width: 40px;"></div><div class="left"><a href="http://cea.asia/" class="bt" target="_english_cia">Japan</a></div></div>
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ta.png') }}" style="width: 40px;"></div><div class="left"><a href="http://cea.asia/tw/" class="bt" target="_taiwan_cia">Taiwan</a></div></div>
                                  </div>
                                   <div class="c_box_01">
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ru.png') }}" style="width: 40px;"></div><div class="left"><a href="http://cea.asia/ru/" class="bt" target="_english_cia">Russian</a></div></div>
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ch.png') }}" style="width: 40px;"></div><div class="left"><a href="#" class="bt" target="_taiwan_cia">China</a></div></div>
                                  </div>
                                   <div class="c_box_01">
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/vi.png') }}" style="width: 40px;"></div><div class="left"><a href="http://cea.asia/vn/" class="bt" target="_english_cia">Vietnum</a></div></div>
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ko.png') }}" style="width: 40px;"></div><div class="left"><a href="http://cea.asia/kr/" class="bt" target="_taiwan_cia">Korea</a></div></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center" style="background-color:#c1c1c1; padding-top:10px; border-radius:10px;">
                            <img src="{{ asset('images/juniorgroup.jpg') }}" class="ceabldg_img">
                            <div class="row pa_20px">
                                <div class="col-sm-4">
                                    <img src="{{ asset('images/cea_logo.png') }}" class="cea20px">
                                </div>
                                <div class="col-sm-7">
                                    <p class="font_c_w text-left"><strong>Camp</strong>&nbsp;please click your country.</p>
                                 <div class="c_box_01">
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ja.png') }}" style="width: 40px;"></div><div class="left"><a href="{{ route('lang.switch', "ja") }}" class="bt" target="_english_cia">Japan</a></div></div>
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ta.png') }}" style="width: 40px;"></div><div class="left"><a href="{{ route('lang.switch', "zh-tw") }}" class="bt" target="_taiwan_cia">Taiwan</a></div></div>
                                  </div>
                                   <div class="c_box_01">
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ru.png') }}" style="width: 40px;"></div><div class="left"><a href="{{ route('lang.switch', "ru") }}" class="bt" target="_english_cia">Russian</a></div></div>
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ch.png') }}" style="width: 40px;"></div><div class="left"><a href="{{ route('lang.switch', "zh-ch") }}" class="bt" target="_taiwan_cia">China</a></div></div>
                                  </div>
                                   <div class="c_box_01">
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/vi.png') }}" style="width: 40px;"></div><div class="left"><a href="{{ route('lang.switch', "vi") }}" class="bt" target="_english_cia">Vietnum</a></div></div>
                                      <div class="left_50"><div class="left_pr10"><img src="{{ asset('images/flags/ko.png') }}" style="width: 40px;"></div><div class="left"><a href="{{ route('lang.switch', "ko") }}" class="bt" target="_taiwan_cia">Korea</a></div></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection