<?php
/**
 *
 */
function create_base()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS comp_case
SQL;
    $sql2 = <<<SQL
        DROP TABLE IF EXISTS motherboard
SQL;
    $sql3 = <<<SQL
        DROP TABLE IF EXISTS cpu
SQL;
    $sql4 = <<<SQL
        DROP TABLE IF EXISTS ram
SQL;
    $sql5 = <<<SQL
        DROP TABLE IF EXISTS videocard
SQL;
    $sql6 = <<<SQL
        DROP TABLE IF EXISTS hdd
SQL;
    $sql7 = <<<SQL
        CREATE TABLE comp_case(
        id_case INTEGER,
        name TEXT,
        ff_case TEXT,
        size_case VARCHAR (255), 
        ps TEXT,
        front_panel TEXT,
        cost_case INTEGER)
SQL;
    $sql8 = <<<SQL
        CREATE TABLE motherboard(
        id_mb INTEGER,
        name TEXT, 
        socket_mb TEXT, 
        chipset  TEXT,
        ddr_mb VARCHAR (255),
        ff_mb TEXT,
        rear_panel TEXT,
        cost_mb INTEGER)
SQL;
    $sql9 = <<<SQL
        CREATE TABLE cpu(
        id_cpu INTEGER,
        name TEXT, 
        socket_cpu TEXT, 
        numb_cores  INTEGER,
        cost_cpu INTEGER)
SQL;

    $sql10 = <<<SQL
        CREATE TABLE ram(
        id_ram INTEGER,
        name TEXT, 
        ff_ram VARCHAR (255), 
        ddr_ram  VARCHAR (255),
        memory_ram INTEGER,
        cost_ram INTEGER)
SQL;

    $sql11 = <<<SQL
        CREATE TABLE hdd(
        id_hdd INTEGER,
        name TEXT, 
        ff_hdd VARCHAR (255), 
        int_hdd VARCHAR (255),
        memory_hdd INTEGER,
        cost_hdd INTEGER)
SQL;

    $sql12 = <<<SQL
        INSERT INTO comp_case (id_case, name, ff_case, size_case, ps, front_panel, cost_case) VALUES
        (1, '3Cott 1816 Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 1860),
        (2, 'ACCORD A-30B Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 1240),
        (3, 'AeroCool Aero-500 Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 2810),
        (4, 'Be Quiet Silent Base 601 Silver', 'E-ATX, ATX, mATX, Mini-ITX', 'Midi-Tower', 'без БП', 'USB 2.0, 2 x USB 3.0, Audio, Audio', 9030),
        (5, 'Exegate XP-330U Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 1700)
SQL;
    $sql13 = <<<SQL
        INSERT INTO motherboard (id_mb, name, socket_mb, chipset, ddr_mb, ff_mb, rear_panel, cost_mb) VALUES
        (1, 'ASRock 760GM-HDV', 'AM3+', 'AMD 760G', '2xDDR-3', 'mATX', '2 x PS/2, 4 x USB 2.0, VGA (D-Sub), DVI, HDMI, RJ-45', 4090),
        (2, 'ASRock Z390 Pro4', '1151', 'Intel Z390', '4xDDR-4', 'ATX', 'PS/2, 2 x USB 2.0, 3 x USB 3.1, USB 3.1 Type-C, VGA (D-Sub), DVI, HDMI, RJ-45', 8980),
        (3, 'ASUS PRIME A320M-E', 'AM4', 'AMD A320', '2xDDR-4', 'mATX', '2 x PS/2, 5 x USB 3.1, VGA (D-Sub), DVI, HDMI, RJ-45', 4750),
        (4, 'MSI Z370-A PRO', '1151', 'Intel Z370', '4xDDR-4', 'ATX', 'PS/2, 2 x USB 2.0, 4 x USB 3.1, VGA (D-Sub), DVI, DisplayPort, RJ-45', 7970),
        (5, 'MSI X470 GAMING PRO', 'AM4', 'AMD X470', '4xDDR-4', 'mATX', 'PS/2, 2 x USB 2.0, 6 x USB 3.1, DVI, HDMI, RJ-45, S/PDIF (оптический)', 13890)
SQL;
    $sql14 = <<<SQL
        INSERT INTO cpu (id_cpu, name, socket_cpu, numb_cores, cost_cpu) VALUES
        (1, 'AMD A10-9700 OEM', 'AM4', 4, 3830),
        (2, 'AMD Ryzen 3 1200 OEM', 'AM4', 4, 5220),
        (3, 'AMD FX-Series FX-4300 OEM', 'AM3+', 4, 2970),
        (4, 'Intel Celeron G4900 BOX', '1151', 2, 3690),
        (5, 'Intel Core i3 - 8100 OEM', '1151', 4, 8890)
SQL;

    $sql15 = <<<SQL
        INSERT INTO ram (id_ram, name, ff_ram, ddr_ram, memory_ram, cost_ram) VALUES
        (1, '1Gb DDR-III 1333MHz Patriot (PSD31G133381)', 'DIMM', 'DDR-3', 1024, 360),
        (2,  '4Gb DDR-III 1600MHz Foxline (FL1600D3U11S-4GH)', 'DIMM', 'DDR-3', 4096, 2010),
        (3,  '8Gb DDR4 2400MHz Kingston HyperX Fury (HX424C15FB2/8)', 'DIMM', 'DDR-4', 8192, 4520),
        (4,  '4Gb DDR4 2400MHz Kingston (KVR24N17S6/4)', 'DIMM', 'DDR-4', 4096, 2000),
        (5,  '8Gb DDR4 2400MHz Hynix', 'DIMM', 'DDR-4', 8192, 4700)
SQL;

    $sql16 = <<<SQL
        INSERT INTO hdd (id_hdd, name, ff_hdd, int_hdd, memory_hdd, cost_hdd) VALUES
        (1, '500Gb SATA HP (F3B97AA)', '2.5', 'SATA', 500, 6370),
        (2, '1Tb SATA-III Toshiba L200 (HDWL110UZSVA) OEM', '2.5', 'SATA', 1000, 3320),
        (3, '1Tb SATA-III Seagate Barracuda Pro (ST1000LM049)', '2.5', 'SATA', 1000, 4260),
        (4, '1Tb SATA-III Toshiba P300 (HDWD110UZSVA)', '3.5', 'SATA', 1000, 2940),
        (5, '1Tb SATA-II Seagate Pipeline HD (ST1000VM002)', '3.5', 'SATA', 1000, 4090)
SQL;

    try {
        if (!$mysqli->query($sql1)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql2)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql3)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql4)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql5)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql6)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql7)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql8)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql9)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql10)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql11)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql12)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql13)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql14)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql15)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql16)) {
            throw new Exception($mysqli->error);
        }


    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    return true;
}

