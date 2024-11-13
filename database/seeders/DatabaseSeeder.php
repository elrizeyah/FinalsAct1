<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)
            ->has(Profile::factory())
            ->create();

        Course::factory(5)->create();

        Course::all()->each(function($course) {
            $course->users()->attach(User::inRandomOrder()->take(4)->pluck('id'));
        });
    }
}