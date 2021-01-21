<!-- Если class ставится .
     Если id ставится # -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изучаем библиотеку JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

<div>Блок</div>

<script type="text/javascript">
    $("<p>Небольшой текст</p>").appendTo("div"); //Вставляет в сам блок
    $("<p>Inserrt Before</p>").insertBefore("div"); // Вставляет перед блоком
    $("<p>Inserrt After</p>").insertAfter("div"); // Вставляет после блока
</script>

</body>
</html>