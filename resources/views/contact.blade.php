<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Lista contatti</h1>
    <ul>
        @foreach ($contacts as $contact)
        <li>{{$contact}}  </li>
        @endforeach
    </ul>
    <h3>Ritorna alla <a href="{{ url('/') }}">Home</a></h3>

</body>
</html>