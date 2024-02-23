<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(
        //     ProfileSeeder::class,
        // ) ila bghit n3ayt hta l seeders ProfileSeeder
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     // 'id'=>"1",
        //     // 'title'=>"post factory",
        //     'name'=>"factory factory factory factory",
        //     'email'=>"yassin@gmail.com",
        //     'password'=>"1111",
        // ]);
    }
}
