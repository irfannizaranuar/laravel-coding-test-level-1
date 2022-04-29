<?php

namespace Database\Factories;
use App\Models\Event;
use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{

    protected $model = Event::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        return [
                'id' => Str::uuid(),
               'name' => $this->faker->name,
               'slug' => $slug,
            ];
    }
}
