<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perjalanan;

class PerjalananFactory extends Factory
{
    protected $model = Perjalanan::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->numberBetween(1,9),
            'tanggal' => $this->faker->dateTimeBetween('-2 year', 'now'),
            'jam' => $this->faker->time(),
            'lokasi' => $this->faker->randomElement(['Bandung','Jakarta','Depok','Semarang']),
            'suhu' => $this->faker->numberBetween(31,40)
        ];
    }
}
