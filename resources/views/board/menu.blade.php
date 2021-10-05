<style>
.containerMenuboard{
    display: flex;
        flex-direction: row ;
        flex-wrap: wrap ;
        width: 10%;
        justify-content: space-around ;

}
.boxmenu{
margin-bottom: 2.5%;
}
#app{

    position:absolute;
top:0;
position: fixed;
width:100%;
}
#appName{
    color: #3490dc;
    font-weight: bold;

}
#containerInfo2{

    color: #3490dc;
}
#containerInfo{
    margin-right: 5%;
    color: #3490dc;
}
</style>
<div class="boxmenu">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="containerMenuboard">

                <div>
                    <a href="@route('board.index')"><i class="fas fa-home fa-2x"></i></a></li>
                </div>
                <div>
                    <a href="@route('profil.index')"><i class="fas fa-user-circle fa-2x"></i> </a>
                </div>

        </div>

        <div class="container">

            <div class="navbar-brand" id="appName" >
              <h2>  {{ config('app.name', 'Laravel') }}</h2>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                <div class="navbar-brand" id="ContainerInfo2" >  {{ Auth::user()->lastname }}</div>
                               <div class="navbar-brand" id="containerInfo" >  {{ Auth::user()->firstname }}</div>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                   <i class="fas fa-sign-out-alt "></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


</div>
</div>
