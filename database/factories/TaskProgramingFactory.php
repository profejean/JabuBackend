<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\taskPrograming>
 */
class TaskProgramingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'task_id' => 1,
            'type' => $this->faker->randomElement($array = array ('everyDay','everyMonday','Every-M-W-F','firstFiveDayMonth','fiveDayMonthMarch')),
            'date' => dateTimeBetween('now', '+1 days'),
            'title' => $this->faker->word,
            'check' => 'New Task',
            'content' => $this->faker->sentence,
            'end' => $this->faker->dateTimeBetween('now', '+1 weeks'),
        ];
    }
}
