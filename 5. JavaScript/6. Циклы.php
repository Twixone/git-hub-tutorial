<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
   var i;
   for (i = 0; i < 10; i++) {
       if (i % 3 == 0 && i != 0) continue; <!-- Пропуск хода continue -->
       if (i == 8) break;
       document.write(i + "<br />")
   }
    document.write("<hr />");


   var x = 0;
   while (x < 10) {
       document.write(x + "<br />");
       x += 2;
   }


    <!-- Выполняется только один раз -->
   var y = 1000;
   do {
       document.write("Цикл сработал")
   }
   while (y < 100);

</script>
</body>
</html>