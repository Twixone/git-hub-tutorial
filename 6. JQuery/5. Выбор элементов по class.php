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
<div class="test">Test 1</div>
<div class="test">Test 2</div>
<p class="test">Test 3</p>
<p class="test">Test 4</p>
<script type="text/javascript">
    var test = $('div.test');
    for (var i = 0; i < test.length; i++){
        test.get(i).style.color = "red";
    }
    setTimeout("$('p.test').get(0).style.color='green'", 2000);

</script>

</body>
</html>