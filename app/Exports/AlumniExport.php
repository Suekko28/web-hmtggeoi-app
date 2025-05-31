<?php

namespace App\Exports;

use App\Models\AlumniHMTG;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumniExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return AlumniHMTG::select('name', 'npm', 'phone', 'year')->get();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NPM',
            'No Telepon',
            'Tahun',
        ];
    }
}
