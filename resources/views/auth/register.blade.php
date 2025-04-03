<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reģistrēties</title>
    </head>
    <body>  
        <h1>Reģistrēties</h1>

        <form class="register" method="POST" action="/register">
            @csrf

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <label>
                Vārds:
                <input name="first_name" require>
            </label>
        
            <label>
                Uzvārds:
                <input name="last_name" require>
            </label>

            <label>
                Gmail:
                <input name="email" type="email" require>
            </label>

            <label>
                Parole:
                <input name="password" type="password" require>
                <input name="password_confirmation" type="password" require>
            </label>

            <button>Saglabāt</button>
        </form>
    </body>
</html>