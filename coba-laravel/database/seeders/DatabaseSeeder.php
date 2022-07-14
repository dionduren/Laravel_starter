<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Datas;

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

        User::create([
            'name' => 'Dion Alamsah',
            'email' => 'dionduren@yahoo.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Dody',
            'email' => 'didi@yahoo.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Datas::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum tenetur, minima necessitatibus perspiciatis quasi adipisci expedita quaerat fuga aliquam atque?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident illum ut id aut sapiente temporibus tempora culpa impedit ad a eligendi eaque, vero libero, nesciunt quam nemo voluptatem. Porro, enim dolores! Nisi, aliquam. Enim, necessitatibus. A, ea accusamus est, atque nisi deserunt quam, reprehenderit odit voluptas officia expedita assumenda laborum fuga iusto error nemo! Excepturi ipsum beatae recusandae. Laboriosam eius voluptas commodi quod nobis tempore illo? Dolor natus, ipsum recusandae sapiente qui non voluptate commodi eum laboriosam. Eveniet modi ratione consequatur perspiciatis, numquam exercitationem quod adipisci aut velit perferendis quae, aperiam praesentium quia consectetur ut cupiditate vitae voluptas. Culpa, accusantium!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Datas::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum tenetur, minima necessitatibus perspiciatis quasi adipisci expedita quaerat fuga aliquam atque?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident illum ut id aut sapiente temporibus tempora culpa impedit ad a eligendi eaque, vero libero, nesciunt quam nemo voluptatem. Porro, enim dolores! Nisi, aliquam. Enim, necessitatibus. A, ea accusamus est, atque nisi deserunt quam, reprehenderit odit voluptas officia expedita assumenda laborum fuga iusto error nemo! Excepturi ipsum beatae recusandae. Laboriosam eius voluptas commodi quod nobis tempore illo? Dolor natus, ipsum recusandae sapiente qui non voluptate commodi eum laboriosam. Eveniet modi ratione consequatur perspiciatis, numquam exercitationem quod adipisci aut velit perferendis quae, aperiam praesentium quia consectetur ut cupiditate vitae voluptas. Culpa, accusantium!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Datas::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum tenetur, minima necessitatibus perspiciatis quasi adipisci expedita quaerat fuga aliquam atque?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident illum ut id aut sapiente temporibus tempora culpa impedit ad a eligendi eaque, vero libero, nesciunt quam nemo voluptatem. Porro, enim dolores! Nisi, aliquam. Enim, necessitatibus. A, ea accusamus est, atque nisi deserunt quam, reprehenderit odit voluptas officia expedita assumenda laborum fuga iusto error nemo! Excepturi ipsum beatae recusandae. Laboriosam eius voluptas commodi quod nobis tempore illo? Dolor natus, ipsum recusandae sapiente qui non voluptate commodi eum laboriosam. Eveniet modi ratione consequatur perspiciatis, numquam exercitationem quod adipisci aut velit perferendis quae, aperiam praesentium quia consectetur ut cupiditate vitae voluptas. Culpa, accusantium!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Datas::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum tenetur, minima necessitatibus perspiciatis quasi adipisci expedita quaerat fuga aliquam atque?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident illum ut id aut sapiente temporibus tempora culpa impedit ad a eligendi eaque, vero libero, nesciunt quam nemo voluptatem. Porro, enim dolores! Nisi, aliquam. Enim, necessitatibus. A, ea accusamus est, atque nisi deserunt quam, reprehenderit odit voluptas officia expedita assumenda laborum fuga iusto error nemo! Excepturi ipsum beatae recusandae. Laboriosam eius voluptas commodi quod nobis tempore illo? Dolor natus, ipsum recusandae sapiente qui non voluptate commodi eum laboriosam. Eveniet modi ratione consequatur perspiciatis, numquam exercitationem quod adipisci aut velit perferendis quae, aperiam praesentium quia consectetur ut cupiditate vitae voluptas. Culpa, accusantium!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
