<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class PostExportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'post:export';

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
        $filePath = storage_path('posts.txt');
        
        $content = '';
        foreach(Post::all() as $post) {
            $content .= $post->title . ': ' .
             $post->tags()->get()->implode('name', ', ') . "\t ";
        }

        file_put_contents($filePath, $content);
        return Command::SUCCESS;
    }
}