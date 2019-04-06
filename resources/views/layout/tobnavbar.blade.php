<form class="navbar-form">
    {{--<div class="input-group no-border">--}}
        {{--<input type="text" value="" class="form-control" placeholder="Search...">--}}
        {{--<button type="submit" class="btn btn-white btn-round btn-just-icon">--}}
            {{--<i class="material-icons">search</i>--}}
            {{--<div class="ripple-container"></div>--}}
        {{--</button>--}}
    {{--</div>--}}
</form>
<ul class="navbar-nav">
    @login
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <span>{{$user->personaName}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{getRoute('profile')}}">Twoje rekordy</a>
                <a target="_blank" class="dropdown-item" href="{{$user->profileUrl}}">Profil steam</a>
              <a class="dropdown-item" href="{{route('auth.steam.logout')}}">Wyloguj się</a>
            </div>
        </li>
    @logout
        <li class="nav-item">
            <a class="nav-link" href="{{route('auth.steam')}}">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                    Zaloguj się
                </p>
            </a>
      </li>
    @end
</ul>