<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>

    <body>
        <form method="post" action="http://127.0.0.1:8000/users/">

            @csrf
            
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="lastname" name="lastname">

            <button type="submit">
                Guardar
            </button>
        </form>

    </body>
</html>