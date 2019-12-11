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
                <td>Nombre</td>
                <td>Last Name </td>
                <td>Title</td>
                <td>Biography</td>
              
            </tr>
            @foreach($professionals as $pro)
            <tr>
                <th>{{$pro->user->name}}</th>
                <th>{{$pro->user->last_name}}</th>
                <th>{{$pro->title}}</th>
                <th>{{$pro->biography}}</th>
                
            </tr>
            @endforeach
        </table>
    </section>
</body>
</html>