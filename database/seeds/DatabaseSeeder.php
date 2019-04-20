<?php

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
        factory(App\User::class)->create()->each(function($u) {
            $u->units()->save(
                factory(App\Unit::class)->make()
            );
        });
    }
}
