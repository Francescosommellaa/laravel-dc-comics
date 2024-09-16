<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserimento di dati fittizi
        Comic::create([
            'title' => 'Batman: Year One',
            'description' => 'Origini di Batman.',
            'author' => 'Frank Miller',
            'publisher' => 'DC Comics',
            'release_date' => '1987-02-01',
            'price' => 12.99
        ]);

        Comic::create([
            'title' => 'Superman: Red Son',
            'description' => 'Superman cresce in URSS.',
            'author' => 'Mark Millar',
            'publisher' => 'DC Comics',
            'release_date' => '2003-06-12',
            'price' => 15.99
        ]);
    }
}
