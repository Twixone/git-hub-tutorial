<!DOCTAPE html>
<html>
<head>
    <title>Поля ввода</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form name="test" action="" method="post" >
    <label for="name">Введите ваше имя:</label> <input type="text" placeholder="Поиск..." name="name" id="name"
           title="Подсказка" maxlength="3" /> <br /><br /><br />
    <label for="date">День рождения:</label> <input name="date" id="date" type="date"  /> <br /><br /><br />
    <label for="date">URL</label> <input type="url" /> <br /><br /><br />
    <label for="date">Номер телефона:</label><input type="tel" /> <br /><br /><br />
    <label for="date">Выбор колличества</label> <input type="range" /> <br /><br /><br />
    <label for="male">Мужской:</label> <input type="radio" name="state" id="male"/>
    <label for="female">Женский:</label> <input type="radio" name="state" id="female"/> <br /><br /><br />
    <label for="password">Пароль:</label><input type="password" /> <br /><br /><br />
    <label for="date">Ваш возраст:</label><input type="number" /> <br /><br /><br />
    <label for="file">Загрузка файла</label><input type="file" /> <br /><br /><br />
    <label for="email">Ваша почта:</label><input type="email" /> <br /><br /><br />
    <label for="color">Выберите цвет:</label><input type="color"/> <br /><br /><br />
    <p>Со всем согласен<input type="checkbox" /> </p>
    <p>Со всем согласен<input type="checkbox" /> </p>
    <p>Со всем согласен<input type="checkbox" /> </p>
    <input type="button" value="Отправить button" /> <!-- Без перезагрузки страницы-->
    <input type="submit" value="Отправить sumbit" /> <!-- С перезагрузкой страницы-->
    <input type="reset" value="Очистака введенных данных"/> <!-- Сброс введенныхданных-->
</form>
</body>
</html>