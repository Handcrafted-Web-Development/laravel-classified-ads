<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\State;
use App\Models\User;
use App\Models\Ad;

class ThirdClassifiedAd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::factory()->create([
            'title' => "Canapé d'angle en cuir véritable",
            'description' => "Canapé d'angle en cuir véritable, couleur marron, en excellent état. Parfait pour le salon ou le bureau.",
            'price' => 700,
            'year' => 2017,
            'size' => 240,
            'brand' => "Canape Tissu",
            'due_date' => now(),
            'guarantee' => "Garantie 1 an",
            'author_id' => User::factory(),
            'category_name' => Category::create(['name' => 'Furniture']),
            'delivery_name' => Delivery::create(['name' => 'Other']),
            'state_name' => State::create(['name' => 'Like new']),
            'picture_id' => Picture::create()
        ]);
    }
}
