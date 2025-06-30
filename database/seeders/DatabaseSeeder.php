<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder pour les utilisateurs de test
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Appel des seeders personnalisés
        $this->call([
            CpVilleSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
