<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'User Konselor',
            'username' => 'konselor',
            'email' => 'user@gmail.com',
            'password' => bcrypt('aaaaaaaa'),
            'level' => 'konselor',

        ]);
        User::factory()->create([
            'name' => 'User Konseli',
            'username' => 'konseli',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('aaaaaaaa'),
            'level' => 'konseli',

        ]);

        Category::create([
            'name' => 'Stress',
            'slug' => 'stress'
        ]);
        Category::create([
            'name' => 'Depresi',
            'slug' => 'depresi'
        ]);
        Category::create([
            'name' => 'Kecemasan',
            'slug' => 'kecemasan'
        ]);
        Category::create([
            'name' => 'Toxic Relationship',
            'slug' => 'toxic relationship'
        ]);

        Post::create([
            'title' => 'contoh judul 1',
            'slug'  => 'contoh-judul-1',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'Control the stack order (or three-dimensional positioning) of an element in Tailwind, regardless of order it has been displayed, using the z-{index} utilities.',
            'body' => 'Using negative values
            To use a negative z-index value, prefix the class name with a dash to convert it to a negative value.
            <div class="-z-50">
              <!-- ... -->
            </div>
            Applying conditionally
            Hover, focus, and other states
            Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For example, use hover:z-50 to only apply the z-50 utility on hover.
            <div class="z-0 hover:z-50">
              <!-- ... -->
            </div>
            
            For a complete list of all available state modifiers, check out the Hover, Focus, & Other States documentation.
            ​
            Breakpoints and media queries
            
            You can also use variant modifiers to target media queries like responsive breakpoints, dark mode, prefers-reduced-motion, and more. For example, use md:z-50 to apply the z-50 utility at only medium screen sizes and above.'
        ]);

        Post::create([
            'title' => 'contoh judul 2',
            'slug'  => 'contoh-judul-2',
            'category_id' => 2,
            'user_id' => 1,
            'excerpt' => 'Control the stack order (or three-dimensional positioning) of an element in Tailwind, regardless of order it has been displayed, using the z-{index} utilities.',
            'body' => 'Using negative values
            To use a negative z-index value, prefix the class name with a dash to convert it to a negative value.
            <div class="-z-50">
              <!-- ... -->
            </div>
            Applying conditionally
            Hover, focus, and other states
            Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For example, use hover:z-50 to only apply the z-50 utility on hover.
            <div class="z-0 hover:z-50">
              <!-- ... -->
            </div>
            
            For a complete list of all available state modifiers, check out the Hover, Focus, & Other States documentation.
            ​
            Breakpoints and media queries
            
            You can also use variant modifiers to target media queries like responsive breakpoints, dark mode, prefers-reduced-motion, and more. For example, use md:z-50 to apply the z-50 utility at only medium screen sizes and above.'
        ]);

        Post::create([
            'title' => 'contoh judul 3',
            'slug'  => 'contoh-judul-3',
            'category_id' => 3,
            'user_id' => 1,
            'excerpt' => 'Control the stack order (or three-dimensional positioning) of an element in Tailwind, regardless of order it has been displayed, using the z-{index} utilities.',
            'body' => 'Using negative values
            To use a negative z-index value, prefix the class name with a dash to convert it to a negative value.
            <div class="-z-50">
              <!-- ... -->
            </div>
            Applying conditionally
            Hover, focus, and other states
            Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For example, use hover:z-50 to only apply the z-50 utility on hover.
            <div class="z-0 hover:z-50">
              <!-- ... -->
            </div>
            
            For a complete list of all available state modifiers, check out the Hover, Focus, & Other States documentation.
            ​
            Breakpoints and media queries
            
            You can also use variant modifiers to target media queries like responsive breakpoints, dark mode, prefers-reduced-motion, and more. For example, use md:z-50 to apply the z-50 utility at only medium screen sizes and above.'
        ]);

        Post::create([
            'title' => 'contoh judul 4',
            'slug'  => 'contoh-judul-4',
            'category_id' => 4,
            'user_id' => 1,
            'excerpt' => 'Control the stack order (or three-dimensional positioning) of an element in Tailwind, regardless of order it has been displayed, using the z-{index} utilities.',
            'body' => 'Using negative values
            To use a negative z-index value, prefix the class name with a dash to convert it to a negative value.
            <div class="-z-50">
              <!-- ... -->
            </div>
            Applying conditionally
            Hover, focus, and other states
            Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For example, use hover:z-50 to only apply the z-50 utility on hover.
            <div class="z-0 hover:z-50">
              <!-- ... -->
            </div>
            
            For a complete list of all available state modifiers, check out the Hover, Focus, & Other States documentation.
            ​
            Breakpoints and media queries
            
            You can also use variant modifiers to target media queries like responsive breakpoints, dark mode, prefers-reduced-motion, and more. For example, use md:z-50 to apply the z-50 utility at only medium screen sizes and above.'
        ]);
    }
}
