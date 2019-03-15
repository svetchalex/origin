<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
    <meta charset="UTF-8">
    <title>Конфигуратор ПК</title>
</head>
<body>
<h1>Конфигуратор ПК</h1>
<table id="example" class="display">
    <thead>
    <tr>
        <th>Наименование комплектующего</th>
        <th>Количество</th>
        <th>Стоимость</th>
    </tr>
    </thead>
    <tbody>
    <?php
    session_start();
    echo '<tr><td>' . 'Корпус: ' . $_SESSION['comp_case'] . '</td><td>' . $_SESSION['count_case'] .
        '</td><td>' . $_SESSION['cost_case'] . ' руб.' . '</td></tr>';
    echo '<tr><td>' . 'Материнская плата: ' . $_SESSION['motherboard'] . '</td><td>' . $_SESSION['count_mb'] .
        '</td><td>' . $_SESSION['cost_mb'] . ' руб.' . '</td></tr>';
    echo '<tr><td>' . 'Процессор: ' . $_SESSION['cpu'] . '</td><td>' . $_SESSION['count_cpu'] .
        '</td><td>' . $_SESSION['cost_cpu'] . ' руб.' . '</td></tr>';
    echo '<tr><td>' . 'Оперативная память: ' . $_SESSION['ram'] . '</td><td>' . $_SESSION['count_ram'] .
        '</td><td>' . $_SESSION['cost_ram'] . ' руб.' . '</td></tr>';
    echo '<tr><td>' . 'Жесткий диск: ' . $_SESSION['hdd'] . '</td><td>' . $_SESSION['count_hdd'] .
        '</td><td>' . $_SESSION['cost_hdd'] . ' руб.' . '</td></tr>';
    echo '<tr><td>' . 'Итого:' . '</td><td>' . '</td><td>' . $_SESSION['sum'] . ' руб.' . '</td></tr>';
    ?>
    </tbody>
</table>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom      : 'Bfrtip',
            buttons  : [
                'excelHtml5'
            ],
            searching: false,
            ordering : false,
            paging   : false,
            "info"   : false
        });
    });
</script>

</body>
</html>