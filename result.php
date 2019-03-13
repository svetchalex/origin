
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Конфигуратор ПК</title>
</head>
<body>
<h1>Конфигуратор ПК</h1>
<table>
    <tr>
        <th>Наименование комплектующего</th>
    </tr>
    <?php
    session_start();
    echo '<tr><td>' . $_SESSION['comp_case'] . '</td><td>' . $_SESSION['cost_case'] . '</td></tr>';
    echo '<tr><td>' . $_SESSION['motherboard'] . '</td><td>' . $_SESSION['cost_mb'] . '</td></tr>';
    echo '<tr><td>' . $_SESSION['cpu'] . '</td><td>' . $_SESSION['cost_cpu'] . '</td></tr>';
    echo '<tr><td>' . $_SESSION['ram'] . '</td><td>' . $_SESSION['cost_ram'] . '</td></tr>';
    echo '<tr><td>' . $_SESSION['hdd'] . '</td><td>' . $_SESSION['cost_hdd'] . '</td></tr>';
    echo '<tr><td>' . 'Итого:' . '</td><td>' . $_SESSION['sum'] . ' руб.'.'</td></tr>';
    ?>
</table>
<input type="button" value="Распечатать в Excel" onclick=" location.href=' http://stud03/excel.php' ">
