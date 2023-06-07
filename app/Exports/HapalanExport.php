<?php

namespace App\Exports;

use App\Models\Hapalan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class HapalanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $items = Hapalan::join('users', 'users.username', 'hapalan.nisn')->orderBy('users.nama', 'ASC')->get('hapalan.*');

        return view('pages.admin.data-alumni.hapalan-excel', compact('items'));
    }
}
