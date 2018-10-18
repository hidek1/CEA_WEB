<div id="header">
  <div class="col-lg-12 text-center">
    <img src="{{ asset('images/cea_logo.png')}}" class="cea_img">
  </div>
    <div class="row nav_menu_bg" >
      <div class="nav-posi">
          <nav class="navbar navbar-expand-lg navbar-light navcustom">
            <a class="navbar-brand" href="/index_home">{{ __('messages.home') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: whitesmoke;">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="/index_camp_description">{{ __('messages.campDescription') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/index_jr_camp">{{ __('messages.JrCamp') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index_family_camp">{{ __('messages.FamilyCamp') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index_movie">{{ __('messages.videos') }}</a>
                    </li>
                    @if(isset(Auth::user()->id))
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ asset('/index_community_members')}}">{{ __('messages.community') }}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/main" title="Log in">{{ __('messages.community') }}</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/index_registration_agency">{{ __('messages.RegistrationForAgency') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index_contact">{{ __('messages.contact') }}</a>
                    </li>
                    @if (App::isLocale('ja'))
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('images/flags/ja.png') }}"  height="20px" alt=""></a>
                    </li>
                    @elseif(App::isLocale('zh-tw'))
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('images/flags/ta.png') }}"  height="20px" alt=""></a>
                    </li>
                    @elseif(App::isLocale('zh-ch'))
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('images/flags/ch.png') }}"  height="20px" alt=""></a>
                    </li>
                    @elseif(App::isLocale('vi'))
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('images/flags/vi.png') }}"  height="20px" alt=""></a>
                    </li>
                    @elseif(App::isLocale('ru'))
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('images/flags/ru.png') }}"  height="20px" alt=""></a>
                    </li>
                    @elseif(App::isLocale('ko'))
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="{{ asset('images/flags/ko.png') }}"  height="20px" alt=""></a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
      </div>
    </div>
</div>