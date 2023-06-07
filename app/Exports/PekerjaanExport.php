<?php

namespace App\Exports;

use App\Models\Pekerjaan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PekerjaanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = Pekerjaan::orderBy('nama_pekerjaan', 'ASC')->get();

        return view('pages.admin.data-alumni.pekerjaan-excel', compact('items'));
    }
}
