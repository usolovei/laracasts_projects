<?php

namespace App\Console\Commands;

use App\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CreateProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $title = $this->ask('What is the title of the project?');
        $description = $this->ask('What is the description?');

        $project = new Project(['title' => $title, 'description' => $description]);
        $project->save();

        $this->info('Project has been created!');
        $this->line(' ');

        $this->info('ID: '. $project->id);
        $this->info('Title: '. $project->title);
        $this->info('Description: '. $project->description);
    }
}
