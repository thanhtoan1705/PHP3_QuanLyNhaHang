<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class StatisticalDatesExport implements FromCollection, WithHeadings, WithTitle, WithStyles, ShouldAutoSize
{
    protected $statisticalsdates;
    protected $totalRevenueday;

    public function __construct($statisticalsdates, $totalRevenueday)
    {
        $this->statisticalsdates = $statisticalsdates;
        $this->totalRevenueday = $totalRevenueday;
    }

    public function collection()
    {
        return $this->statisticalsdates->map(function ($payment) {
            return [
                'ID' => $payment->id,
                'Mã hóa đơn' => $payment->order_id,
                'Khách hàng' => $payment->user_id,
                'Ngày thanh toán' => $payment->payment_date,
                'Phương thức thanh toán' => $payment->payment_method,
                'Tổng tiền' => $payment->total_amount,
                'Trạng thái' => $payment->payment_status == '0' ? 'Đã Thanh Toán' : 'Chưa Thanh Toán',
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
            'Trạng thái',
        ];
    }

    public function title(): string
    {
        return 'Payments by Date';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setCellValue('H1', 'Tổng danh thu ngày: ' . number_format($this->totalRevenueday, 0, ',', '.') . ' VNĐ');
        $sheet->getStyle('D')->getNumberFormat()->setFormatCode('0 "VNĐ"');
    }
}
