<?php

namespace App\Domains\TrafficEnforcement\Database\Factories;

use App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticle>
 */
class TrafficEnforcementArticleFactory extends Factory
{
    protected $model = TrafficEnforcementArticle::class;

    public function definition()
    {
        return [
            'code' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
        ];
    }
}
