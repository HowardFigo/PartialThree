<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <section>
        <table border="3">
            <tr>
                <td>Nombre Usuario</td>
                <td>Comentario  </td>
                <td>ID Service </td>
              
            </tr>
            @foreach($reviews as $re)
            <tr>
                <th>{{$re->user->name}}</th>
                <th>{{$re->comment}}</th>
                <th>{{$re->service_id}}</th>
                
            </tr>
            @endforeach

         

        </table>
    </section>
</body>
</html>