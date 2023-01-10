<?php

namespace app\common\traits;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

trait ExcelTrait
{
    /**
     *
    // $title=['t1','t2','t3'];
    // $data = [
            //     [1, 'jack', 10],
            //     [2, 'mike', 12],
            //     [3, 'jane', 21],
            //     [4, 'paul', 26],
            //     [5, 'kitty', 25],
            //     [6, 'yami', 60],
    // ];
    // $dir='./runtime/generate/kline/btcusdt/';
    // $fileName = '学生信息';
     */
    public function traitExportExcel($head, $data, $dir, $fileName,$ColumnsWidthAutoSize=[])
    {
        set_time_limit(0);
        ini_set('memory_limit', '1024M');
        if (!is_dir($dir)) {
            mkdir(iconv("UTF-8", "GBK", $dir), 0777, true);
        }
        //get object
        $spreadsheet = new Spreadsheet();
        //get sheet
        $sheet = $spreadsheet->getActiveSheet();
        foreach ($ColumnsWidthAutoSize as $item) {
            $sheet->getColumnDimension($item)->setAutoSize(true);
        }
        // set sheet title
        $sheet->setTitle('sheet1');
        //set head
        foreach ($head as $key => $value) {
            $sheet->setCellValueByColumnAndRow($key+1, 1, $value);
        }
        //set data
        $row = 2; //从第二行开始
        foreach ($data as $item) {
            $column = 1;
            foreach ($item as $value) {
                $sheet->setCellValueByColumnAndRow($column, $row, $value);
                $column++;
            }
            $row++;
        }
        $fileType = 'Xlsx';
        $writer = IOFactory::createWriter($spreadsheet, $fileType);
        $path=$dir.$fileName.'.'.$fileType;
        if (!file_exists($path)) {
            $writer->save($path);
        }

        unset($spreadsheet);
        unset($sheet);
        unset($writer);
        //2.输出到浏览器
        // $writer = IOFactory::createWriter($spreadsheet, $fileType); //按照指定格式生成Excel文件
        // excelBrowserExport($fileName, $fileType);
        // $writer->save('php://output');
    }
}
