<?php

namespace App\Exports;

use App\Models\Orders;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OrdersExport implements FromView, ShouldAutoSize
{
    public function __construct($day)
    {
        $this->day = $day;
    }

    public function view(): View
    {
        return view('orders.export', [
            'orders' => Orders::where('fecha_entrega', $this->day)->get()
        ]);
    }
}
