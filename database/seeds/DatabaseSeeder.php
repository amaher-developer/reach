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

        \App\Modules\Ad\Models\Ad::truncate();
        \App\Modules\Ad\Models\Tag::truncate();
        \App\Modules\Ad\Models\Category::truncate();
        \App\Modules\Ad\Models\AdTag::truncate();


        // $this->call(UserSeeder::class);
        factory(\App\Modules\Ad\Models\Ad::class, 50)->create();
        factory(\App\Modules\Ad\Models\Tag::class, 50)->create();
        factory(\App\Modules\Ad\Models\Category::class, 50)->create();
        factory(\App\Modules\Ad\Models\AdTag::class, 200)->create();
    }
}
