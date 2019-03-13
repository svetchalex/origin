<?php
require_once __DIR__ . '/Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();
session_start();

$arr_comp = [];
$arr_cost = [];
if (array_key_exists('comp_case', $_SESSION)) {
    $arr_comp[] = $_SESSION['comp_case'];
    $arr_cost[] = $_SESSION['cost_case'];
}
if (array_key_exists('motherboard', $_SESSION)) {
    $arr_comp[] = $_SESSION['motherboard'];
    $arr_cost[] = $_SESSION['cost_mb'];
}
if (array_key_exists('cpu', $_SESSION)) {
    $arr_comp[] = $_SESSION['cpu'];
    $arr_cost[] = $_SESSION['cost_cpu'];
}
if (array_key_exists('ram', $_SESSION)) {
    $arr_comp[] = $_SESSION['ram'];
    $arr_cost[] = $_SESSION['cost_ram'];
}
if (array_key_exists('hdd', $_SESSION)) {
    $arr_comp[] = $_SESSION['hdd'];
    $arr_cost[] = $_SESSION['cost_hdd'];
}
foreach ($arr_comp as $key => $item) {
    if ($item === null) {
        unset($arr_comp[$key], $arr_cost[$key]);

    }
}

$objPHPExcel->setActiveSheetIndex(0);


$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Наименование комплектующего')
    ->setCellValue('B1', 'Стоимость');
$objPHPExcel->setActiveSheetIndex(0)
    ->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->setActiveSheetIndex(0)
    ->getColumnDimension('B')->setAutoSize(true);
$cnt = count($arr_comp);
for ($i = 1; $i < $cnt + 1; $i++) {
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValueByColumnAndRow(0, $i + 1, $arr_comp[$i - 1])
        ->setCellValueByColumnAndRow(1, $i + 1, $arr_cost[$i - 1]);

}
$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValueByColumnAndRow(0, $cnt + 2, 'Итого: ')
    ->setCellValueByColumnAndRow(1, $cnt + 2, $_SESSION['sum'] . ' руб.');

$objPHPExcel->getActiveSheet()->setTitle('Конфигуратор ПК');
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="result.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
