<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
         $user = User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $personalCategory = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $workCategory = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $hobbyCategory = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        //TODO: Use factories even for these
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personalCategory->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'First post quick text.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $workCategory->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Second post quick text.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbyCategory->id,
            'title' => 'My Hobby Post',
            'slug' => 'my-hobby-post',
            'excerpt' => 'Second post quick text.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        ]);

        Post::factory()->create();

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
