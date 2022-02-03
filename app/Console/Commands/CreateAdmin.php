<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new Admin';

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
        $name = $this->ask("What's the admin name?");
        $username = $this->ask("What's the admin username?");
        $email = $this->ask("What's the admin email?");
        $password = $this->secret("What's the admin password?");


        Admin::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        $this->info("Admin Created Successfully");
    }
}
