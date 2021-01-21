<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var arr = new Array(2, 3, 56, 12, 23, 590, 123, 2);
    text = "Длинна массива = " + arr.length;
    text += "\nМассив состоит из = " + arr.join(", ");
    text += "\nСортированный массив = " + (arr.sort()).join(", ");
    alert(text);

</script>
</body>
</html>