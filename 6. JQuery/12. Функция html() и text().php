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
<div id="div">
    Блок
    <p>Абзац</p>
</div>
<script type="text/javascript">
    alert($("#div").html());
    alert($("#div").text());

    $("p").html("<p>Новый абзац</p>");

</script>

</body>
</html>