<?php

namespace Database\Factories;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ThreadFactory extends Factory
{

    protected $model = Thread::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        if (User::count() < 10) {
            User::factory()->count(20)->create();
        }

        return [
            'user_id' => function () {
                return User::query()->orderBy(DB::raw('RAND()'))->first()->id;
            },
            'title' => $this->faker->sentence(10),
            'body' => $this->faker->text(200),
        ];
    }
}
