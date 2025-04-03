<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sākums</title>
</head>
<body>
    @auth
        <p>Sveiks, {{ Auth::user()->first_name}}</p>

        <form method="POST" action="/logout">
            @csrf
            @method("delete")

            <button>Iziet</button>
        </form>
    @endauth


    @guest
        <p>Sveiks, viesi!</p>

        <a href="/login">login</a>
    @endguest
</body>
</html>