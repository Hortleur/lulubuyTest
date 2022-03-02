<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'product_id' => $this->faker->randomNumber(7, true),
            'product_model' => $this->faker->bothify('??-####-?????????'),
            'product_model_alt'=> $this->faker->bothify('??-####'),
            'product_brand'=> $this->faker->company(),
            'BarCode'=> $this->faker->ean13(),
            'product_stock'=> $this->faker->numberBetween(-100, 300),
            'product_price'=> $this->faker->randomFloat(2, 0, 100)
        ];
    }
}
