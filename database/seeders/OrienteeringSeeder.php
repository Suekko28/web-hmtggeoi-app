<?php

namespace Database\Seeders;

use App\Models\OrienteeringNasional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class OrienteeringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $original = OrienteeringNasional::first();

        if (!$original) {
            $this->command->error('Tidak ada data Oreinteering untuk digandakan.');
            return;
        }

        for ($i = 1; $i <= 25; $i++) {
            OrienteeringNasional::create([
                'title' => $original->title . ' Copy ' . $i,
                'slug' => Str::slug($original->title . ' Copy ' . $i),
                'description' => $original->description,
                'image' => $original->image,
            ]);
        }

        $this->command->info('Berhasil menduplikasi data Oreinteering sebanyak 25 kali.');
    }

}