function select_case()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql17 = <<<SQL
        SELECT * FROM comp_case ORDER BY name ASC 
SQL;
    try {
        if (!$res = $mysqli->query($sql17)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_all();
    return $row;
}

function select_motherboard()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql18 = <<<SQL
        SELECT * FROM motherboard ORDER BY name ASC 
SQL;
    try {
        if (!$res = $mysqli->query($sql18)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_all();
    return $row;
}

function select_cpu()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql19 = <<<SQL
        SELECT * FROM cpu ORDER BY name ASC 
SQL;
    try {
        if (!$res = $mysqli->query($sql19)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_all();
    return $row;
}


function select_ram()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql20 = <<<SQL
        SELECT * FROM ram ORDER BY name ASC 
SQL;
    try {
        if (!$res = $mysqli->query($sql20)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_all();
    return $row;
}


function select_hdd()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql21 = <<<SQL
        SELECT * FROM hdd ORDER BY name ASC 
SQL;
    try {
        if (!$res = $mysqli->query($sql21)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_all();
    return $row;
}

function search_name($base, $search)
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql21 = <<<SQL
        SELECT * FROM $base WHERE name = '$search'
SQL;
    try {
        if (!$res = $mysqli->query($sql21)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_assoc();
    return $row;
}

function sum()
{


        $sum = 0;
        $cost_case = 0;
        $cost_mb = 0;
        if ($_POST['comp_case'] !== 'Корпус') {
            $arr = search_name('comp_case', $_POST['comp_case']);
            $cost_case = $arr['cost_case'];
        }
        if ($_POST['motherboard'] !== 'Корпус') {
            $arr = search_name('motherboard', $_POST['motherboard']);
            $cost_mb = $arr['cost_mb'];
        }
        // var_dump($arr);
        $sum = $cost_case + $cost_mb;
        return $sum;

}
//create_base();
//var_dump(search_name('comp_case', '3Cott 1816 Black'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Конфигуратор ПК</title>
</head>
<body>
<h1>Конфигуратор ПК</h1>
<form method="post" action="configurator.php">
<p><select name="comp_case">
        <option>Корпус</option>
        <?php
        $res = select_case();
        foreach ($res as $item) {
            echo '<option value="' . $item[1] . '">' . $item[1] . ' Цена:' . $item[count($item) - 1] . '</option>';
        }
        ?>
    </select></p>
<p><select name="motherboard" autofocus>
        <option>Материнская плата</option>
        <?php
        $res = select_motherboard();
        foreach ($res as $item) {
            echo '<option value="' . $item[1] . '">' . $item[1] . ' Цена:' . $item[count($item) - 1] . '</option>';
        }
        ?>
    </select></p>
<p><select name="cpu" autofocus>
        <option>Процессор</option>
        <?php
        $res = select_cpu();
        foreach ($res as $item) {
            echo '<option value="' . $item[1] . '">' . $item[1] . ' Цена:' . $item[count($item) - 1] . '</option>';
        }
        ?>
    </select></p>
<p><select name="ram" autofocus>
        <option>Оперативная память</option>
        <?php
        $res = select_ram();
        foreach ($res as $item) {
            echo '<option value="' . $item[1] . '">' . $item[1] . ' Цена:' . $item[count($item) - 1] . '</option>';
        }
        ?>
    </select></p>
<p><select name="hdd" autofocus>
        <option>Жесткий диск</option>
        <?php
        $res = select_hdd();
        foreach ($res as $item) {
            echo '<option value="' . $item[1] . '">' . $item[1] . ' Цена:' . $item[count($item) - 1] . '</option>';
        }
        ?>
    </select></p>



    <input type="button" name="button1" value="Проверить совместимость">
    <input type="submit" name="button2" value="Рассчитать">

<?php
if (isset($_POST['button2'])) {
    echo sum();
}
?>
</form>
</body>
</html>


