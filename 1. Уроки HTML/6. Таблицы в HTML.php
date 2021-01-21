<!DOCTAPE html>
<html>
<head>
    <title>Таблицы в HTML</title>
    <meta charset="utf-8" />
</head>
<body>
    <table border="1">
        <caption>Таблица размеров обуви</caption>
        <tr>
            <th>Россия</th>
            <th>Великобритания</th>
            <th>Европа</th>
            <th>Длина ступни</th>
        </tr>
        <tr><td>34,5</td><td>3,5</td><td>36</td><td>23</td></tr>
        <tr><td>35,5</td><td>4</td><td>36</td><td>23-23,5</td></tr>
        <tr><td>36</td><td>4,5</td><td>37</td><td>23,5</td></tr>
        <tr><td>36,5</td><td>5</td><td>38</td><td>24</td></tr>
        <tr><td>37</td><td>5,5</td><td>38,5</td><td>24,5</td></tr>
        <tr><td>38</td><td>6</td><td>39</td><td>25</td></tr>
        <tr><td>38,5</td><td>6,5</td><td>40</td><td>25,5</td></tr>
        <tr><td>39</td><td>7</td><td>40,5</td><td>25,5-26</td></tr>
        <tr><td>40</td><td>7,5</td><td>41</td><td>26</td></tr>
        <tr><td>40,5</td><td>8</td><td>42</td><td>26,5</td></tr>
        <tr><td>41</td><td>8,5</td><td>42,5</td><td>27</td></tr>
        <tr><td>42</td><td>9</td><td>43</td><td>27,5</td></tr>
        <tr><td>43</td><td>9,5</td><td>44</td><td>28</td></tr>
        <tr><td>43,5</td><td>10</td><td>44,5</td><td>28-28,5</td></tr>
        <tr><td>44</td><td>10,5</td><td>45</td><td>28,5-29</td></tr>
        <tr><td>44,5</td><td>11</td><td>46</td><td>29</td></tr>
        <tr><td>45</td><td>11,5</td><td>46,5</td><td>29,5</td></tr>
        <tr><td>46</td><td>12</td><td>47</td><td>30</td></tr>
        <tr><td>46,5</td><td>12,5</td><td>48</td><td>30,5</td></tr>
        <tr><td>47</td><td>13</td><td>48,5</td><td>31</td></tr>
        <tr><td>48</td><td>13,5</td><td>49</td><td>31,5</td></tr>
    </table>
    <br />
    <table border="1" align="center" width="750" cellpadding="10" cellspacing="5">
        <tr align="center"><th>Дата</th><th>Время</th><th>Продукт</th><th>Место</th><th colspan="3"> Жыры, Белки, Углеводы</th><th>Денги</th></tr>
        <tr align="center"><td>12.12.2011</td><td>19.00</td><td>Кефир</td><td>Москва</td><td>0</td><td>5</td><td>2</td><td>30</td></tr>
        <tr align="center"><td>13.12.2011</td><td>20.00</td><td>Молоко</td><td>Москва</td><td>3</td><td>6</td><td>2</td><td>30</td></tr>
        <tr align="center"><td rowspan="2">14.12.2011</td><td>22.00</td><td>Сок</td><td>Москва</td><td>2</td><td>7</td><td>2</td><td>30</td></tr>
        <tr align="center">                               <td>23.00</td><td>Йогурт</td><td>Москва</td><td>1</td><td>1</td><td>2</td><td>30</td></tr>
    </table>
    <br />
</body>
</html>