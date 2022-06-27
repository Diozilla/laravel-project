<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Send Flowers', cursive; font-size:25px">Fashion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a  href="{{ url('/') }}" class="nav-link active"  aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a  href="{{ url('dategory') }}" class="nav-link active"  aria-current="page" href="#">category</a>
          </li>
          <li class="nav-item">
            <a  href="{{ url('viewcart') }}" class="nav-link active"  aria-current="page" href="#">Cart</a>
          </li>










          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif


                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('profile') }}
                                    </a>

                                    @if (auth()->user()->hasOneRole('admin, moderator'))
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                                            {{ __('dashboard') }}
                                        </a>

                                    @endif





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


        </ul>
      </div>
    </div>
  </nav>
