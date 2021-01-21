<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
    <script type="text/javascript">
    var x = 5;
    var y;
    var result;
    y = 5;
    result = x + y;
    document.write(result);
    result *= x;
    document.write("<br />" + result);
    result ++;
    document.write("<br />" + result);
    document.write("<br />");
    document.write(x + "+" + y + "=" + (x + y));
    document.write("<br />");

    var str_1 = "12";
    var str_2 = Number("24");
    document.write(Number (str_1) + str_2);

    var bool;
    var z = 6;
    var d = 7;
    bool = z < d;
    document.write("<br />");
    document.write(z + "<" + d + "=" + bool);
    document.write("<br />");
    document.write(10 + "%" + 7 + "=" + (10%7));

    <!-- Вызывание на определенный раз -->



</script>
</body>
</html>