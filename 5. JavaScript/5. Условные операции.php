<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
</head>
<body>
<script type="text/javascript">
    var x = 6;
    var y = 5;
    var bool = false;
    if (x > y ||  bool != true) {
        document.write("x > y");
    }
    else if (x == y)
        document.write("x == y");
    else if (x < y)
        document.write("x < y");
        document.write("<br />");



    var result = 5;
    switch (result){
        case 1: document.write("result = 1"); break;
        case 2: document.write("result = 2"); break;
        case 3: document.write("result = 3"); break;
        case 4: document.write("result = 4"); break;
        default: document.write("result > 4" );
    }



    document.write("<br />");
    x > y ? document.write("YES") : document.write("NO");;




</script>
</body>
</html>