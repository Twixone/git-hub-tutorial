<!-- Если class ставится .
     Если id ставится # -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изучаем библиотеку JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        function val() {
            var text = $("#text").val();
            alert(text);
        }
    </script>
</head>
<body>

<input type="text" name="text" id="text" />
<input type="button" onclick="return val()" value="Готово">




</body>
</html>