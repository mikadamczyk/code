<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Codete</title>
 
    <link href="{{ URL::asset('assets/css/default.css') }}" rel="stylesheet">
 
    <!-- <script src="//code.jquery.com/jquery-1.9.1.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    
    
    @yield('head')
</head>
<body>
<div>
    <div class="left-col">
        <ul class="menu">
                @if (Auth::check())
                <li><a href="{{URL::to('panel')}}"><i></i>Panel</a></li>
                <li><a href="{{URL::to('logout')}}"><i></i>Wyloguj</a></li>
                @endif
            <?php //echo URL::current(); ?>    
            @foreach (User::with('gallery')->get() as $user)
                    <li><a href="{{ URL::to('gallery/'.$user->id ) }}"><i></i>{{{ $user->nick }}}_gallery</a></li>
            @endforeach
        </ul>
    </div>
    <div class="main">
            @yield('main')
    </div>
    <div class="footer">
            <!-- <img width="396" height="61" alt="logo" src="{{ URL::asset('assets/logo.png') }}" /> -->
    </div>
    
</div>    
</body>
</html>