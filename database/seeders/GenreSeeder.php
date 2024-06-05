<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Horor',
            'description' => 'Horror is a genre of stories intended to frighten, shock, and thrill its audience. Horror can be interpreted in many ways, but there is often a villain, monster, or main threat that is often a reflection of the fears that society was experiencing at the time.'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'is a humorous work that generally aims to entertain, cause laughter, especially in television, film and comedy.'
        ]);

        Genre::create([
            'name' => 'Action',
            'description' => 'Action films or action films are the main genre of films in which one or more characters are involved in challenges that require physical strength or special abilities.'
        ]);

        Genre::create([
            'name' => 'Shounen',
            'description' => 'If shonen means boy, then shoujo means daughter.'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ]);
    }
}
