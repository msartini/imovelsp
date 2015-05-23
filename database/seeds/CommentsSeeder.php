<?php  

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    public function run()
    {
         DB::table('comments')->truncate();

        $comments = [
            ['post_id' => 1, 'comment' => 'Comentario do post 1.', 'created_at' => new DateTime],
            ['post_id' => 1, 'comment' => 'Outro comentario do post 1.', 'created_at' => new DateTime],
            ['post_id' => 1, 'comment' => 'Interessante post 1.', 'created_at' => new DateTime],
            ['post_id' => 1, 'comment' => 'Este item do post 1 é muito importante.', 'created_at' => new DateTime],
            
            ['post_id' => 2, 'comment' => 'Comentario do post 2.', 'created_at' => new DateTime],
            ['post_id' => 2, 'comment' => 'Outro comentario do post 2.', 'created_at' => new DateTime],
            ['post_id' => 2, 'comment' => 'Interessante post 2.', 'created_at' => new DateTime],
            ['post_id' => 2, 'comment' => 'Este item do post 2 é muito importante.', 'created_at' => new DateTime]

        ];
        DB::table('comments')->insert($comments);
    }
}
