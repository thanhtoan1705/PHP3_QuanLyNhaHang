<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StatisticalMonthsExport implements FromCollection, WithHeadings, WithStyles, WithTitle
{
    protected $statisticalmonths;
    protected $totalRevenuemonth;

    public function __construct($statisticalmonths, $totalRevenuemonth)
    {
        $this->statisticalmonths = $statisticalmonths;
        $this->totalRevenuemonth = $totalRevenuemonth;
    }

    public function collection()
{
    return $this->statisticalmonths->map(function ($payment) {
        // Đảm bảo payment_date là đối tượng Carbon
        $paymentDate = \Carbon\Carbon::parse($payment->payment_date);

        return [
            'ID' => $payment->id,
            'Mã hóa đơn' => $payment->order_id,
            'Khách hàng' => $payment->user_id,
            'Ngày thanh toán' => $paymentDate->format('Y-m-d'), // Đảm bảo payment_date là đối tượng Carbon
            'Phương thức thanh toán' => $payment->payment_method,
            'Tổng tiền' => $payment->total_amount,
        ];
    });
}



    public function headings(): array
    {
        return [
            'ID',
            'Mã hóa đơn',
            'Khách hàng',
            'Ngày thanh toán',
            'Phương thức thanh toán',
            'Tổng tiền',
        ];
    }

    public function title(): string
    {
        return 'Payments by Months';
    }

    public function styles(Worksheet $sheet)
    {
        // Add the total revenue to the sheet
        $sheet->setCellValue('I1', 'Tổng doanh thu tháng: ' . number_format($this->totalRevenuemonth, 0, ',', '.') . ' VNĐ');

        // Style the total revenue cell
        $sheet->getStyle('A1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 14,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
        ]);

        // Style the header row
        $sheet->getStyle('A1:F1')->applyFromArray([
            'font' => [
                'bold' => true,
            ]
        ]);
        $sheet->getStyle('A1:G1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '0000FF', // Mã màu xanh dương
                ],
            ],
            'font' => [
                'bold' => true,
                'color' => ['argb' => 'FFFFFF'], // Màu chữ trắng
            ]
        ]);
        $sheet->getStyle('I1:L1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '0000FF', // Mã màu xanh dương
                ],
            ],
            'font' => [
                'bold' => true,
                'color' => ['argb' => 'FFFFFF'], // Màu chữ trắng
            ]
        ]);
        // Format the 'Tổng tiền' column as currency
        $sheet->getStyle('F')->getNumberFormat()->setFormatCode('#,##0 "VNĐ"');

        $sheet->getColumnDimension('A')->setWidth(15);
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->getColumnDimension('E')->setWidth(25);
        $sheet->getColumnDimension('F')->setWidth(20);

        // Optionally adjust row height
        for ($row = 1; $row <= $sheet->getHighestRow(); $row++) {
            $sheet->getRowDimension($row)->setRowHeight(20);
        }
    }
}

