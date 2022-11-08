<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title>
    </head>

    <!-- Agregado solo para no lastimarme la vista -->
    <body style="background-color:black; color: white;">
        <h1>
            @if (Auth::User())
                {{ Auth::User()->name }}
            @endif
        </h1>
        <form method="post" action="{{ url('login/') }}">

            @csrf

            <label>
                Email:
            </label>
            <input type="email" placeholder="example@domain.com" name="email">
            <br>

            <label>
                Password:
            </label>
            <input type="password" placeholder="••••••••" name="password">
            <br>
            
            <button type="submit">
                Log In
            </button>
        </form>      
    </body>
</html>