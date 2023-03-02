<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Orders;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class OrdersExport implements FromView, ShouldAutoSize, WithTitle
{
    protected $day;

    public function __construct($day)
    {
        $this->day = $day;
    }

    public function view(): View
    {
        return view('orders.export', [
            'orders' => Orders::where('estado', 'ENTREGADO')->where('fecha_entrega', $this->day)->get()
        ]);
    }

    public function title(): string
    {
        $dayname = Carbon::parse($this->day)->translatedFormat('l');
        $daynumber = Carbon::parse($this->day)->translatedFormat('d');

        return $dayname . ' ' . $daynumber;
    }
}
