<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kelas;

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
            'Jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi']),
            'No_Handphone' => $this->faker->numerify('##########'),
            'kelas_id' => Kelas::all()->random()->id,
        ];
    }
}
