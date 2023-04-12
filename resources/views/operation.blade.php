<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation</title>
</head>
<body>
    <h1>Calculo</h1>
    @switch($op)
        @case ('soma')
            <p>Resultado da soma: {{$soma}}</p> 
        @break
        @case ('subtracao')
            <p>Resultado da subtração: {{$subt}}</p> 
        @break
        @case ('multiplicacao')
            <p>Resultado da multiplicação: {{$mult}}</p> 
        @break
        @case ('divisao')
            <p>Resultado da divisão: {{$div}}</p> 
        @break
        @case (null)
            <p>Resultado da soma: {{$soma}}</p> 
            <p>Resultado da subtração: {{$subt}}</p>
            <p>Resultado da multiplicação: {{$mult}}</p>
            <p>Resultado da divisão: {{$div}}</p>  
        @break
    @endswitch
</body>
</html>