<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Web', 'Mobile', 'Design', 'Marketing', 'Research'];

        Project::all()->each(function ($project) use ($categories) {
            $project->category = $categories[array_rand($categories)];
            $project->save();
        });
    }
}
