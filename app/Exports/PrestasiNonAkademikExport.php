<?php

namespace App\Exports;

use App\Models\PrestasiNonAkademik;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PrestasiNonAkademikExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = PrestasiNonAkademik::orderByRaw("FIELD(tingkat , 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional') ASC")->get();

        return view('pages.admin.data-alumni.non-akademik-excel', compact('items'));
    }
}
