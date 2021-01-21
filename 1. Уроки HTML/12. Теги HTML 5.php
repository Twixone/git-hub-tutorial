<!DOCTAPE html>
<html>
<head>
    <title>HTML 5</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <header>Шапка сайта</header>
    <menu>
        <li>Первая строка</li>
        <li>Вторая строка</li>
        <li>Третья строка</li>
        <li>Четвертая строка</li>
        <li>Пятая строка</li>
    </menu>
    <article>
        <p>Мелодия</p>
        <audio controls="controls"  loop="loop">
            <source src="file:///D:/1.mp3" />
        </audio>
        <video controls="controls">
            <source src="file:///D:/1.mp4"/>
        </video>

    </article>
    <article>Стать, новость, пост...</article>
    <aside>Боковая панель</aside>
    <footer>Низ сайта</footer> <br/><br/><br/>

    H<sub>2</sub>O <br/>
    4<sup>2</sup> <br/><br/><br/>
    <details>
        <summary>Информация об авторе</summary>
        <p>Бендер Родригез</p>
        </details>
    Проверка<mark>Выделено</mark>проверка <br/><br/><br/>
    <ruby>
        Hi<rt>Привет</rt>
        What is your name?<rt>Как тебя зовут?</rt>
    </ruby><br/><br/><br/>
    <progress max="100" value="25">
        Загружено на <span id="value">25</span>%
    </progress><br/><br/><br/>
    <form oninput="result.value=(cm.value/2.54).toFixed(2)">
        <p>Ввоедите длинну в сантиметрах:
        <input type="number" name="cm" autofocus/></p>
        <p>Длинна в люймах: <output name="result"></output></p>
    </form>
</body>
</html>