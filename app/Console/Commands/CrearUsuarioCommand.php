<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Importa la clase Hash

class CrearUsuarioCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {password} {role_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nombre = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');
        $role_id = (int) ($this->argument('role_id'));

        $this->info("Name: $nombre");
    $this->info("Email: $email");
    $this->info("Password: $password");
    $this->info("Role ID: $role_id");
    
        User::create([
            'name'=>$nombre,
            'email'=>$email,
            'password'=>Hash::make($password),
            'role_id'=> $role_id,
        ]);
        $this->info('User successfully created with Email: ' .$email.', and Password:' .$password);
    }
}
