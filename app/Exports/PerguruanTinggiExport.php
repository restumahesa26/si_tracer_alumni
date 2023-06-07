<?php

namespace App\Exports;

use App\Models\PerguruanTinggi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PerguruanTinggiExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = PerguruanTinggi::orderBy('tahun_lulus', 'ASC')->get();

        return view('pages.admin.data-alumni.ptn-excel', compact('items'));
    }
}
