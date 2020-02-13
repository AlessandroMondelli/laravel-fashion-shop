<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Laravel Shop</title>
    </head>

    <body>
        @foreach ($clothes as $cloth)
        <ul>
            <li>ID Indumento: {{ $cloth->id }}</li>
            <li>Tipo: {{ $cloth->tipo }}</li>
            <li>Taglia: {{ $cloth->taglia }}</li>
            <li>Prezzo: {{ $cloth->prezzo }}€</li>
            @if ($cloth->sconto != NULL)
                <li>Sconto: {{ $cloth->sconto }}</li>
            @endif
        </ul>
        @endforeach
    </body>
</html>
