<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Esempio di seed per la tabella users
        User::factory(10)->create(); // Creazione di 10 utenti fittizi
    }
}
