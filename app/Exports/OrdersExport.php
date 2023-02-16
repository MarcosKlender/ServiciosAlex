<?php

namespace App\Exports;

use App\Models\Orders;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OrdersExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $day = '2023-02-11';

        return view ('orders.export', [
            'orders' => Orders::where('fecha_entrega', $day)->get()
        ]);
    }
}
