<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\PostRoom;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([                             //menggunakan factory faker diatas
        //     'name' => 'fajarfaz',
        //     'email' => 'fajarfaz@gmail.com',
        //     'password' => bcrypt('qweqwe')
        // ]);
        Category::create([
            'name' => 'Meeting',
            'slug' => 'meeting_rm'
        ]);
        Category::create([
            'name' => 'Customers Services',
            'slug' => 'cs_rm'
        ]);
        Category::create([
            'name' => 'Designer',
            'slug' => 'designer_rm'
        ]);

        PostRoom::factory(20)->create();

        // PostRoom::create([
        //     'title' => 'Meeting Room',
        //     'category_id' => '1',
        //     'excerpt' => 'Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin',
        //     'body' => '<p>Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindinHallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin </p>',
        //     'status' => '0',
        //     'user_id' => '1'
        // ]);
        // PostRoom::create([
        //     'title' => 'Customers Services Room',
        //     'category_id' => '1',
        //     'excerpt' => 'Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin',
        //     'body' => '<p>Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindinHallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin </p>',
        //     'status' => '0',
        //     'user_id' => '1'
        // ]);
        // PostRoom::create([
        //     'title' => 'Designer Room',
        //     'category_id' => '2',
        //     'excerpt' => 'Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin',
        //     'body' => '<p>Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindinHallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin </p>',
        //     'status' => '0',
        //     'user_id' => '1'
        // ]);
        //  PostRoom::create([
        //     'title' => 'Designer Room 2',
        //     'category_id' => '2',
        //     'excerpt' => 'Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin',
        //     'body' => '<p>Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindinHallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin </p>',
        //     'status' => '0',
        //     'user_id' => '1'
        // ]);
        //   PostRoom::create([
        //     'title' => 'Designer Room 3',
        //     'category_id' => '2',
        //     'excerpt' => 'Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin',
        //     'body' => '<p>Hallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindinHallo teman teman semua kembali lagi dengan saya , nahh jika kemarin kita udah membahas tentang apa itu konsep data binding di dalam vue.js , lalu juga sudah kita bahas bagaimana contohnya , serta kita juga bahas v-bind: sebagai perintah untuk melakukan data bindin </p>',
        //     'status' => '0',
        //     'user_id' => '1'
        // ]);
    }
}
