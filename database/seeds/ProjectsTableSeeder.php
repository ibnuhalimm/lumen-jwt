<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Project::create([
            'title' => 'Project Pertama',
            'body' => 'Lorem ipsum, body dari project pertama'
        ]));
    }
}
