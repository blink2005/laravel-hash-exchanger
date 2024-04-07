<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Project</title>
</head>
<body>
    <h1>Ваш Hash существует! Текст сообщения ниже</h1>
    <a href="{{ route('index') }}">Главная</a>
    <hr>
    <p>{{ $message }}</p>
</body>
</html>