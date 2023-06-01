<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use App\Models\Vocher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sub_total = fake()->numberBetween(100, 10000);
        $tax = $sub_total * .01;
        $total = $sub_total + $tax;
        return [
            'user_id' => User::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'vocher_id' => Vocher::all()->random()->id,
            'subtotal' => $sub_total,
            'total' => $total,
            'taxes' => $tax,
        ];
    }
}
