<!-- Если class ставится .
     Если id ставится # -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изучаем библиотеку JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        function valid()
        {
            var state = $("input[name='sex']:checked").val();
            $("#message").show(); // show показать элемент
            if(!state) return $("#message").html("<font style='color:red'>Укажите ваш пол</font><br/>");
            $("#message").hide(); // hide скрыть элемент

            if (state == "male");
            $("#img").show(); // show показать элемент

            var test = $("div, p");
        }
    </script>
</head>
<body>

<form name="form" id="form">
    <label for="female">Женский</label>
    <input type="radio" id="female" name="sex"  value="female" />
    <label for="male">Мужской</label>
    <input type="radio" id="male" name="sex"  value="male" />
    <br/>
    <span id="message"></span>
    <input type="button" id="done" onclick="return valid()" value="Готово" />
</form>

<img src="1.jpg" style="display:none" id="img" />

</body>
</html>