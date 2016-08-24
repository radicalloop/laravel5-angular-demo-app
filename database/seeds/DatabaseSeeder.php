<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->call(JokesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}

/*
use App\Joke;

class JokesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,30) as $index)
        {
            Joke::create([
                'body' => $faker->paragraph($nbSentences = 3),
                'user_id' =>$faker->numberBetween($min = 1, $max = 5)
            ]);
        }
    }
}

use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,5) as $index)
        {
            User::create([
                'name' => $faker->userName,
                'email' =>$faker->email,
                'password' =>bcrypt('secret')
            ]);
        }
    }
}
*/