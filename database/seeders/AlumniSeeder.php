<?php

namespace Database\Seeders;

use App\Models\AlumniHMTG;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $original = AlumniHMTG::first();

        if (!$original) {
            $this->command->error('Tidak ada data AlumniHMTG untuk digandakan.');
            return;
        }

        for ($i = 1; $i <= 25; $i++) {
            AlumniHMTG::create(attributes: [
                'name' => $original->name,
                'npm' => $original->npm,
                'phone' => $original->phone,
                'year' => $original->year,
            ]);
        }

        $this->command->info('Berhasil menduplikasi data AlumniHMTG sebanyak 25 kali.');
    }

}
