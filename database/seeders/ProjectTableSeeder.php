<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project;
            $startDate = $faker->dateTimeBetween('-5 years', 'now');
            $endDate = $faker->dateTimeBetween($startDate, 'now');
            $newProject->title = $faker->sentence(3);
            $newProject->description = $faker->paragraph(2);
            $newProject->client = $faker->name();
            $newProject->start_date = $startDate;
            $newProject->end_date = $endDate;
            $newProject->save();
        }
    }
}
