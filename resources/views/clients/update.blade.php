<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title>
    </head>

    <!-- Agregado solo para no lastimarme la vista -->
    <body style="background-color:black; color: white;">
        <form method="post" action=" {{ url('clients/') }} ">
            @method('PUT')
            @csrf

            <label>
                Nombre:
            </label>
            <input type="text" placeholder="Name" name="name" value="{{ $client->name }}">
            <br>

            <label>
                Email:
            </label>
            <input type="email" placeholder="example@domain.com" name="email" value="{{ $client->email }}">
            <br>

            <label>
                Phone number:
            </label>
            <input type="text" placeholder="612XXXXXXX" name="phone_number" value="{{ $client->phone_number }}">
            <br>
            
            <input type="hidden" name="id" value="{{ $client->id }}">

            <button type="submit">
                Actualizar
            </button>
        </form>      
    </body>
</html>