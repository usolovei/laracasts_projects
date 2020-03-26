<?php

namespace App\Console\Commands;

use App\Project;
use Illuminate\Console\Command;

class ShowProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:show {id}';

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
        if(!@$this->argument('id') && !is_int($this->argument('id')))
        {
            $this->line('ID of the project is not specified or is invalid.');
            $this->line('Command syntax - project:show {id}');

        } else {
            $project = Project::find($this->argument('id'));
            $this->info('ID: '. $project->id);
            $this->info('Title: '. $project->title);
            $this->info('Description: '. $project->description);
        }
    }
}
