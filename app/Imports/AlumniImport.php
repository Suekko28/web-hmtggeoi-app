<?php

namespace App\Imports;

use App\Models\AlumniHMTG;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AlumniImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new AlumniHMTG([
            'name' => $row['name'],
            'npm' => $row['npm'],
            'phone' => $row['phone'],
            'year' => $row['year'],
        ]);
    }

}
