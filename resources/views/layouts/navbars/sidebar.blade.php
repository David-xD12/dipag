<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('/img/sidebar-1.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('Dipag Consultores') }}
        </a>
    </div>`

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Noticias') }}</p>
                </a>
            </li>
           {{--  <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('/img/laravel.svg') }}"></i>
                    <p>{{ __('Laravel Examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

          {{--  <li class="nav-item {{ ($activePage == 'table' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('/img/laravel.svg') }}"></i>
                    <p>{{ __('Tecnicos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('categories.index') }}">
                                <i class="material-icons">content_paste</i>
                                 <span class="sidebar-normal">{{ __('Categoria') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                </li>--}}
                @if (auth()->user()->hasRoles(['admin','Geren']) )
                <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('tecnico.index') }}">
                        <i class="material-icons">content_paste</i>
                        <p>{{ __('Actualizar tecnico') }}</p>
                    </a>
                </li>
                @endif
            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('historical.show', auth()->user()->id) }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Historico') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
                <a class="nav-link" href="/historical">
                    <i class="material-icons">bubble_chart</i>
                    <p>{{ __('Historico') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
                <a class="nav-link" href="/life_insurances">
                    <i class="material-icons">location_ons</i>
                    <p>{{ __('Seguros') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="/quotes">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Citas') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="/scale">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Lugar en esacalfon') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
                {{-- <a class="nav-link" href="#"> --}}
                    <i class="material-icons">language</i>
                    <p>{{ __('Audiencias') }}</p>
                </a>
            </li>

            <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
                {{-- <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}"> --}}
                    <i class="material-icons text-white">unarchive</i>
                    <p>{{ __('Vacaciones') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
