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

<div id="div">Блок</div>


<script type="text/javascript">
    $("#div").css("font-size", "25px");
    $("#div").css("color", "red");

    $("#div").css("background-color", function(){
        return "blue";
    });

    $("#div").css("width", "250px");
    $("#div").css("height", function(){
        var height = prompt("Введите высоту: ");
        return height + "px";
        //return $(this).width(); //Делает высоту такой же как и ширина
    });
</script>

</body>
</html>