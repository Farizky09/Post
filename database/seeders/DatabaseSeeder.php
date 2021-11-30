<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Postingan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        Postingan::create([
            'judul'=>'judul',
            'isi'=>'isi',
            'komen'=>'komen',
        ]);
        Post::factory(10)->create();

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi nesciunt dolores architecto sint, possimus ut, consequatur ratione soluta, eos necessitatibus pariatur',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi nesciunt dolores architecto sint, possimus ut, consequatur ratione soluta, eos necessitatibus pariatur? Quis ducimus mollitia numquam placeat, quod architecto quas at, eligendi, vitae magni assumenda earum?</p><p>Quasi impedit alias nobis voluptates atque molestias temporibus unde autem et, voluptatum, illum voluptate, facere accusantium officiis animi sed ex consectetur quod expedita fugiat. Reiciendis, porro? Consequatur laudantium reprehenderit nobis natus eius alias blanditiis placeat eaque voluptate, dolores pariatur nisi, porro libero. Accusantium beatae nemo temporibus ducimus explicabo. Sequi possimus, exercitationem eveniet natus, ipsa laborum sit quisquam voluptates eum, tempore rem. Nihil dolorum ea quis.</p>'
        ]);
    }
   
}