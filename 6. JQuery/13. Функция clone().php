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
<div id="div" style="background-color: red">
    Блок
    <p>Абзац</p>
</div>
<script type="text/javascript">
    var block = $("#div").clone();

    block.html("<p>Новый абзац</p>")
    block.css("font-size", "40px");
    block.css("width", "200px");

    $("body").append(block);


</script>

</body>
</html>