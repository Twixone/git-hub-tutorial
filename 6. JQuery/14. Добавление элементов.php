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
<div id="div"><p>Абзац</p></div>
<div id="div_2"></div>
<img src="1.png" alt="" />
<img src="2.png" alt="" />
<img src="3.png" alt="" />
<br/>

<a href="#">1</a>
<a href="#">2</a>

<script type="text/javascript">
    $("#div").append("<span>Простой текст</span>");
    $("img").appendTo($("#div_2"));

    $("a").wrap(<p style='display:none'></p> );
</script>

</body>
</html>