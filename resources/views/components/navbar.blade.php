<header id="header">
    <nav class="nav">
        <a href="#" class="nav__logo">AUNG MIN OO</a>
        <span id="nav__menu-icon" class="d-block d-lg-none"><i class="fas fa-align-right nav__menu-fontawesome-icon"></i></span>
        <span id="nav__menu-hide-fontawesome" class="d-none"><i class="fas fa-times"></i></span>
        <div class="nav__menu" id="nav__menu">
            <ul class="nav__list">
                <li class="nav__items">
                    <a class="nav__link active-link" href="#">home</a>
                </li>
                <li class="nav__items">
                    <a class="nav__link" href="#about">about</a>
                </li>
                <li class="nav__items">
                    <a class="nav__link" href="#qualification">qualifications</a>
                </li>
                <li class="nav__items">
                    <a class="nav__link" href="#projects">projects</a>
                </li>
                <li class="nav__items">
                    <a class="nav__link" href="#testimonials">testimonials</a>
                </li>
                <li class="nav__items">
                    <a class="nav__link" href="#contact">contact</a>
                </li>
                <li class="nav__items dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="flag-icon flag-icon-{{\Illuminate\Support\Facades\Config::get('languages')[\Illuminate\Support\Facades\App::getLocale()]['flag-icon']}}"></span>
                    </a>
                    <div class="dropdown-menu language__menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (\Illuminate\Support\Facades\Config::get('languages') as $lang => $language)
                            @if ($lang != \Illuminate\Support\Facades\App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                    <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                                    <span class="language__text">{{$language['display']}}</span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
