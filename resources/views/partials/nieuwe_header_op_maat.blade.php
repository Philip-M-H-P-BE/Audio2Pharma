<header>
    <!-- Social Media Links / Basic Contact Information -->
    <div class="bg-socialmediabar">
        <div class="container">
            <div class="row py-2 align-items-center">
                <div class="col-sm-5 col-md-4"> <!-- social media icons -->
                    <ul class="list-inline mb-1 my-sm-0">
                        <li class="list-inline-item mr-xs-4 mr-md-2"><a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li> <!-- LinkedIn -->
                        <li class="list-inline-item mr-xs-4 mr-md-2"><a href="#"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a></li> <!-- Facebook -->
                        <li class="list-inline-item mr-xs-4 mr-md-2"><a href="#"><i class="fab fa-twitter-square fa-2x" aria-hidden="true"></i></a></li> <!-- Twitter -->
                        <li class="list-inline-item mr-xs-4 mr-md-2"><a href="#"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a></li> <!-- Instagram -->
                        <!-- nakijken aria-hidden="true" -->
                    </ul>
                </div>
                <div class="col-sm-7 col-md-8"> <!-- telefoonnummer en e-mailadres -->
                    <ul class="list-inline my-0 float-sm-right">
                        <li class="list-inline-item pt-3 pt-sm-0"><span class="fa fa-phone-square fa-lg">&nbsp; +32 479 13 94 43</span></li>
                        <li class="list-inline-item pt-3 pt-md-0 pl-md-2"><span class="fa fa-envelope-square fa-lg">&nbsp; info@earbalancevision.be</span></li>
                    </ul>
                </div>
            </div>  <!-- row -->
        </div>  <!-- container -->
    </div>  <!-- socialmediabar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white py-2 py-md-0"> <!-- verwijderd: shadow-sm -->
    <!-- nakijken: schaduw!!! -->
        <div class="container">
            <a class="navbar-brand d-block" href="{{ route('home-page') }}">
                <img class="d-none d-md-inline" src="{{ asset('logo/logo_groot.png') }}" alt="logo EVB"><!-- {{ config('app.name', 'Laravel') }} -->
                <img class="d-inline d-md-none" src="{{ asset('logo/logo_klein.png') }}" alt="klein logo EBV"><h4 class="d-inline-block d-md-none pl-2 mb-0 pt-1 align-middle">EBV<span class="text-muted align-middle">- slagzin</span></h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-md-column-reverse" id="navbarSupportedContent"> <!-- dflex medium weggelaten -->
                <div class="d-md-flex w-100 flex-md-no-wrap justify-content-md-between">  
                    <ul class="navbar-nav align-self-md-end" id="main-navigation"> <!-- vervangt mr-md-auto -->
                        <li class="nav-item"><a class="nav-link px-md-3" href="{{ route('home-page') }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-md-3" data-toggle="dropdown" href="#">Diensten</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Evenwicht</a>
                                <a class="dropdown-item" href="#">Oor</a>
                                <a class="dropdown-item" href="#">Oog</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Overige</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link px-md-3" href="{{ route('about-us-page') }}">Over ons</a></li>
                        <li class="nav-item"><a class="nav-link px-md-3" href="{{ route('contact-page') }}">Contact</a></li>
                    </ul>
                    <button class="d-none d-md-flex d-lg-none align-self-md-center btn btn-success" type="button" data-toggle="modal" data-target="#modalInlineForm"><span class="badge badge-pill badge-light mr-2"><img src="{{ asset('bootstrap_icons/bootstrap-icons-1.1.0/search.svg') }}" alt="Klik en open formulier"></span>Zoeken</button>
                    <form id="navbar-search-form" class="form-inline d-flex d-md-none d-lg-flex align-self-lg-center" novalidate> <!-- ml-md-auto -->
                        <input class="form-control mr-sm-3 mr-md-4 flex-grow-1" type="search" placeholder="Zoeken" aria-label="Search">
                        <button class="btn btn-outline-success mt-2 mb-1 my-sm-0" type="submit">Zoeken</button>
                    </form>
                </div>
                <!-- TEXT -->
                <hgroup class="align-self-md-start d-none d-md-block">
                    <h1 class="pt-md-2 pb-md-1 display-4">Audio<span class="display-3">2</span>Pharma</h1>
                    <!-- tagline -->
                </hgroup>                
                <!--  -->
                        <!-- mr-auto toepassen of niet? -->
                <ul class="navbar-nav align-self-md-end"> <!-- vervangt ml-auto -->
                    <li class="nav-item"><a class="nav-link add-right-border" href="#">FAQ</a></li>
                    <!-- zie eventueel originele versie voor @auth en @endauth -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link add-right-border" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link add-right-border" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link add-right-border dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->full_name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mijn account</a>
                    </li>
                </ul>
            </div>  <!-- navbar-collapse -->            
        </div>  <!-- container -->
    </nav>
</header>