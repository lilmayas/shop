<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;

class TestCommand2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test2';

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
     * @return int
     */
    public function handle()
    {
        
        // Post::insert([
        //     ['title' => 'test title 2'],
        //     ['content' => 'test content 2'],
        // ]);
        // Tag::insert([
        //     ['name' => 'test name 1'],
        //     ['name' => 'test name 2'],
        // ]);
        return Command::SUCCESS;
    }
}