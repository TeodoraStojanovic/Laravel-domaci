<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\User;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        User::truncate();
        Genre::truncate();

        $user=User::factory(3)->create();
        $genre1=Genre::factory()->create();
        $genre2=Genre::factory()->create();

        Book::factory(5)->create([
            'user_id'=>$user->id,
            'genre_id'=>$genre1->id,
        ]);
        Book::factory(2)->create([
            'user_id'=>$user->id,
            'genre_id'=>$genre2->id,
        ]);
       
    }
}
