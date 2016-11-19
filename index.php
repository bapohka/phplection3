<?php
//error_reproting(E_ALL & ~E_NOTICE); //для устранения показа ошибок на странице
// $_GET $_POST суперглобальные массивы
//$arg1 = $_GET['arg1'];
$result = '';
if (isset($_POST['arg1'], $_POST['arg2'], $_POST['action'])) {

    $arg1 = $_POST['arg1'];
    $arg2 = $_POST['arg2'];
    $action = $_POST['action'];
    $plus = '+';
    $minus = '-';
    $product = '*';
    $advision = '/';
    switch ($action) {
        case $plus :
            $result = $arg1 + $arg2;
            break;
        case $minus :
            $result = $arg1 - $arg2;
            break;
        case $product :
            $result = $arg1 * $arg2;
            break;
        case $advision :
            $result = $arg1 - $arg2;
            break;
    }
//$allowedOperation = array('+', "-", "/", "*"); //какие действия разрешены
 //   можно использовать циклы для указаний что делать
    // if ($action === $plus) {
 //       $result = $arg1 + $arg2;
 //   }
 //    else if ($action === $minus){
 //       $result = $arg1 - $arg2;
 //   }
 //    else if ($action === $product) {
 //       $result = $arg1 * $arg2;
 //   }Ы
 //   else if ($action === $advision){
 //   $result = $arg1 - $arg2;
 //   }
    // одинарые переменные не выполняют действий в следующей строке. нужно использовать двойные
    echo $arg1 . '<br />', $arg2;
    //$result = "Результат: $result" . " попугаев";
    $result = 'Результат переменной $result = ' . "$result";

}
?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container">
<br />
<br />
<br />
<div style="text-align: center">
    <form method="POST">
        <div class="form-group">
        <label for="arg1">Аргумент №1
            <input id="arg1" class="form-control" type="number" name="arg1" value="<?php $arg1 = $_POST['arg1'];?>" />
        </label>
        </div>
        <div class="form-group">
        <label for="arg2">Аргумент №2
            <input id="arg2" class="form-control" type="number" name="arg2" value="<?php $arg2 = $_POST['arg2'];?>"/>
        </label>
        </div>
        <div class="form-group">
            <label for="action">Математическое действие
                <input id="action" class="form-control" type="text" name="action" maxlength="1" placeholder="Можно вводить: + - * /" value="" />
            </label>
        </div>
        <div class="form-group">
            <label for="result">Результат:
                <input id="result" class="form-control" type="text" value="<?php echo $result;?>" readonly/>
            </label>
        </div>
        <input type="submit" value="Посчитать" />
    </form>
</div>
</body>
</html>

<!--

$arg1 = 50;
$arg2 = 30;
$sum = $arg1 / $arg2; //используем любые аргументы без указания типа, пхп сам додумает
echo $sum . '<br>'; //выводим данные

echo round($sum, 2) . '<br>'; // округляем до 2 знаков
var_dump($sum); //для дебага удобная штука
//firephp расширение для работы с пхп
//работа с формой

-->

