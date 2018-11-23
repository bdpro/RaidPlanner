<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-laravel" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
        </button> @auth
    <a class="navbar-brand" href="\accueil">
                <img src="/img/VRTLogo.png" style="height: 39px;" />
            </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/raidplanner">Raid Planner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gearpannel">Gear Pannel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/webagencyfail">Devotion Doctrine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blogs">Rapports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profil">Profil</a>
            </li>
            <?php
                if((Auth::user()->role == '1')) 
                { 
                    $form=true;
                } 
                else 
                {
                    $form=false;
                }
                if($form)
                {
                    echo' <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/users">Users</a>
                            <a class="dropdown-item" href="#">Events</a>
                            <a class="dropdown-item" href="#">Personnages</a>
                            </div>
                            </li>';
                }
            ?>
                @endauth
            @guest
            <li>
                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
