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
        DROP TABLE IF EXISTS cooler
SQL;
    $sql5 = <<<SQL
        DROP TABLE IF EXISTS ram
SQL;
    $sql6 = <<<SQL
        DROP TABLE IF EXISTS videocard
SQL;
    $sql7 = <<<SQL
        DROP TABLE IF EXISTS hdd
SQL;
    $sql8 = <<<SQL
        DROP TABLE IF EXISTS ssd
SQL;
    $sql9 = <<<SQL
        DROP TABLE IF EXISTS power_supply
SQL;
    $sql10 = <<<SQL
        DROP TABLE IF EXISTS dvd
SQL;
    $sql11 = <<<SQL
        DROP TABLE IF EXISTS fan
SQL;
    $sql12 = <<<SQL
        DROP TABLE IF EXISTS monitor
SQL;
    $sql13 = <<<SQL
        DROP TABLE IF EXISTS mfp
SQL;
    $sql14 = <<<SQL
        DROP TABLE IF EXISTS keyboard
SQL;
    $sql15 = <<<SQL
        DROP TABLE IF EXISTS mouse
SQL;
    $sql16 = <<<SQL
        DROP TABLE IF EXISTS acoustic
SQL;
    $sql17 = <<<SQL
        DROP TABLE IF EXISTS os
SQL;
    $sql18 = <<<SQL
        DROP TABLE IF EXISTS office
SQL;
    $sql19 = <<<SQL
        DROP TABLE IF EXISTS antivirus
SQL;
    $sql20 = <<<SQL
        CREATE TABLE comp_case(
        id_case INTEGER,
        name_case TEXT,
        ff_case TEXT,
        size_case VARCHAR (255), 
        ps TEXT,
        front_panel TEXT,
        cost_case INTEGER)
SQL;
    $sql21 = <<<SQL
        CREATE TABLE motherboard(
        id_mb INTEGER,
        name_mb TEXT, 
        socket_mb TEXT, 
        chipset  TEXT,
        ddr_mb VARCHAR (255),
        ff_mb TEXT,
        rear_panel TEXT,
        cost_mb INTEGER)
SQL;
    $sql22 = <<<SQL
        CREATE TABLE cpu(
        id_cpu INTEGER,
        name_cpu TEXT, 
        socket_cpu TEXT, 
        numb_cores  INTEGER,
        cost_cpu INTEGER)
SQL;
    $sql23 = <<<SQL
        CREATE TABLE cooler(
        id_cooler INTEGER,
        name_cooler TEXT, 
        socket_cooler TEXT, 
        speed_cooler  INTEGER,
        cost_cooler INTEGER)
SQL;
    $sql24 = <<<SQL
        CREATE TABLE ram(
        id_ram INTEGER,
        name_ram TEXT, 
        ff_ram VARCHAR (255), 
        ddr_ram  VARCHAR (255),
        memory_ram INTEGER,
        cost_ram INTEGER)
SQL;
    $sql25 = <<<SQL
        CREATE TABLE videocard(
        id_vc INTEGER,
        name_vc TEXT, 
        int_vc TEXT, 
        freq_vc  INTEGER,
        cost_vc INTEGER)
SQL;
    $sql26 = <<<SQL
        CREATE TABLE hdd(
        id_hdd INTEGER,
        name_hdd TEXT, 
        ff_hdd VARCHAR (255), 
        int_hdd VARCHAR (255),
        memory_hdd INTEGER,
        cost_hdd INTEGER)
SQL;
    $sql27 = <<<SQL
        CREATE TABLE ssd(
        id_ssd INTEGER,
        name_ssd TEXT, 
        ff_ssd VARCHAR (255), 
        int_ssd VARCHAR (255),
        memory_ssd INTEGER,
        cost_ssd INTEGER)
SQL;
    $sql28 = <<<SQL
        CREATE TABLE power_supply(
        id_ps INTEGER,
        name_ps TEXT, 
        power INTEGER, 
        pfc VARCHAR (255),
        size_ps VARCHAR (255),
        cost_ps INTEGER)
SQL;
    $sql29 = <<<SQL
        CREATE TABLE dvd(
        id_dvd INTEGER,
        name_dvd TEXT, 
        type_dvd VARCHAR (255), 
        int_dvd VARCHAR (255),
        write_speed TEXT,
        cost_dvd INTEGER)
