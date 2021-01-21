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

<img src="1.jpg" alt="1" />
<img src="2.jpg" alt="2" title="2" />

<script type="text/javascript">
    var test = $("div");
    alert(test.length);

    var img = $("img[title]");
    alert(img.length);
</script>

</body>
</html>