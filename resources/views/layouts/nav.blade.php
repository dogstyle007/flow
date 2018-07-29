<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<span><a class="navbar-brand" href="/"><img src="{{ asset('logo.png') }}" width="90px" height="90px" style="border-radius:10px; padding:5px;">Old Vandals Association</a></span>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
 
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
    @guest
    <li class="nav-item">
        <a class="nav-link btn btn-info" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __(' Login') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-info" href="{{ route('register') }}"><i class="fas fa-arrow-alt-circle-right"></i>{{ __(' Register') }}</a>
    </li>
    @else
    <li class="active">
         <a class="nav-link" href="/" ><i class="fas fa-home"></i>Home</a>
    </li>
    
     <li>
        <a class="nav-link" href="{{ route('discussion') }}" ><i class="fas fa-newspaper"></i>News</a>
    </li>

    <li> 
        <a class="nav-link" href="/members" ><i class="fas fa-users"></i>Members</a>
    </li>
    <li class="welcome nav-link" >
        Welcome, {{ Auth::user()->fullname}}
    </li>
    <li class="nav-item dropdown"> 
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre  style="position:relative; padding-left:50px;">
          <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">  
            Profile <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

    @if( Auth::user()->admin == 1 )

    <a class="nav-link" href="{{ route('admin.home') }}" ><i class="fas fa-tachometer-alt"></i> Admin Dashboard</a>

    @endif

            <a class="dropdown-item" href="/dashboard" ><i class="fas fa-user-tag"></i> Dashboard</a>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
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