SQL;
    $sql30 = <<<SQL
        CREATE TABLE fan(
        id_fan INTEGER,
        name_fan TEXT, 
        size_fan VARCHAR (255), 
        speed_fan INTEGER,
        noise INTEGER,
        cost_fan VARCHAR (255))
SQL;
    $sql31 = <<<SQL
        CREATE TABLE monitor(
        id_monitor INTEGER,
        name_monitor TEXT, 
        diagonal VARCHAR (255), 
        screen VARCHAR (255),
        int_monitor TEXT,
        cost_monitor INTEGER)
SQL;
    $sql32 = <<<SQL
        CREATE TABLE mfp(
        id_mfp INTEGER,
        name_mfp TEXT, 
        type_mfp TEXT, 
        type_print VARCHAR (255),
        tech_print VARCHAR (255),
        max_format VARCHAR (255),
        cost_mfp INTEGER)
SQL;
    $sql33 = <<<SQL
        CREATE TABLE keyboard(
        id_keyboard INTEGER,
        name_keyboard TEXT, 
        connection_type VARCHAR (255), 
        int_keyboard VARCHAR (255),
        color_keyboard VARCHAR (255),
        cost_keyboard INTEGER)
SQL;
    $sql34 = <<<SQL
        CREATE TABLE mouse(
        id_mouse INTEGER,
        name_mouse TEXT, 
        type_mouse VARCHAR (255), 
        int_mouse VARCHAR (255),
        sensor VARCHAR (255),
        cost_mouse INTEGER)
SQL;
    $sql35 = <<<SQL
        CREATE TABLE acoustic(
        id_acoustic INTEGER,
        name_acoustic TEXT, 
        output_power INTEGER, 
        freq_acoustic TEXT,
        cost_acoustic INTEGER)
SQL;
    $sql36 = <<<SQL
        CREATE TABLE os(
        id_os INTEGER,
        name_os TEXT, 
        bit_os TEXT, 
        type_os VARCHAR (255),
        cost_os INTEGER)
SQL;
    $sql37 = <<<SQL
        CREATE TABLE office(
        id_office INTEGER,
        name_office TEXT, 
        bit_office TEXT, 
        type_office VARCHAR (255),
        cost_office INTEGER)
SQL;
    $sql38 = <<<SQL
        CREATE TABLE antivirus(
        id_antivirus INTEGER,
        name_antivirus TEXT, 
        bit_antivirus TEXT, 
        license TEXT,
        cost_antivirus INTEGER)
