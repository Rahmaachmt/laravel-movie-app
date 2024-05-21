<?php

namespace App\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'movie'=>'jojos Bizzare Adventure',
            'user'=>'rahmachmtt',
            'rating'=>'70/100',
            'date'=>'20 0f januari 2024',
        ],
        [
            'movie'=>'Noragami',
            'user'=>'aa ilham hamdan',
            'rating'=>'99/100',
            'date'=>'03 0f march 2024',
        ],
        [
            'movie'=>'Wind Breaker',
            'user'=>'rizky prasetyo',
            'rating'=>'100/100',
            'date'=>'  17 0f september 2024',
        ],
        [
            'movie'=>'one piace',
            'user'=>'farah quenn',
            'rating'=>'80/100',
            'date'=>'21 0f april 2023',
        ],
        [
            'movie'=>'Gintama',
            'user'=>'dandelz',
            'rating'=>'85/100',
            'date'=>'09 0f april 2025',
        ],
    ];

    public function getAllReview()

    {
        return $this->reviews;
    }
    
}