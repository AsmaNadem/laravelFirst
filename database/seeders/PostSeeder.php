<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Post::factory()->count(1000)->create();
for ($i=0;$i<1000;$i++){
        \DB::table('posts')->insert([
        'title'=>fake()->text(),
            'contents '=>fake()->paragraph(),
        ]);
    }}

}
