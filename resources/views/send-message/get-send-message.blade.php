<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Project</title>
</head>
<body>
    <h1>Введите текст для создания Hash сообщения</h1>
    <a href="{{ route('index') }}">Главная</a>
    <hr>
    <form action="{{ route('post-send-message') }}" method="post">
        @csrf
        <p><input type="text" name="form_text" required></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>