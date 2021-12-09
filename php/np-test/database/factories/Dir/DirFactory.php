<?php

namespace Database\Factories\Dir;

use App\Models\Dir\Dir;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dir::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomDir = Dir::inRandomOrder()->first();
        $parent_id = null;
        if (
            null !== $randomDir
            && mt_rand(0, 1) !== 0
        ) {
            $parent_id = $randomDir->id;
        }
        return [
            'name' => $this->faker->name,
            'parent_id' => $parent_id
        ];
    }
}
