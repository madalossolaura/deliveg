<header  id="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/" title="Deliveg">
            <img src="./img/logo2.jpeg" alt="Logo Deliveg" width="auto" height="40px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupportedContent" class="navbar-right collapse navbar-collapse">
            <ul class="navbar-nav" >
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="/loja" title="Loja">loja</a>
                </li>
                
                <li class="nav-item navbar-notlogged">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="link-green dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                       

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item link-green" href="/perfil">perfil</a>
                            <a class="dropdown-item link-green" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                     


                </li>
            </ul>
        </div>
    </nav>
</header>