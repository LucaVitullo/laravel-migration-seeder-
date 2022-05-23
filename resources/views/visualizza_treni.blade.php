<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>treni</title>
</head>

<body>
    @foreach ($arrayTreni as $treno)
        <h1>
            {{ $treno->azienda }}
        </h1>
        <p>
            parte da:
            {{ $treno->stazione_di_partenza }}
        </p>
        <p>
            arriva a: {{ $treno->stazione_di_arrivo }}
        </p>
        <p>
            il giorno: {{ $treno->data_di_partenza }}
        </p>
    @endforeach



</body>

</html>
