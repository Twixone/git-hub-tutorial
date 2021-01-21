<!-- Если class ставится .
     Если id ставится # -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изучаем библиотеку JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .div_1{
            background-color: #e07474;
        }

        .div_2{
            background-color: #b7f5a2;
        }
    </style>
</head>
<body>

<div id="div">Text</div>

<script type="text/javascript">
    var div = prompt("1 или 2?");
    while(div != 1 && div != 2){
        alert("Пожалуйста, введите число 1 или 2")
        div = prompt("1 или 2?");
    }
    $("#div").attr ("class", "div_" + div);
    alert($("#div").get(0).className);
</script>

</body>
</html>