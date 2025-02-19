<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <h1>Заполните форму</h1>
    <form method="POST" action="/store_form">
        @csrf  <!-- Защита от CSRF-атак -->
        
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>