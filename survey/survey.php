<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Анкета опитування</title>
</head>
<body>
    <h2>Анкета опитування</h2>

    <form action="save.php" method="POST">
        Ім’я:<br>
        <input type="text" name="name" required><br><br>

        Email:<br>
        <input type="email" name="email" required><br><br>

        1. Який ваш улюблений предмет у навчанні?<br>
        <select name="q1">
            <option>Математика</option>
            <option>Інформатика</option>
            <option>Історія</option>
            <option>Біологія</option>
        </select><br><br>

        2. Як часто ви користуєтеся інтернетом?<br>
        <select name="q2">
            <option>Кожен день</option>
            <option>Кілька разів на тиждень</option>
            <option>Рідко</option>
        </select><br><br>

        3. Ваш відгук про якість навчання:<br>
        <textarea name="q3"></textarea><br><br>

        <button type="submit">Надіслати</button>
    </form>

</body>
</html>
