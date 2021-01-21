<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
    <script type="text/javascript">
        function buttonclick (button) {
            alert ("Вы нажали на кнопку. Кнопка имеет имя " + button.name + ", также value равно " + button.value + ".");

        }

        var counter = 0;
        function OnMouseCounter (element) {
            counter++;
            element.innerHTML="На этот текст было наведено " + counter  + " раз";
        }

    </script>
</head>
<body onload="alert('Страница загружена')">
<input type = "button" name = "b" value = "Click me" onclick="buttonclick(this)" />
<span onmouseover="OnMouseCounter (this)">На этот текст было наведено 0 раз</span>

</body>
</html>