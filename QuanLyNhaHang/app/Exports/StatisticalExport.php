<?php

namespace App\Exports;

use App\Models\Payment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class StatisticalExport implements FromCollection, WithHeadings, WithTitle, WithStyles, ShouldAutoSize
{
    protected $statisticals;
    protected $totalRevenue;

    public function __construct($statisticals, $totalRevenue)
    {
        $this->statisticals = $statisticals;
        $this->totalRevenue = $totalRevenue;
    }

    public function collection()
    {
        return $this->statisticals->map(function ($payment) {
            return [
                'ID' => $payment->id,
                'Mã hóa đơn' => $payment->order_id,
                'Khách hàng' => $payment->user_id,
                'Ngày thanh toán' => $payment->payment_date,
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
        return 'Payments Data';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setCellValue('H1', 'Tổng doanh thu: ' . number_format($this->totalRevenue, 0, ',', '.') . ' VNĐ') ;
        $sheet->getStyle('D')->getNumberFormat()->setFormatCode('0 "VNĐ"');

    }
}
