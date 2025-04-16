<?php

namespace Database\Factories;

use App\Models\Lahan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LahanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lahan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'desa' => $this->faker->word,
        'tanaman' => $this->faker->word,
        'tanggal_penanaman' => $this->faker->word,
        'tanggal_panen' => $this->faker->word,
        'latitude' => $this->faker->word,
        'longitude' => $this->faker->word,
        'luas_lahan' => $this->faker->randomDigitNotNull,
        'petani_id' => $this->faker->word,
        'jenis_tanaman_id' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
