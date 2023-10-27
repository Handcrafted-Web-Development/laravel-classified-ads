<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\State;
use App\Models\User;
use App\Models\Ad;

class FirstClassifiedAd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::factory()->create([
            'title' => "iPhone X en parfait état, à vendre à un bon prix !",
            'description' => "Un iPhone X, comme neuf, avec une capacité de 64 Go, aucune rayure ni problème. Livré avec un étui de protection en cuir.",
            'price' => 350,
            'year' => 2017,
            'size' => 6.1,
            'brand' => "Apple",
            'due_date' => now(),
            'guarantee' => "Garantie 6 mois",
            'exchange' => fake()->boolean(['0', '1']),
            'author_id' => User::factory(),
            'category_name' => Category::create(['name' => 'Electronics']),
            'delivery_name' => Delivery::create(['name' => 'Home Delivery']),
            'state_name' => State::create(['name' => 'Used']),
            'picture_id' => Picture::create()
        ]);
    }
}
