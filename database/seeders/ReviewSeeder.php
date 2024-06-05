<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id'=>1,
            'user'=>'rahmachmtt',
            'rating'=>'70/100',
            'date'=>'20 0f januari 2024',
            ]);
        
        Review::create([
            'id' =>2,
            'movie_id'=>2,
            'user'=>'aa ilham hamdan',
            'rating'=>'99/100',
            'date'=>'03 0f march 2024',
            ]);
        
        Review::create([
            'id' =>3,
            'movie_id'=>3,
            'user'=>'rizky prasetyo',
            'rating'=>'100/100',
            'date'=>'  17 0f september 2024',
            ]);

        Review::create([
            'id' =>4,
            'movie_id'=>4,
            'user'=>'farah quenn',
            'rating'=>'80/100',
            'date'=>'21 0f april 2023',
            ]);
        
        Review::create([
            'id' =>5,
            'movie_id'=>5,
            'user'=>'dandelz',
            'rating'=>'85/100',
            'date'=>'09 0f april 2025',
            ]); 
        }
}
