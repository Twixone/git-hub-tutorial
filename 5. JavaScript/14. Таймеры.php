<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изучаем язык JavaScript</title>
    <script type="text/javascript">
        //var id = setInterval("myFunct_1()", 1000);
        var counter = 0;

        /* function myFunct_1(){
             counter++;
             alert("Секунд прошло - " + counter);
             if(counter == 3) clearInterval(id);
         }
 */
        function timer() {
            counter++;
            document.getElementById("count").innerHTML = counter;
            setTimeout("timer()", 1000);
        }


    </script>
</head>
<body onload="timer()">
Секунд прошло <span id="count">-1</span>
</body>
</html>