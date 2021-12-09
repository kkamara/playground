<?php

namespace Database\Factories\DirFile\DirFile;

use App\Models\DirFile\Dir;
use App\Models\DirFile\DirFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DirFile::class;

    /**
     * Define the model's default state.
     * Note: Instances of Dir::class should be available.
     *
     * @return array
     */
    public function definition()
    {
        $randomDir = Dir::inRandomOrder()->first();
        $dir_id = null;
        if (null !== $randomDir) {
            $dir_id = $randomDir->id;
        }
        return [
            'dir_id' => $dir_id,
            'name' => $this->faker->name
        ];
    }
}
