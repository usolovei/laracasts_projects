<?php

namespace App\Console\Commands;

use App\Project;
use Illuminate\Console\Command;

class UpdateProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:update {id}';

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
        $project = Project::find($this->argument('id'));

        $this->info('ID: '. $project->id);
        $this->info('Title: '. $project->title);
        $this->info('Description: '. $project->description);

        if ($this->confirm('Do you want to change the title?')) {
            $project->title = $this->ask('Enter a new title:');
        }

        if ($this->confirm('Do you want to change the description?')) {
            $project->description = $this->ask('Enter a new description?');
        }

        $project->save();
        $this->info('Project has been updated!');

        $this->info('ID: '. $project->id);
        $this->info('Title: '. $project->title);
        $this->info('Description: '. $project->description);
    }
}
