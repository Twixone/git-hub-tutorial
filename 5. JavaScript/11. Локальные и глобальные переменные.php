<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var global = 12;
    var i = 10;

    function test () {
        global++;
        var i = 5;
    }

    test ();
    document.write("Global - " + global + ", variable i - " + i);

</script>
</body>
</html>