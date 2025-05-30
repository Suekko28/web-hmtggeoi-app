<?php

namespace Database\Seeders;

use App\Models\GEOIFair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class GEOISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $original = GEOIFair::first();

        if (!$original) {
            $this->command->error('Tidak ada data GEOIFair untuk digandakan.');
            return;
        }

        for ($i = 1; $i <= 25; $i++) {
            GEOIFair::create([
                'title' => $original->title . ' Copy ' . $i,
                'slug' => Str::slug($original->title . ' Copy ' . $i),
                'description' => $original->description,
                'image' => $original->image,
            ]);
        }

        $this->command->info('Berhasil menduplikasi data GEOIFair sebanyak 25 kali.');
    }

}
