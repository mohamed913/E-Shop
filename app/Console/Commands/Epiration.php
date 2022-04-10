<?php

namespace App\Console\Commands;


use App\Models\User;
use Illuminate\Console\Command;

class Epiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to expire users automatically';

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
      $users=  User::WHERE('expire',0)->get();
      foreach($users as $user)
      {
          $user->update(['expire'=>1]);
      }

     // return 0;
    }
}
