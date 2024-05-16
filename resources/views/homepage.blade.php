<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Homepage</h1>
    <p> A great number is {{ 2+2 }} </p>
    <p> The year now is  {{ date ('Y') }} </p>

    <h3> {{ $name}} </h3>
    <h3> {{ $catName}} </h3>
    <a href="/about">About</a>

    <ul>
        @foreach ($allanimals as $animal )
            <li> {{ $animal }} </li>
        @endforeach
    </ul>
</body>
</html>