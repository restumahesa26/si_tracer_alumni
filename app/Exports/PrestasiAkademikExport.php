<?php

namespace App\Exports;

use App\Models\PrestasiAkademik;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PrestasiAkademikExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = PrestasiAkademik::orderByRaw("FIELD(tingkat , 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional') ASC")->get();

        return view('pages.admin.data-alumni.akademik-excel', compact('items'));
    }
}
