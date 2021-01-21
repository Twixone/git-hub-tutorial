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

<img src="1.jpg" class="asd" alt="Изображение" title="Изображние" /><br/>
<img src="2.jpg"  /><br/>
<img src="3.jpg"  /><br/>
<img src="4.jpg" alt="Изображение" title="Изображние" />

<script type="text/javascript">
    $(":not(img[alt])").attr("alt", "JQuery");
    //$("img").not("img[alt]"); сокращенная запись строчки выше

    var elements = $("img");
    var text = "";
    for(var i = 0;i < elements.length; i++)
        text += elements[i].alt + "\n"; // className для вывода class
    alert(text );
</script>

</body>
</html>