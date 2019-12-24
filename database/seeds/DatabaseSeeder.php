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
            'name' => 'Çarpanlara Ayırma',
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Olasılık',
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Denklemler',
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('lessons')->insert([
            'name' => 'Eşitsizlikler',
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
        /*
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
        ]); */

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
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Hangi seçenekte verilen sayı tam kare sayıdır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 1,
            'text' => '15',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 1,
            'text' => '25',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 1,
            'text' => '35',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 1,
            'text' => '45',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------2
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '256 sayısının karekökü aşağıdakilerden kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 2,
            'text' => '12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 2,
            'text' => '14',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 2,
            'text' => '16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 2,
            'text' => '18',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------3
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Kareleri 144 ve 81 olan sayıların toplamı kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 3,
            'text' => '21',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 3,
            'text' => '20',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 3,
            'text' => '19',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 3,
            'text' => '18',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------4
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√49 işleminin sonucu kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 4,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 4,
            'text' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 4,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 4,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------5
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√576 sayısının değeri hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 5,
            'text' => '26',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 5,
            'text' => '25',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 5,
            'text' => '24',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 5,
            'text' => '23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------6
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√64 + √121 işleminin sonucu aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 6,
            'text' => '23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 6,
            'text' => '17',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 6,
            'text' => '21',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 6,
            'text' => '19',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------7
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√45 sayısına en yakın doğal sayı aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 7,
            'text' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 7,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 7,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 7,
            'text' => '9',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------8
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√240 sayısından küçük, en büyük tam sayı kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 8,
            'text' => '14',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 8,
            'text' => '15',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 8,
            'text' => '16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 8,
            'text' => '17',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------9
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıdaki sayılardan hangisi rasyonel sayı değildir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 9,
            'text' => '√25',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 9,
            'text' => '√49',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 9,
            'text' => '√72',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 9,
            'text' => '√81',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------10
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√40+a   ifadesinin rasyonel sayı olması için a yerine yazılabilecek en küçük doğal sayı kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 10,
            'text' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 10,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 10,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 10,
            'text' => '9',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------11
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '−√16 sayısı için aşağıdakilerden hangisi yanlıştır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 11,
            'text' => 'Gerçek sayıdır.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 11,
            'text' => 'İrrasyonel sayıdır.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 11,
            'text' => 'Tam sayıdır.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 11,
            'text' => 'Rasyonel sayıdır.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------12
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '• √85 sayısına en yakın tam sayı x dir.<br>• √180 sayısına en yakın sayı y dir.<br>Yukarıdaki bilgilere göre x + y kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 12,
            'text' => '20',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 12,
            'text' => '21',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 12,
            'text' => '22',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 12,
            'text' => '23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------13
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '−√148 sayısı hangi seçenekteki iki tam sayının arasındadır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 13,
            'text' => '-11 ile -12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 13,
            'text' => '-12 ile -13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 13,
            'text' => '-10 ile -11',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 13,
            'text' => '-13 ile -14',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------14
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '√? sembolünün içine aşağıdaki sayılardan hangisi yazılırsa sonucu rasyonel sayı olmaz?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 14,
            'text' => '9',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 14,
            'text' => '16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 14,
            'text' => '25',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 14,
            'text' => '62',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------15
        DB::table('questions')->insert([
            'lesson_id' => 1,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Alanı 49 br<sup>2</sup> olan bir karenin bir kenar uzunluğu kaç br\'dir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 15,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 15,
            'text' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 15,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 15,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------16
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '3<sup>-3</sup> ifadesinin eşiti aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 16,
            'text' => '-1/27',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 16,
            'text' => '1/27',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 16,
            'text' => '-27',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 16,
            'text' => '27',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------17
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '(-4)<sup>3</sup> işleminin sonucu aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 17,
            'text' => '64',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 17,
            'text' => '128',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 17,
            'text' => '-64',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 17,
            'text' => '-128',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------18
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '-6<sup>2</sup> işleminin sonucu aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 18,
            'text' => '-36',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 18,
            'text' => '36',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 18,
            'text' => '64',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 18,
            'text' => '-64',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------19
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '1. (-1)<sup>13</sup> = -1<br>2. (-2)<sup>3</sup><br>3. 3<sup>2</sup> = 9<br>Yukarıdakilerden hangisi ya da hangileri doğrudur?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 19,
            'text' => 'I',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 19,
            'text' => 'I - III',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 19,
            'text' => 'II - III',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 19,
            'text' => 'I - II - III',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------20
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Bir okulda toplanan 2<sup>5</sup> ton atık kâğıt geri dönüşüme gönderilerek 4<sup>4</sup> ağaç kesilmekten kurtarılmıştır. Buna göre 1 ton atık kâğıt ile kaç ağaç kesilmekten kurtarılabilir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 20,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 20,
            'text' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 20,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 20,
            'text' => '16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------21
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '2<sup>7</sup>. 2<sup>5</sup> işleminin sonucu aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 21,
            'text' => '2<sup>9</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 21,
            'text' => '2<sup>10</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 21,
            'text' => '2<sup>11</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 21,
            'text' => '2<sup>12</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------22
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '14<sup>9</sup>  / 14<sup>5</sup> işleminin sonucu kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 22,
            'text' => '14<sup>6</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 22,
            'text' => '14<sup>5</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 22,
            'text' => '14<sup>4</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 22,
            'text' => '14<sup>3</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------23
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '23\'ün kaçıncı kuvvetinin değeri 1\'e eşittir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 23,
            'text' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 23,
            'text' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 23,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 23,
            'text' => '23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------24
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Beş üssü altının beşinci kuvveti aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 24,
            'text' => '5<sup>27</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 24,
            'text' => '5<sup>30</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 24,
            'text' => '5<sup>10</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 24,
            'text' => '5<sup>11</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------25
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '(0,4)<sup>-1</sup> işleminin sonucu aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 25,
            'text' => '2/5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 25,
            'text' => '5/3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 25,
            'text' => '5/2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 25,
            'text' => '3/5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------26
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '2<sup>8</sup> tane kalemin tamamı 8 çocuğa eşit sayıda dağıtılacağına göre her bir çocuğa kaç kalem düşer?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 26,
            'text' => '32',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 26,
            'text' => '16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 26,
            'text' => '48',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 26,
            'text' => '64',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------27
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '250.5<sup>2</sup>  / 5<sup>5</sup> işleminin sonucu aşağıdakilerden hangisidir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 27,
            'text' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 27,
            'text' => '25',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 27,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 27,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------28
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıdakilerden hangisinin sonucu negatiftir?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 28,
            'text' => '(-499)<sup>-3</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 28,
            'text' => '-(-499)<sup>3</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 28,
            'text' => '(499)<sup>21</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 28,
            'text' => '(-499)<sup>22</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------29
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '4.3<sup>2</sup> + 3<sup>2</sup> işleminin sonucu kaçtır?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 29,
            'text' => '3<sup>2</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 29,
            'text' => '2. 3<sup>2</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 29,
            'text' => '4. 3<sup>2</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 29,
            'text' => '5. 3<sup>2</sup>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------30
        DB::table('questions')->insert([
            'lesson_id' => 2,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '2<sup>0</sup>−2<sup>1</sup>+3.2<sup>-1</sup> işleminin sonucu kaçtır ?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 30,
            'text' => '-1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 30,
            'text' => '1/2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 30,
            'text' => '-1/2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 30,
            'text' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------31
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıdakilerden hangisi 42 sayısının asal çarpanı değildir ?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 31,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 31,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 31,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 31,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------32
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıdakilerden hangisi 102 sayısının asal çarpanı değildir ?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 32,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 32,
            'text' => '9',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 32,
            'text' => '17',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 32,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------33
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Asal çarpanları 2-3-5-7 olan sayı aşağıdakilerden hangisidir ?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 33,
            'text' => '210',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 33,
            'text' => '240',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 33,
            'text' => '232',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 33,
            'text' => '205',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //---------------------------------34
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Boyutları 5 cm, 7 cm ve 10 cm olan tuğlalardan oluşturulan küpün bir kenarı en az kaç cm\'dir ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 34,
            'text' => '30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 34,
            'text' => '35',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 34,
            'text' => '40',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 34,
            'text' => '45',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------35
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '150 m ve 200 m uzunluğundaki iki tel, eşit uzunlukta en büyük parçalara ayrılmak isteniyor. Buna göre bu parçaların birinin uzunluğu kaç metredir ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 35,
            'text' => '20',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 35,
            'text' => '30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 35,
            'text' => '40',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 35,
            'text' => '50',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------36
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'D',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Kemal 1\' den 100\' e kadar olan sayılardan 12\'nin Katlarını Tuğçe ise 1\' den 100\' e kadar olan sayılardan 16\' nın katlarını defterine yazıyor. Buna göre Kemal ve Tuğçe\'nin yazdığı sayılardan Kaç tanesi aynıdır?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 36,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 36,
            'text' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 36,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 36,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------37
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '90\'nın kaç farklı pozitif asal çarpanı vardır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 37,
            'text' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 37,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 37,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 37,
            'text' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------38
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıdakilerden hangisi 48 ile aralarında asaldır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 38,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 38,
            'text' => '6',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 38,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 38,
            'text' => '9',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------39
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıda verilen sayılardan hangisi aralarında asaldır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 39,
            'text' => '11 ile 13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 39,
            'text' => '7 ile 49',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 39,
            'text' => '42 ile 44',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 39,
            'text' => '32 ile 64',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------40
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'B',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '• 25 ve 50<br>• 15 ve 29<br>• 13 ve 33<br>• 21 ve 42<br>Yukarıda verilen sayılardan kaç tanesi aralarında asal değildir ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 40,
            'text' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 40,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 40,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 40,
            'text' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------41
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '56 ile aşağıdaki sayılardan hangisi aralarında asaldır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 41,
            'text' => '41',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 41,
            'text' => '34',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 41,
            'text' => '28',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 41,
            'text' => '16',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------42
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'A',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Asal çarpanları 2 ve 3 olan tek basamaklı kaç doğal sayı vardır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 42,
            'text' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 42,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 42,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 42,
            'text' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------43
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => '246 sayısının kaç tane asal çarpanı vardır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 43,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 43,
            'text' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 43,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 43,
            'text' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------44
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'A = 2<sup>3</sup>. 3<sup>2</sup>. 6<sup>2</sup> olduğuna göre A sayısının kaç tane asal çarpanı vardır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 44,
            'text' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 44,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 44,
            'text' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 44,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //---------------------------------45
        DB::table('questions')->insert([
            'lesson_id' => 3,
            'correct_answer' => 'C',
            'image' => '/img/undraw_posting_photo.svg',
            'text' => 'Aşağıda verilen sayılardan hangisinin bir tane asal çarpanı vardır ?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'A',
            'question_id' => 45,
            'text' => '123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 45,
            'text' => '132',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 45,
            'text' => '141',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 45,
            'text' => '153',
            'created_at' => now(),
            'updated_at' => now(),
        ]);//---------------------------------46
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'C',
         'text' => "Bir küpün yüzlerine birer birer SALDIRI kelimesinin harfleri yazılmıştır. Küp atıldığındaki olası durumlar hangi seçenekte verilmiştir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 46,
         'text' => "S, L, D, R",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 46,
         'text' => "S, A, L, D, R",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 46,
         'text' => "S, A, L, D, I, R, I",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 46,
         'text' => "S, L, D, I, R, I",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------47
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'B',
         'text' => "Bir madeni para atıldığındaki olası durumların sayısı aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 47,
         'text' => "1",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 47,
         'text' => "2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 47,
         'text' => "3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 47,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------48
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'D',
         'text' => "Hangi meslek grubundan rastgele seçilen bir kişinin iş sağlığı ve güvenliği uzmanı olma olasılığı en yüksektir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 48,
         'text' => "İşçi",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 48,
         'text' => "Kaptan",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 48,
         'text' => "Öğretmen",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 48,
         'text' => "Mühendis",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------49
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'A',
         'text' => "İki tane hilesiz zar atıldığında üste gelen sayıların toplamının 7 gelme olasılığı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 49,
         'text' => "2/12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 49,
         'text' => "1/2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 49,
         'text' => "1/5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 49,
         'text' => "1/8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------50
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'A',
         'text' => "Bir torbada bulunan tek ve asal sayılı toplarla yapılan teorik olasılık hesaplamasında çekilen topun tek sayı gelme olasılığı 13, asal sayı gelme olasılığı 34 ve hem tek ve hem asal sayı gelme olasılığı 16 ise, tek ve asal sayılı top çekme olasılığı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 50,
         'text' => "5/12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 50,
         'text' => "1/12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 50,
         'text' => "1/3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 50,
         'text' => "11/25",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------51
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'C',
         'text' => "Bir torbada 3 kırmızı, 2 beyaz bilye vardır. Rastgele iki bilye çekildiğinde en az birinin beyaz gelme olasılığı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 51,
         'text' => "7/10",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 51,
         'text' => "3/5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 51,
         'text' => "2/5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 51,
         'text' => "3/10",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------52
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'B',
         'text' => "Bir öğrencinin bütünleme testini geçmesi için 25 sorudan 16 tanesini cevaplaması gerekmektedir. Testin ilk beş sorusunun zorunlu olarak cevaplanması istendiğine göre bu öğrenci cevaplayacağı soruları kaç farklı şekilde seçebilir?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 52,
         'text' => "C(25,16)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 52,
         'text' => "P(25,16)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 52,
         'text' => "P(20,11)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 52,
         'text' => "C(20,11)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------53
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'B',
         'text' => "Bir zarın havaya atılması deneyi ile ilgili ifadelerden hangisi teorik olarak yanlıştır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 53,
         'text' => "Zarın üst yüzeyine çift sayı gelme olasılığı 12 dir.
                                        ",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 53,
         'text' => "Zarın üst yüzeyine 4'den büyük bir sayı gelme olasılığı 12 dir.
                                        ",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 53,
         'text' => "Zarın üst yüzeyine 5 gelme olasılığı 16 dır.
                                        ",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 53,
         'text' => "Zarın üst yüzüne asal sayı gelme olasılığı 12 dir.
                                        ",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------54
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'A',
         'text' => "Okay, okulun önünden geçen arabaları markala­rına göre sayıyor. 2 saat içinde 5 Tofaş, 6 Opel, 9 Honda ve 4 Re­nault markalı araç geçtiğine göre, deneysel ola­rak sıradaki aracın Opel olma olasılığı kaçtır?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 54,
         'text' => "14",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 54,
         'text' => "15",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 54,
         'text' => "12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 54,
         'text' => "34",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------55
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'D',
         'text' => "Mehmet, hilesiz bir zarın çift sayı gelme olasılığı­nı deneysel olarak hesaplamak için 40 kez zar atı­yor. Atışlar sonunda 16 kez tek sayı, 24 kez çift gel­diğine göre, bir sonraki atışta çift sayı gelme ola­sılığı deneysel olarak kaçtır?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 55,
         'text' => "1",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 55,
         'text' => "3/5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 55,
         'text' => "2/5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 55,
         'text' => "1/4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------56
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'C',
         'text' => "Ayhan ailesi bir firmanın konut çekilişine 3 kez ka­tılıyor ve hiçbir çekilişte ev çıkmıyor. Buna göre, bir kez daha çekilişe katılan Özka­ya ailesine ev çıkma olasılığı deneysel olarak kaçtır?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 56,
         'text' => "5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 56,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 56,
         'text' => "0",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 56,
         'text' => "2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------57
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'C',
         'text' => "Bir çift zarın havaya atılması deneyinde, zarla­rın üst yüzüne gelen sayıların toplamının 9 ol­ma olasılığı kaçtır?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 57,
         'text' => "1/2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 57,
         'text' => "1/3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 57,
         'text' => "1/9",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 57,
         'text' => "1/7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------58
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'D',
         'text' => "1. Atılan zarın 5 gelmesi<br>2. Atılan zarın çift gelmesi<br>3. {1, 2, 3, 4, 5, 6}<br>4. Zar atma<br>Yukarıdakilerden hangisi olasılık deneyidir?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 58,
         'text' => "1",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 58,
         'text' => "2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 58,
         'text' => "3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 58,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------59
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'B',
         'text' => "8-A sınıfındaki başkanlık seçiminde bir öğrenci Mert’in başkan olma olasılığının %80 olduğunu söy­lemektedir. Buna göre, yukarıdaki olasılık çeşidi aşağıdakilerden hangisidir?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 59,
         'text' => "Teorik olasılık",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 59,
         'text' => "Öznel olasılık",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 59,
         'text' => "Deneysel olasılık",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 59,
         'text' => "Uygulamalı olasılık",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------60
        DB::table('questions')->insert([
         'lesson_id' => 4,
         'correct_answer' => 'B',
         'text' => "Bir testte bulunan soruların %20’si kolay, %15’i zor ve diğerleri ise orta seviyelidir. Buna göre, testten rastgele çözülen bir soru­nun teorik olarak orta seviyeli bir soru olma ola­sılığı kaçtır?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 60,
         'text' => "1520",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 60,
         'text' => "1320",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 60,
         'text' => "1521",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 60,
         'text' => "1621",
         'created_at' => now(),
         'updated_at' => now(),
        ]);//---------------------------------61
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'C',
         'text' => "y = x2<br>x = y<br>y = 3x + 1<br>Yukarıdaki eşitliklerden hangisinde x ile y değişkenleri arasında doğrusal bir ilişki vardır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 61,
         'text' => "I",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 61,
         'text' => "I - II",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 61,
         'text' => "II - III",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 61,
         'text' => "I - II - III",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------62
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'D',
         'text' => "Su tüketim miktarı ⇒ ödenen toplam ücret<br>Bir insanın yaşı ⇒ geçen yıllar<br>Yapılan ekmek miktarı ⇒ kullanılan un miktarı<br>Yukarıda verilen ilişkilerden hangisi yada hangileri doğrusal ilişkidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 62,
         'text' => "I",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 62,
         'text' => "I - II",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 62,
         'text' => "II - III",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 62,
         'text' => "I - II - III",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------63
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'B',
         'text' => "Aşağıdaki denklemlerden hangisine ait doğru grafiği y eksenine paraleldir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 63,
         'text' => "y = 4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 63,
         'text' => "x = 8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 63,
         'text' => "x = 5y",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 63,
         'text' => "y = x - 5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------64
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'A',
         'text' => "Aşağıdaki hangi denkleme ait doğru grafiği x eksenine diktir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 64,
         'text' => "x = -7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 64,
         'text' => "y = 2x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 64,
         'text' => "y = x + 2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 64,
         'text' => "x - y = 4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------65
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'C',
         'text' => "600 tane bilyesi olan Emre her gün 1 bilyesini arkadaşına vermektedir. Geçen gün sayısı x ile, kalan bilye miktarı y ile gösterilmek üzere aşağıdakilerden hangisi x ile y arasındaki ilişkinin denklemidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 65,
         'text' => "x - y = 600",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 65,
         'text' => "y = 600x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 65,
         'text' => "y = 600 - x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 65,
         'text' => "y = x - 600",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------66
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'D',
         'text' => "Altı çift terlik 70 TL ye satılmaktadır. Buna göre satılan terlik çifti sayısı (x) ile, TL cinsinden kazanılan para (y) arasındaki doğrusal ilişkinin denklemi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 66,
         'text' => "y = 70/6.x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 66,
         'text' => "y = 70 . x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 66,
         'text' => "y = 70.6/x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 66,
         'text' => "(y =70/6) .( x)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------67
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'A',
         'text' => "Ülken her gün düzenli olarak 6 saat spor yapmaktadır. Geçen zaman gün cinsinden x ile, spor yapılan toplam süre saat cinsinden y ile gösterilsin. Hangi seçenekteki sıralı ikili 10. günün sonunda Ülken'in spor yaptığı toplam süreyi belirtir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 67,
         'text' => "(10, 60)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 67,
         'text' => "(5, 60)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 67,
         'text' => "(10, 30)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 67,
         'text' => "(6, 10)",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------68
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'B',
         'text' => "Denklemi y = ax - 9 olan doğrunun eğimi  -4 ise a kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 68,
         'text' => "−14",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 68,
         'text' => "−4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 68,
         'text' => "14",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 68,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------69
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'C',
         'image' => '/img/question/denk-9.jpg',
         'text' => "Kenar uzunlukları verilen KLM üçgeninde [KM]'nin eğimi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 69,
         'text' => "65",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 69,
         'text' => "45",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 69,
         'text' => "23",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 69,
         'text' => "32",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------70
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'C',
         'text' => "Denklemi y = 7x + 5 olan doğrunun eğimi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 70,
         'text' => "-7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 70,
         'text' => "-57",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 70,
         'text' => "7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 70,
         'text' => "57",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------71
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'B',
         'text' => "4m - 5n = 12 doğrusal denkleminde m'nin n cinsinden eşiti aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 71,
         'text' => "12+4n5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 71,
         'text' => "12+5n4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 71,
         'text' => "12−5n4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 71,
         'text' => "5n+3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------72
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'D',
         'text' => "-7x - 2y = 14 doğrusal denkleminde x'in y cinsinden ifadesi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 72,
         'text' => "−(14-2y)/7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 72,
         'text' => "14-2y/7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 72,
         'text' => "-2 + 2y",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 72,
         'text' => "−14+2y/7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------73
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'A',
         'text' => "−4 . ( x + 2 ) = x + 22 denklemini sağlayan ' x ' değeri kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 73,
         'text' => "-6",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 73,
         'text' => "-4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 73,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 73,
         'text' => "8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------74
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'A',
         'text' => "7x − 3 = 5x + 11 denkleminin çözüm kümesi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 74,
         'text' => "7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 74,
         'text' => "8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 74,
         'text' => "9",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 74,
         'text' => "10",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------75
        DB::table('questions')->insert([
         'lesson_id' => 5,
         'correct_answer' => 'D',
         'text' => "5x + 5 = 2x − 28 eşitliğini sağlayan ' x ' değeri kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 75,
         'text' => "8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 75,
         'text' => "2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 75,
         'text' => "6",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 75,
         'text' => "-11",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------76
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'B',
         'text' => "' Sabri'nin yaşı en az 12'dir ' ifadesine uygun doğrusal eşitsizlik aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 76,
         'text' => "x < 12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 76,
         'text' => "x ≥ 12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 76,
         'text' => "x ≤ 12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 76,
         'text' => "x > 12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------77
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'C',
         'text' => "' Boyu 122 cm'den kısa olanlar binebilir ' ifadesine uygun doğrusal eşitsizlik hangi seçenekte verilmiştir ? ",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 77,
         'text' => "122 ≤ x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 77,
         'text' => "122 ≥ x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 77,
         'text' => "122 > x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 77,
         'text' => "122 < x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------78
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'text' => "Sertap'ın  yaşının 7 fazlası 22'den büyüktür. Buna göre Sertap'ın yaşı için uygun eşitsizlik ifadesi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 78,
         'text' => "x ≥ 15",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 78,
         'text' => "x ≤ 15",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 78,
         'text' => "x < 15",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 78,
         'text' => "x > 15",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------79
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'A',
         'text' => "- 2x + 5 < x + 11 eşitsizliğinin çözüm kümesi aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 79,
         'text' => "{-2 den büyük reel sayılar}",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 79,
         'text' => "{-2 den küçük reel sayılar}",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 79,
         'text' => "{2 den küçük reel sayılar}",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 79,
         'text' => "{2 den büyük reel sayılar}",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------80
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'text' => "4x + 13 > 10 eşitsizliğini aşağıdaki sayılardan hangisini sağlar?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 80,
         'text' => "-3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 80,
         'text' => "-2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 80,
         'text' => "-1",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 80,
         'text' => "0",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------81
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'image' => '/img/question/esitsiz-6.jpg',
         'text' => "Sayı doğrusunda gösterilen eşitsizlik aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 81,
         'text' => "4 ≥ x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 81,
         'text' => "4 ≤ x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 81,
         'text' => "4 ≤ x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 81,
         'text' => "4 < x",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------82
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'C',
         'text' => "3x + 7 ≤ 22 eşitsizliğini sağlayan en büyük tam sayı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 82,
         'text' => "3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 82,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 82,
         'text' => "5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 82,
         'text' => "6",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------83
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'text' => "Aşağıdaki sayılardan hangisi 3x + 7 ≤ 20 eşitsizliğini sağlamaz ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 83,
         'text' => "2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 83,
         'text' => "3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 83,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 83,
         'text' => "5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------84
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'C',
         'text' => "' 8 fazlası 4 ten büyük sayılar ' ifadesinin doğrusal eşitsizlik olarak gösterimi aşağıdakilerden hangisidir?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 84,
         'text' => "x + 8 < 4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 84,
         'text' => "x - 8 < 4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 84,
         'text' => "x + 8 > 4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 84,
         'text' => "x - 8 > 4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------85
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'B',
         'text' => "4m - 9 < 15 eşitsizliğini sağlayan en büyük doğal sayı aşağıdakilerden hangisidir ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 85,
         'text' => "6",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 85,
         'text' => "5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 85,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 85,
         'text' => "3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------86
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'text' => "5 katının 12 fazlası 47'den küçük olan tam sayıların en büyüğü kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 86,
         'text' => "9",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 86,
         'text' => "8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 86,
         'text' => "7",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 86,
         'text' => "6",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------87
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'text' => "' Bir otobüsteki; kadınların sayısının 2 katının 3 fazlası, erkeklerin sayısının 5 eksiğinden büyüktür ' ifadesini belirten doğrusal eşitsizlik aşağıdakilerden hangisi olabilir?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 87,
         'text' => "x + y > 8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 87,
         'text' => "x - y < 8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 87,
         'text' => "x - y > 8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 87,
         'text' => "2x - y > -8",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------88
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'C',
         'text' => "x+42≥7 eşitsizliğini sağlayan en küçük tam sayı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 88,
         'text' => "12",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 88,
         'text' => "11",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 88,
         'text' => "10",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 88,
         'text' => "9",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------89
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'B',
         'text' => "3(x - 1) < 2x + 1 eşitsizliğini sağlayan en büyük tam sayı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 89,
         'text' => "2",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 89,
         'text' => "3",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 89,
         'text' => "4",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 89,
         'text' => "5",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        //---------------------------------90
        DB::table('questions')->insert([
         'lesson_id' => 6,
         'correct_answer' => 'D',
         'text' => "3(x - 1) < 2x + 1 eşitsizliğini sağlayan en büyük tam sayı kaçtır ?",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'A',
         'question_id' => 90,
         'text' => "x < 180 º",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'B',
         'question_id' => 90,
         'text' => "x > 90 º",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'C',
         'question_id' => 90,
         'text' => "13 º ≤ x ≤ 31 º",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
         'choice' => 'D',
         'question_id' => 90,
         'text' => "13 º < x < 31 º",
         'created_at' => now(),
         'updated_at' => now(),
        ]);
        
        
   
        //Questions and Choices
        //---------------------------------1
        /* DB::table('questions')->insert([
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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 1,
            'text' => '7',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 1,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 1,
            'text' => '9',
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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 2,
            'text' => '32',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 2,
            'text' => '34',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 2,
            'text' => '35',
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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 3,
            'text' => '-1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 3,
            'text' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 3,
            'text' => '0',
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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 4,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 4,
            'text' => '12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 4,
            'text' => '2',
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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 5,
            'text' => '8',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 5,
            'text' => '12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 5,
            'text' => '2',
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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'B',
            'question_id' => 6,
            'text' => 'test',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'C',
            'question_id' => 6,
            'text' => 'esek',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('choices')->insert([
            'choice' => 'D',
            'question_id' => 6,
            'text' => 'yanlış',
            'created_at' => now(),
            'updated_at' => now()
        ]); */

        //Exams->questions
        //--------------------------1
        /* DB::table('exams')->insert([
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
        //--------------------------6
        DB::table('exams')->insert([
            'user_id' => 4,
            'lecture_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
 */


        
    }
}
