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
        $users = factory(App\User::class, 30)->create();

        factory(App\Entry::class, 50)->create()->each(function ($entry) use ($users) {
            $entry->categories()->save(factory(App\Category::class)->make());
            factory(App\Comment::class, 10)
                ->create(
                    [
                        'entry_id' => $entry->id, 
                        'user_id' => $users->pluck('id')->random(), 
                    ]
                );
        });

        factory(App\Question::class, 10)->create()->each(function ($question) {
            $question->answer()->save(factory(App\Answer::class)->make());
        });
    }
}
