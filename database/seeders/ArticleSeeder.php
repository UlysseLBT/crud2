<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // Garde les articles fixes si tu veux
        Article::insert([
            ['nom' => 'Clavier mécanique', 'description' => 'Un clavier RGB pour les gamers.', 'prix' => 89.99],
            ['nom' => 'Écran 27 pouces', 'description' => 'Écran 144Hz pour une meilleure fluidité.', 'prix' => 249.99],
            ['nom' => 'Souris sans fil', 'description' => 'Précision et autonomie longue durée.', 'prix' => 39.95],
        ]);

        // Ajoute 20 articles aléatoires
        Article::factory(20)->create();
    }
}
