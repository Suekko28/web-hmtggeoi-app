<?php

namespace Database\Seeders;

use App\Models\HutHMTG;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class HUTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $original = HutHMTG::first();

        if (!$original) {
            $this->command->error('Tidak ada data HutHMTG untuk digandakan.');
            return;
        }

        for ($i = 1; $i <= 25; $i++) {
            HutHMTG::create([
                'title' => $original->title . ' Copy ' . $i,
                'slug' => Str::slug($original->title . ' Copy ' . $i),
                'description' => $original->description,
                'image' => $original->image,
            ]);
        }

        $this->command->info('Berhasil menduplikasi data HutHMTG sebanyak 25 kali.');
    }
}
