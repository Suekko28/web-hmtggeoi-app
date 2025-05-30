<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PPAM;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PPAMSeeder extends Seeder
{
    public function run(): void
    {
        $original = PPAM::first();

        if (!$original) {
            $this->command->error('Tidak ada data PPAM untuk digandakan.');
            return;
        }

        for ($i = 1; $i <= 25; $i++) {
            PPAM::create([
                'title' => $original->title . ' Copy ' . $i,
                'slug' => Str::slug($original->title . ' Copy ' . $i),
                'description' => $original->description,
                'image' => $original->image,
            ]);
        }

        $this->command->info('Berhasil menduplikasi data PPAM sebanyak 25 kali.');
    }
}
