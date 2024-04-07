<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Project</title>
</head>
<body>
    <h1>Ваш текст отправлен! Используйте Hash ниже для получения сообщения</h1>
    <a href="{{ route('index') }}">Главная</a>
    <hr>
    <p>{{ $hash }}</p>
</body>
</html>