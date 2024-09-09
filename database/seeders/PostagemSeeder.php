<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id'=> 1,
            'user_id' => 1,
            'titulo'  => 'Minha primeira postagem',
            'conteudo'=> 'Conteudo da minha postagem',
        ]);

        DB::table('postagens')->insert([
            'categoria_id'=> 1,
            'user_id' => 2,
            'titulo'  => 'Minha segunda postagem',
            'conteudo'=> 'Conteudo da minha postagem',
        ]);

        DB::table('postagens')->insert([
            'categoria_id'=> 1,
            'user_id' => 3,
            'titulo'  => 'Minha terceira  postagem',
            'conteudo'=> 'Conteudo da minha postagem',
        ]);
    }
}
