<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Lectures
        DB::table('lectures')->insert([
            'name' => 'Matematik',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lectures')->insert([
            'name' => 'Fizik',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lectures')->insert([
            'name' => 'Geometri',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Lessons
        DB::table('lessons')->insert([
            'name' => 'Köklü Sayılar',
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Üslü Sayılar',
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Trigonometri',
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Vektörler',
            'lecture_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Momentum',
            'lecture_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Enerji',
            'lecture_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Alan',
            'lecture_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Hacim',
            'lecture_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Açılar',
            'lecture_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Users
        DB::table('users')->insert([
            'name' => 'Bahadır Bayraktar',
            'email' => 'baho908@gmail.com',
            'role' => 1,
            'lecture_id' => 1,
            'username' => 'baha',
            'email_verified_at' => now(),
            'password' => '$2y$10$qwoFlF83uv1Y6eYzJSaFzOlYsEFSahNnXHQhZSQ5wU.d55Gw12jpG', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Emre Demir',
            'email' => 'emre@gmail.com',
            'role' => 1,
            'lecture_id' => 2,
            'username' => 'emre',
            'email_verified_at' => now(),
            'password' => '$2y$10$qwoFlF83uv1Y6eYzJSaFzOlYsEFSahNnXHQhZSQ5wU.d55Gw12jpG', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Onur Göz',
            'email' => 'onur@gmail.com',
            'username' => 'onur',
            'email_verified_at' => now(),
            'password' => '$2y$10$qwoFlF83uv1Y6eYzJSaFzOlYsEFSahNnXHQhZSQ5wU.d55Gw12jpG', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Sercan Bayrambey',
            'email' => 'sercan@gmail.com',
            'username' => 'sercan',
            'email_verified_at' => now(),
            'password' => '$2y$10$qwoFlF83uv1Y6eYzJSaFzOlYsEFSahNnXHQhZSQ5wU.d55Gw12jpG', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Mert Dürüm',
            'email' => 'mert@gmail.com',
            'username' => 'mert',
            'email_verified_at' => now(),
            'password' => '$2y$10$qwoFlF83uv1Y6eYzJSaFzOlYsEFSahNnXHQhZSQ5wU.d55Gw12jpG', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Questions and Choices
        //---------------------------------1
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Kök 81 nedir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 1,
            'text' => '6',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 1,
            'text' => '7',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 1,
            'text' => '8',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 1,
            'text' => '9',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------2
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '2^5 nedir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 2,
            'text' => '33',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 2,
            'text' => '32',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 2,
            'text' => '34',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 2,
            'text' => '35',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------3
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'sin(90) nedir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 3,
            'text' => '2',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 3,
            'text' => '-1',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 3,
            'text' => '1',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 3,
            'text' => '0',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------4
        DB::table('questions')->insert([
            'lesson_id' => 4,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'birbirine dik 4 ve 3 birimlik vektörlerin birleşiminin büyüklüğü nedir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 4,
            'text' => '5',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 4,
            'text' => '8',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 4,
            'text' => '12',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 4,
            'text' => '2',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------5
        DB::table('questions')->insert([
            'lesson_id' => 5,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Momentum?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 5,
            'text' => '5',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 5,
            'text' => '8',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 5,
            'text' => '12',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 5,
            'text' => '2',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------6
        DB::table('questions')->insert([
            'lesson_id' => 6,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Enerji?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 6,
            'text' => 'at',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 6,
            'text' => 'test',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 6,
            'text' => 'esek',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 6,
            'text' => 'yanlış',
            'image' => '/img/test.svg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Exams->questions
        //--------------------------1
        DB::table('exams')->insert([
            'user_id' => 3,
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 1,
            'question_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 1,
            'question_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //--------------------------2
        DB::table('exams')->insert([
            'user_id' => 3,
            'lecture_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 2,
            'question_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 2,
            'question_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //--------------------------3
        DB::table('exams')->insert([
            'user_id' => 3,
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 3,
            'question_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 3,
            'question_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //--------------------------4
        DB::table('exams')->insert([
            'user_id' => 4,
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 4,
            'question_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 4,
            'question_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //--------------------------5
        DB::table('exams')->insert([
            'user_id' => 4,
            'lecture_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 5,
            'question_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('answers')->insert([
            'exam_id' => 5,
            'question_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        
    }
}
