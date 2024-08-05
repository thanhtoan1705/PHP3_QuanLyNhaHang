<?php

namespace App\Http\Controllers\Admin\Statistical;

use App\Exports\StatisticalDatesExport;
use App\Exports\StatisticalMonthsExport;
use App\Exports\StatisticalExport;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class StatisticalController extends Controller
{
    public function index(Request $request)
    {

        $statisticals = Payment::where('payment_status', '0')
            ->paginate(5);
        //day
        $date = $request->input('date', now()->format('Y-m-d'));
        $statisticalsdates = Payment::whereDate('payment_date', $date)
            ->orderBy('payment_date', 'desc')
            ->where('payment_status', '0')
            ->paginate(5);
        //moth
        $day = $request->input('day', now()->format('d'));
        $month = $request->input('month', now()->format('m'));
        $year = $request->input('year', now()->format('Y'));

        // Tạo ngày đầu và ngày cuối của tháng
        $firstDayOfMonth = \Carbon\Carbon::createFromDate($year, $month, 1)->startOfMonth();
        $lastDayOfMonth = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth();

        // Lấy dữ liệu các thanh toán trong tháng
        $statisticalmonths = Payment::whereBetween('payment_date', [$firstDayOfMonth, $lastDayOfMonth])
            ->orderBy('payment_date', 'desc')
            ->where('payment_status', '0')
            ->paginate(5);

        // Tính tổng doanh thu cho tháng hiện tại
        $totalRevenuemonth = $statisticalmonths->sum('total_amount');

        $totalRevenueday = $statisticalsdates->sum('total_amount');
        $totalRevenue = Payment::sum('total_amount');

        return view('admin.statistical.index', compact('statisticals', 'totalRevenue', 'statisticalsdates', 'date', 'totalRevenueday', 'statisticalmonths', 'year', 'month', 'totalRevenuemonth', 'day'));

    }
    public function revenueChart(Request $request)
    {
        // Lấy dữ liệu tổng doanh thu theo từng ngày
        $revenueData = Payment::select(DB::raw('DATE(payment_date) as date'), DB::raw('SUM(total_amount) as total'))
            ->where('payment_status', '0')
            ->groupBy(DB::raw('DATE(payment_date)'))
            ->get();

        // Tạo mảng dữ liệu cho biểu đồ
        $labels = $revenueData->pluck('date')->toArray();
        $data = $revenueData->pluck('total')->toArray();

        // Trả về dữ liệu dưới dạng JSON để sử dụng trong biểu đồ
        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }

    public function export(Request $request)
    {
        $statisticals = Payment::where('payment_status', '0')->get();
        $totalRevenue = Payment::where('payment_status', '0')->sum('total_amount');

        return Excel::download(new StatisticalExport($statisticals, $totalRevenue), 'payments.xlsx');
    }

    public function exportStatisticalDates(Request $request)
    {
        $date = $request->input('date', now()->format('Y-m-d'));
        $statisticalsdates = Payment::whereDate('payment_date', $date)
            ->orderBy('payment_date', 'desc')
            ->where('payment_status', '0')
            ->get();

        $totalRevenueday = $statisticalsdates->sum('total_amount');

        return Excel::download(new StatisticalDatesExport($statisticalsdates, $totalRevenueday), 'statistical_days.xlsx');
    }
    public function exportStatisticalMonths(Request $request)
{
    $day = $request->input('day', now()->format('d'));
    $month = $request->input('month', now()->format('m'));
    $year = $request->input('year', now()->format('Y'));

    // Create start and end dates for the month
    $firstDayOfMonth = \Carbon\Carbon::createFromDate($year, $month, 1)->startOfMonth();
    $lastDayOfMonth = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth();

    // Fetch payments for the month
    $statisticalmonths = Payment::whereBetween('payment_date', [$firstDayOfMonth, $lastDayOfMonth])
        ->orderBy('payment_date', 'desc')
        ->where('payment_status', '0')
        ->get();

    // Calculate total revenue for the month
    $totalRevenuemonth = $statisticalmonths->sum('total_amount');

    return Excel::download(new StatisticalMonthsExport($statisticalmonths, $totalRevenuemonth), 'statistical_months.xlsx');
}

}
