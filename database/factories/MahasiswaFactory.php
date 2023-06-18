<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nim' => $this->faker->unique()->numerify('##########'),
            'Nama' => $this->faker->name(),
            'Kelas' => $this->faker->randomElement(['TI-2A', 'TI-2B', 'TI-2C', 'TI-2D', 'TI-2E', 'TI-2F', 'TI-2G', 'TI-2H', 'TI-2I']),
            'Jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi']),
            'No_Handphone' => $this->faker->numerify('##########'),
        ];
    }
}
