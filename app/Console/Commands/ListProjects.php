<?php

namespace App\Console\Commands;

use App\Project;
use Illuminate\Console\Command;

class ListProjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists all projects';

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
        $headers = ['id', 'title', 'description'];
        $projects = Project::all(['id', 'title', 'description'])->toArray();
        $this->table($headers, $projects);
    }
}
