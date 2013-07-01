<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Codete</title>
 
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
 
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
<div>
    <div class="left-col">
<ul>
                <li><a href="/panel"><i></i>Panel</a></li>
                @if (Auth::check())
                <li><a href="/logout"><i></i>Wyloguj</a></li>
                @endif
                <li><a href="/panel"><i></i>Panel</a></li>
                
            @foreach (User::with('gallery')->get() as $user)
                    <li><a href="/gallery/{{{ $user->id }}}"><i></i>{{{ $user->nick }}}</a></li>
            @endforeach
</ul>
    
    </div>
    <div class="main">
            <h1>Laravel Logs</h1>

            @yield('main')
    
    </div>
    <div class="footer">
            <h1>Laravel Logs</h1>

            @yield('footer')
    
    </div>
    
</div>    
</body>
</html>