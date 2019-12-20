<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2">
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Nombre Candidato</th>
            <th>Codigo Cabina</th>
            <th>Fecha Hora</th>
            <th>Votos</th>
        </tr>
        @foreach($electores as $electo)
        <tr>
            <td>{{$electo->nombre}}</td>
            <td>{{$electo->dni}}</td>
            <td>{{$electo->cabina->codigo}}</td>
            <td>{{$electo->cabina->fecha_hora}}</td>
            <td>{{$electo->candidato->nombre}}</td>
            <td>{{$electo->voto->cantidad_voto}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
