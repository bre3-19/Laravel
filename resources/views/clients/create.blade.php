<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title>
    </head>

    <!-- Agregado solo para no lastimarme la vista -->
    <body style="background-color:black; color: white;">
        <form method="post" action="http://127.0.0.1:8000/clients/">

            @csrf

            <label>
                Nombre:
            </label>
            <input type="text" placeholder="Name" name="name">
            <br>

            <label>
                Email:
            </label>
            <input type="email" placeholder="example@domain.com" name="email">
            <br>

            <label>
                Phone number:
            </label>
            <input type="text" placeholder="612XXXXXXX" name="phone_number">
            <br>
            
            <button type="submit">
                Guardar
            </button>
        </form>      
    </body>
</html>