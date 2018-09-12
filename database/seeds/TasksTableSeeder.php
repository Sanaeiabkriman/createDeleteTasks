<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class, 20)->create();
        
    }
    public function index()
    {
        $tasks=Task::all();
        return view('tasks', compact('tasks')); 
    }
}
