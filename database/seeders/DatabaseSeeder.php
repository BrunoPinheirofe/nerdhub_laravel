<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Cria um utilizador Administrador específico para poder fazer login facilmente
        // O Profile para este admin será criado automaticamente graças ao método configure() no UserFactory.
        User::factory()->create([
            'name' => 'Admin NerdHub',
            'email' => 'admin@nerdhub.com',
        ]);

        // 2. Cria 10 utilizadores de teste (com os seus perfis também criados automaticamente)
        User::factory(10)->create();
    }
}