<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title>
    </head>

    <!-- Agregado solo para no lastimarme la vista -->
    <body style="background-color:black; color: white;">
        <h3>
            Clientes
        </h3>   

        <table>
            <thead>
                #
            </thead> 
            <thead>
                Name
            </thead> 
            <thead>
                Email
            </thead> 
            <thead>
                Phone number
            </thead> 

            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>
                        {{ $client->id }}
                    </td>
                    <td>
                        {{ $client->name }}
                    </td>
                    <td>
                        {{ $client->email }}
                    </td>
                    <td>
                        {{ $client->phone_number }}
                    </td>
                    <td>
                        <a href="{{ url('/clients/update'.$client->id) }}">
                            Editar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>