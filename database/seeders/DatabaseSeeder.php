<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::truncate();
        Category::truncate();
        Post::truncate();
        $user = User::create([
            'name' => 'Muzaffer Dler',
            'email' => 'muzaffer.dler@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678Aa'),
            'remember_token' => Str::random(10),
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames ac turpis egestas. Vulputate mi sit amet mauris commodo quis imperdiet massa. Purus gravida quis blandit turpis. Ut eu sem integer vitae justo eget magna fermentum. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Vitae sapien pellentesque habitant morbi tristique senectus. Quisque egestas diam in arcu cursus euismod quis viverra. Augue lacus viverra vitae congue eu consequat. Maecenas pharetra convallis posuere morbi leo urna.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames ac turpis egestas. Vulputate mi sit amet mauris commodo quis imperdiet massa. Purus gravida quis blandit turpis. Ut eu sem integer vitae justo eget magna fermentum. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Vitae sapien pellentesque habitant morbi tristique senectus. Quisque egestas diam in arcu cursus euismod quis viverra. Augue lacus viverra vitae congue eu consequat. Maecenas pharetra convallis posuere morbi leo urna.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames ac turpis egestas. Vulputate mi sit amet mauris commodo quis imperdiet massa. Purus gravida quis blandit turpis. Ut eu sem integer vitae justo eget magna fermentum. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Vitae sapien pellentesque habitant morbi tristique senectus. Quisque egestas diam in arcu cursus euismod quis viverra. Augue lacus viverra vitae congue eu consequat. Maecenas pharetra convallis posuere morbi leo urna.'
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
