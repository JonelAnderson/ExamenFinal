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
            <th>Partido</th>
        </tr>
        @foreach($candidatos as $candit)
        <tr>
            <td>{{$candit->nombre}}</td>
            <td>{{$candit->partido}}</td>
        </tr>
        @endforeach
    </table>

    <section>
        <div>
            <form method="POST" action="{{route('registrar')}}">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" required="">
            </div>
            <div>
                <label for="nombre">Partido</label>
                <input type="text" name="partido" placeholder="Partido" required="">
            </div>
            <div class="space-15"></div>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </section>
</body>
</html>
