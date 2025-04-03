<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>  
        <h1>Login</h1>

        <form method="POST" action="/login">
            @csrf

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        
            <label>
                Gmail:
                <input name="email" type="email" require>
            </label>

            <label>
                Parole:
                <input name="password" type="password" require>
                <input name="password_confirmation" type="password" require>
            </label>

            <button>Ieiet</button>
        </form>
    </body>
</html>