<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>
    La variable es: {{$id}}
    <br/>
    {{--isset($id)?$id:'Hi!'--}}
    {{--$id or 'Uni. Autonoma'--}}

    @if($id==3)
        Es el usuario 3
    @endif

    @for($i=0; $i<=$id; $i++)
        <hr>Código {{$i}}
    @endfor

    @include("hija")
</h3>
</body>
</html>