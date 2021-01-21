<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var arr = new Array("str", 1.23, 7, false);
    for (var i = 0; i < arr.length; i++) {
        document.write(arr[i] + "<br />");
    }
    document.write("<hr />");


    arr = new Array();
    for (i = 0; i <10; i++){
        arr[i] = i * 3;
        document.write(arr[i] + "<br />");
    }
    document.write("<hr />");

    var summ = 0;
    for (i = 0; i < arr.length; i++)
        summ += arr[i];
        document.write("Сумма равна - " + summ);
    document.write("<hr />");

</script>
</body>
</html>