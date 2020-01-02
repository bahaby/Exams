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

    private $teacher;
    private $student;
    protected function setUp(): void{
        parent::setUp();
        Artisan::call('migrate:fresh --seed');
        Session::start();
        $this->teacher =  User::find(1);
        $this->student =  User::find(3);
    }
    /** @test */
    public function only_teachers_can_enter_teachers_page(){
        $this->actingAs($this->student);//student

        $response = $this->get('/question/create');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $response = $this->get('/question');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $this->actingAs($this->teacher);//mat-teacher

        $response = $this->get('/question/create');
        $response->assertOk();

        $response = $this->get('/question');
        $response->assertOk();
    }
    /** @test */
    public function only_students_can_enter_students_page(){
        $this->actingAs($this->teacher);//teacher

        factory(\App\Exam::class)->create([
            'lecture_id' => 1,
            'user_id' => $this->student->id,
        ]);

        $response = $this->get('/result');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();
        
        $response = $this->get('/lecture');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $response = $this->get('/lecture/1/exam/create');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $response = $this->get('/lecture/1/exam/1/answer');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $response = $this->get('/lecture/1/exam');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $response = $this->get('/lecture/1/exam/1');
        $response->assertRedirect('/');
        $response->assertSessionHasErrors();

        $this->actingAs($this->student);

        $response = $this->get('/result');
        $response->assertOk();
        
        $response = $this->get('/lecture');
        $response->assertOk();
        
        $response = $this->get('/lecture/1/exam/create');
        $response->assertOk();

    }
    /** @test */
    public function teachers_can_add_question(){
        $this->actingAs($this->teacher);
        $count = \App\Question::all()->count();
        $response = $this->post('/question', [
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
