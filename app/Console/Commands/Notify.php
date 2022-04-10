<?php

namespace App\Console\Commands;


use App\Models\User;
use Illuminate\Console\Command;
use App\Mail\NotifyEmail;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all users';

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
        $emails=User::select('email')->get();
        $arrData=['title' => 'programming' , 'body'=>'php'];
        foreach($emails as $email)
        {
            Mail::To($email)->send(new NotifyEmail($arrData));

        }
       // return 0;
    }
}
