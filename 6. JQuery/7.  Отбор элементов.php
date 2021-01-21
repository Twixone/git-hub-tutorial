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

<ul id="menu">
    <li><a href="">Ссылка 1</a></li>
    <li><a href="">Ссылка 2</a></li>
    <li><a href="">Ссылка 3</a></li>
    <li><a href="">Ссылка 4</a></li>
    <li><a href="">Ссылка 5 </a></li>
</ul>
<a href="">Ссылка 5 </a>

<script type="text/javascript">
    var link = $("#menu li a:first");
    alert(link.html());

    link = $("#menu li a:eq(2)");
    alert(link.html());

</script>

</body>
</html>