<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Project</title>
</head>
<body>
    <h1>Добро пожаловать! В данном проекте можно обмениваться Hash Сообщениями. Выберите действие</h1>
    <hr>
    <div>
        <a href="{{ route('send-message') }}">Отправить сообщение</a>
        <br>
        <a href="{{ route('select-message') }}">Получить сообщение</a>
    </div>
</body>
</html>