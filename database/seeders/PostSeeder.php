<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'   => __('Marugame Castle offers overnight stay for 2 people for 1.2 million yen'),
                'content' => __('One of 12 castles with a main keep constructed in or before the Edo Period (1603-1867), Marugame Castle is looking for a new feudal lord.'),
            ],
            [
                'title'   => __('Chile holds seismic drills as chance of a big quake rises'),
                'content' => __('As the northern Chilean city of Copiapo was preparing last week to hold earthquake drills, it was hit by a real-life one: a 6.4-magnitude quake that cut power to thousands and caused structural damage to buildings.'),
            ],
            [
                'title'   => __('Dutch museum rolls out 200-year-old condom'),
                'content' => __('The Rijksmuseum in Amsterdam on Tuesday placed on display a rare condom from around 1830, featuring an erotic print of a nun and three clergymen in provocative poses.'),
            ],
        ];

        Post::insert($posts);
    }
}
