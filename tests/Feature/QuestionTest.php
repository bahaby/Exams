<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use \App\User;

class QuestionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    protected function setUp(): void{
        parent::setUp();
        //Artisan::call('migrate:fresh --seed');
        Session::start();
    }
    /** @test */
    public function only_teachers_can_enter_add_question_page(){
        $this->actingAs(User::find(3));//student

        $response = $this->get('/question/create');
        $response->assertRedirect('/');
    }

    /** @test */
    public function teachers_can_enter_add_question_page(){
        $this->actingAs(User::find(1));
        $response = $this->get('/question/create');
        $response->assertOk();
    }
    /** @test */
    public function teachers_can_add_question(){
        $this->actingAs(User::find(1));
        $count = \App\Question::all()->count();
        $response= $this->post('/question', [
            '_token' => csrf_token(),
            'text' => 'question text',
            //'image' => UploadedFile::fake()->image('question.jpg'),
            'lesson' => '1',
            'choiceAtext' => 'choice text A',
            'choiceBtext' => 'choice text B',
            'choiceCtext' => 'choice text C',
            'choiceDtext' => 'choice text D',
            'answer' => 'A',
            //'choiceAimage' => UploadedFile::fake()->image('choiceA.jpg'),
            //'choiceBimage' => UploadedFile::fake()->image('choiceB.jpg'),
            //'choiceCimage' => UploadedFile::fake()->image('choiceC.jpg'),
            //'choiceDimage' => UploadedFile::fake()->image('choiceD.jpg'),
        ]);
        $this->assertCount($count+1, \App\Question::all());
        $response->assertRedirect('/question');
    }
}
