<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'System Admin',
            'email' => 'mostak.shahid@gmail.com',
            'admin' => 1,
            'password' => bcrypt('123456789')
        ]);
        App\User::create([
            'name' => 'Md. Mostak Apu',
            'email' => 'mostak.apu@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        factory(App\User::class,7)->create();
    }
}
