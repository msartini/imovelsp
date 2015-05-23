<?php  

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
         
         DB::table('posts')->truncate();

        $posts = [
            ['title' => 'Post 1', 'description' => 'Descricao do post 1.', 'created_at' => new DateTime],
            ['title' => 'Post 2', 'description' => 'Descricao do post 2.', 'created_at' => new DateTime],
            ['title' => 'Post 3', 'description' => 'Descricao do post 3.', 'created_at' => new DateTime]
        ];
        DB::table('posts')->insert($posts);
    }
}