SQL;
    $sql39 = <<<SQL
        INSERT INTO comp_case (id_case, name_case, ff_case, size_case, ps, front_panel, cost_case) VALUES
        (1, '3Cott 1816 Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 1860),
        (2, 'ACCORD A-30B Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 1240),
        (3, 'AeroCool Aero-500 Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 2810),
        (4, 'Be Quiet Silent Base 601 Silver', 'E-ATX, ATX, mATX, Mini-ITX', 'Midi-Tower', 'без БП', 'USB 2.0, 2 x USB 3.0, Audio, Audio', 9030),
        (5, 'Exegate XP-330U Black', 'ATX, mATX', 'Midi-Tower', 'без БП', '2 x USB 2.0, Audio', 1700)
SQL;
    $sql40 = <<<SQL
        INSERT INTO motherboard (id_mb, name_mb, socket_mb, chipset, ddr_mb, ff_mb, rear_panel, cost_mb) VALUES
        (1, 'ASRock 760GM-HDV', 'AM3+', 'AMD 760G', '2xDDR-3', 'mATX', '2 x PS/2, 4 x USB 2.0, VGA (D-Sub), DVI, HDMI, RJ-45', 4090),
        (2, 'ASRock Z390 Pro4', '1151', 'Intel Z390', '4xDDR-4', 'ATX', 'PS/2, 2 x USB 2.0, 3 x USB 3.1, USB 3.1 Type-C, VGA (D-Sub), DVI, HDMI, RJ-45', 8980),
        (3, 'ASUS PRIME A320M-E', 'AM4', 'AMD A320', '2xDDR-4', 'mATX', '2 x PS/2, 5 x USB 3.1, VGA (D-Sub), DVI, HDMI, RJ-45', 4750),
        (4, 'MSI Z370-A PRO', '1151', 'Intel Z370', '4xDDR-4', 'ATX', 'PS/2, 2 x USB 2.0, 4 x USB 3.1, VGA (D-Sub), DVI, DisplayPort, RJ-45', 7970),
        (5, 'MSI X470 GAMING PRO', 'AM4', 'AMD X470', '4xDDR-4', 'mATX', 'PS/2, 2 x USB 2.0, 6 x USB 3.1, DVI, HDMI, RJ-45, S/PDIF (оптический)', 13890)
SQL;
    $sql41 = <<<SQL
        INSERT INTO cpu (id_cpu, name_cpu, socket_cpu, numb_cores, cost_cpu) VALUES
        (1, 'AMD A10-9700 OEM', 'AM4', 4, 3830),
        (2, 'AMD Ryzen 3 1200 OEM', 'AM4', 4, 5220),
        (3, 'AMD FX-Series FX-4300 OEM', 'AM3+', 4, 2970),
        (4, 'Intel Celeron G4900 BOX', '1151', 2, 3690),
        (5, 'Intel Core i3 - 8100 OEM', '1151', 4, 8890)
SQL;
    $sql42 = <<<SQL
        INSERT INTO cooler (id_cooler, name_cooler, socket_cooler, speed_cooler, cost_cooler) VALUES
        (1, 'AeroCool Likai 240', '775, 1150, 1151, 1155, 1156, 1356, 1366, 2011, 2011-3, AM2, AM2+, AM3, AM3+, AM4, FM1, FM2, FM2+', 2000, 4990),
        (2, 'Intel E97379-003', '1150, 1151, 1155, 1156', 2500, 400),
        (3, 'Crown CM-92', '775, 1150, 1151, 1155, 1156, AM2, AM2+, AM3, AM3+, AM4, FM1, FM2, FM2+', 2200, 850),
        (4, 'GELID Siberian Pro', '775, 1150, 1151, 1155, 1156, AM2, AM2+, AM3, AM3+, AM4, FM1, FM2, FM2+', 2200, 850),
        (5, 'Titan TTC-NC65TX(RB)', '775, 1150, 1151, 1155, 1156, 1356, 1366, AM2, AM2+, AM3, AM3+, AM4, FM1', 2200, 1080)
SQL;
    $sql43 = <<<SQL
        INSERT INTO ram (id_ram, name_ram, ff_ram, ddr_ram, memory_ram, cost_ram) VALUES
        (1, '1Gb DDR-III 1333MHz Patriot (PSD31G133381)', 'DIMM', 'DDR-3', 1024, 360),
        (2,  '4Gb DDR-III 1600MHz Foxline (FL1600D3U11S-4GH)', 'DIMM', 'DDR-3', 4096, 2010),
        (3,  '8Gb DDR4 2400MHz Kingston HyperX Fury (HX424C15FB2/8)', 'DIMM', 'DDR-4', 8192, 4520),
        (4,  '4Gb DDR4 2400MHz Kingston (KVR24N17S6/4)', 'DIMM', 'DDR-4', 4096, 2000),
        (5,  '8Gb DDR4 2400MHz Hynix', 'DIMM', 'DDR-4', 8192, 4700)
SQL;
    $sql44 = <<<SQL
        INSERT INTO videocard (id_vc, name_vc, int_vc, freq_vc, cost_vc) VALUES
        (1, 'nVidia GeForce GT1030 ASUS PCI-E 2048Mb (GT1030-2G-BRK)', 'PCI Express 3.0', 1228, 6060),
        (2, 'nVidia GeForce GT710 MSI PCI-E 1024Mb (GT 710 1GD3H LP)', 'PCI Express 2.0', 954, 2860),
        (3, 'AMD (ATI) Radeon RX 570 MSI PCI-E 8192Mb (RX 570 ARMOR 8G OC)', 'PCI Express 3.0', 1268, 14510),
        (4, 'AMD (ATI) Radeon RX 550 Sapphire Pulse PCI-E 2048Mb (11268-03-20G)', 'PCI Express 3.0', 1206, 7560),
        (5, 'AMD Radeon Pro WX 3100 AMD PCI-E 4096Mb (100-505999)', 'PCI Express 3.0', 1219, 15570)
SQL;
    $sql45 = <<<SQL
        INSERT INTO hdd (id_hdd, name_hdd, ff_hdd, int_hdd, memory_hdd, cost_hdd) VALUES
        (1, '500Gb SATA HP (F3B97AA)', '2.5', 'SATA', 500, 6370),
        (2, '1Tb SATA-III Toshiba L200 (HDWL110UZSVA) OEM', '2.5', 'SATA', 1000, 3320),
        (3, '1Tb SATA-III Seagate Barracuda Pro (ST1000LM049)', '2.5', 'SATA', 1000, 4260),
        (4, '1Tb SATA-III Toshiba P300 (HDWD110UZSVA)', '3.5', 'SATA', 1000, 2940),
        (5, '1Tb SATA-II Seagate Pipeline HD (ST1000VM002)', '3.5', 'SATA', 1000, 4090)
SQL;
    $sql46 = <<<SQL
        INSERT INTO ssd (id_ssd, name_ssd, ff_ssd, int_ssd, memory_ssd, cost_ssd) VALUES
        (1, '120Gb SSD Kingston SSDNow G2 (SM2280S3G2/120G)', 'M.2', 'SATA', 120, 2780),
        (2, '256Gb SSD HP (P1N68AA)', '2.5', 'SATA', 256, 12660),
        (3, '256Gb SSD Intel 545s Series (SSDSC2KW256G8X1)', '2.5', 'SATA', 256, 3540),
        (4, '480Gb SSD Kingmax SMV32 (KM480GSMV32)', '2.5', 'SATA', 480, 4720),
        (5, '240Gb SSD Palit UV-S (UVS-SSD240)', '2.5', 'SATA', 240, 2240)
SQL;
    $sql47 = <<<SQL
        INSERT INTO power_supply (id_ps, name_ps, power, pfc, size_ps, cost_ps) VALUES
        (1, '250W FSP FSP250-60SNT', 250, 'активный', '80x80', 2050),
        (2, '450W ExeGate AAA450', 450, 'нет', '80x80', 860),
        (3, '500W 3Cott 3C-ATX500W OEM', 500, 'нет', '120x120', 1200),
        (4, '500W DeepCool (DN500)', 500, 'активный', '120x120', 2760),
        (5, '600W Cougar VTE 600', 600, 'активный', '120x120', 3290)
SQL;
    $sql48 = <<<SQL
        INSERT INTO dvd (id_dvd, name_dvd, type_dvd, int_dvd, write_speed, cost_dvd) VALUES
        (1, 'ASUS BW-16D1HT (DVD±RW/BD-RE) Black RTL', 'BD-RE', 'SATA', 'CD: 48x, DVD: 16x', 5450),
        (2, 'ASUS DRW-24D5MT (DVD±RW) Black OEM', 'DVD-RW DL', 'SATA', 'CD: 48x, DVD: 24x', 1070),
        (3, 'LG GH24NSD0/GH24NSD1/GH24NSD5 (DVD±RW) Black OEM', 'DVD-RW DL', 'SATA', 'CD: 48x, DVD: 24x', 970)
SQL;
    $sql49 = <<<SQL
        INSERT INTO fan (id_fan, name_fan, size_fan, speed_fan, noise, cost_fan) VALUES
        (1, 'Aerocool Motion 12 Plus Blue', '120x120', 1200, '22.1', 430),
        (2, 'AeroCool Shark Fan Blue Edition 120mm', '120x120', 1500, '26.5', 670),
        (3, 'Arctic Cooling F12', '120x120', 1350, '24.5', 480)
SQL;
    $sql50 = <<<SQL
        INSERT INTO monitor (id_monitor, name_monitor, diagonal, screen, int_monitor, cost_monitor) VALUES
        (1, 'Acer 17" V176Lb', '17"', '1280x1024', 'VGA (D-Sub)', 7120),
        (2, 'AOC 27" C27G1', '27"', '1920x1080', 'VGA (D-Sub), 2 x HDMI', 20330),
        (3, 'Dell 24" P2417H (2417-5098/2417-4619)', '24"', '1920x1080', 'VGA (D-Sub), HDMI, DisplayPort', 14190)
SQL;
    $sql51 = <<<SQL
        INSERT INTO mfp (id_mfp, name_mfp, type_mfp, type_print, tech_print, max_format, cost_mfp) VALUES
        (1, 'Brother DCP-L2500DR', 'МФУ (принтер/сканер/копир)', 'черно-белая', 'лазерная', 'A4', 13250),
        (2, 'Canon i-SENSYS MF3010', 'МФУ (принтер/сканер/копир)', 'черно-белая', 'лазерная', 'A4', 18300),
        (3, 'Toshiba e-STUDIO 2303AM', 'МФУ (принтер/сканер/копир)', 'черно-белая', 'лазерная', 'A4', 32790)
SQL;
    $sql52 = <<<SQL
        INSERT INTO keyboard (id_keyboard, name_keyboard, connection_type, int_keyboard, color_keyboard, cost_keyboard) VALUES
        (1, 'A4Tech Bloody B120 Black USB', 'проводное', 'USB', 'чёрный', 2170),
        (2, 'ASUS Cerberus MKII RGB', 'проводное', 'USB', 'чёрный', 4430),
        (3, 'Sven KB-S306 Black', 'проводное', 'USB', 'чёрный', 400)
SQL;
    $sql53 = <<<SQL
        INSERT INTO mouse (id_mouse, name_mouse, type_mouse, int_mouse, sensor, cost_mouse) VALUES
        (1, 'A4Tech Bloody A9081 Black', 'проводное', 'USB', 'оптический', 1630),
        (2, 'BenQ Zowie EC1-A Large', 'проводное', 'USB', 'оптический', 5160),
        (3, 'Acer Predator Cestus 300', 'проводное', 'USB', 'оптический', 3380)
SQL;
    $sql54 = <<<SQL
        INSERT INTO acoustic (id_acoustic, name_acoustic, output_power, freq_acoustic, cost_acoustic) VALUES
        (1, 'BBK CA-196S Black', 2, '100 - 20000', 530),
        (2, 'CBR CMS-408 Black/Silver', 6, '90 - 20000', 500),
        (3, 'Dell AE215', 5, '80 - 20000', 2940)
SQL;
    $sql55 = <<<SQL
        INSERT INTO os (id_os, name_os, bit_os, type_os, cost_os) VALUES
        (1, 'Microsoft Windows 10 Home 32-bit Russian 1pk DSP OEI DVD (KW9-00166)', '32 bit', 'OEM', 7380),
        (2, 'Microsoft Windows 10 Home 32-bit/64-bit Russian 1 License USB (KW9-00500)', '32 bit, 64 bit', 'Retail', 9030),
        (3, 'Microsoft Windows 10 Professional 32-bit English Intl 1pk DSP OEI DVD (FQC-08969)', '32 bit', 'OEM', 10290)
SQL;
    $sql56 = <<<SQL
        INSERT INTO office (id_office, name_office, bit_office, type_office, cost_office) VALUES
        (1, 'Microsoft Office Home and Business 2016 Rus No Skype Box (T5D-02705)', '32 bit, 64 bit', 'Retail', 14130),
        (2, 'Microsoft Office 2016 для дома и бизнеса', '32 bit, 64 bit', 'Retail', 14799)
SQL;
    $sql57 = <<<SQL
        INSERT INTO antivirus (id_antivirus, name_antivirus, bit_antivirus, license, cost_antivirus) VALUES
        (1, 'Dr.Web Pro (BBW-W12-0002-1)', '32 bit, 64 bit', '1 год', 1170),
        (2, 'ESET NOD32 Антивирус Platinum Edition (лицензия на 2 года, 1 компьютер) BOX', '32 bit, 64 bit', '2 года', 1320),
        (3, 'Kaspersky Anti-Virus Russian Edition. 2-Desktop 1 year Base Box (KL1171RBBFS)', '32 bit, 64 bit', '1 год', 1150)

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
        if (!$mysqli->query($sql17)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql18)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql19)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql20)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql21)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql22)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql23)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql24)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql25)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql26)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql27)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql28)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql29)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql30)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql31)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql32)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql33)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql34)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql35)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql36)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql37)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql38)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql39)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql40)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql41)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql42)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql43)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql44)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql45)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql46)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql47)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql48)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql49)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql50)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql51)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql52)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql53)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql54)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql55)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql56)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql57)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
return true;
}

create_base();