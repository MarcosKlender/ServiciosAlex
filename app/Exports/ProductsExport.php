<?php

namespace App\Exports;

use App\Models\Products;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ProductsExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('search.export', [
            'products' => Products::orderBy('id', 'asc')->get()
        ]);
    }
}
