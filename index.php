<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul class="nav">
        <?php
/*            $nav = 4;
            $cur_page = 1;
            while ($cur_page <= $nav){
                // 1-
                echo "<li class=\"nav-item\"> 
                <a class=\"nav-link\" href=\"?page= $cur_page \">Link</a>
                </li>";
                $cur_page++;
            }
        */?>
    </ul>
</body>
</html>-->

<!--1. Необходимо создать выпадающий список годов от 2000 до 2050.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select>
        <?php
            for ($year = 2000; $year<=2050; $year++):?>
                <option>
        <?=$year;?>
        </option>
        <?php endfor;?>  <!--конец цикла-->
    </select>
    <br>
    <!--2. Отрисовать таблицу умножения.-->
    <table>
        <?php
        for($n=1; $n<=10; $n++):?>
        <tr></tr>
            <?php
            for($m=1; $m<=10; $m++): ?>
                <td><?=$n*$m;?></td>
             <?php endfor;?>
         <?php endfor;?>
    </table>
    <!--Создать массив чисел,
    создать переменную в которой будет храниться знак(+, -, *, /).
    В зависимости от знака, который хранится в переменной,
    произвести действия с массивом чисел.-->
    <?php
    $numbers = array(2,3,5,6,8,9);
    $my_act = "+";
    ?>

</body>
</html>








