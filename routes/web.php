<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* 
Route::get('/home', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/question', 'QuestionController@index')->name('question');
Route::get('/question/create', 'QuestionController@create')->name('question.create');
Route::post('/question', 'QuestionController@store');

Route::get('/lecture', 'LectureController@index')->name('lecture');
Route::post('/lecture', 'LectureController@store');

Route::get('/lecture/{lecture}/exam', 'ExamController@index')->name('exam');
Route::get('/lecture/{lecture}/exam/create', 'ExamController@create')->name('exam.create');
Route::get('/lecture/{lecture}/exam/{exam}', 'ExamController@show')->name('exam.show');
Route::post('lecture/{lecture}/exam', 'ExamController@store');

Route::get('/lecture/{lecture}/exam/{exam}/answer', 'AnswerController@index')->name('answer');
Route::post('/lecture/{lecture}/exam/{exam}/answer', 'AnswerController@store');

Route::get('/result', 'ResultController@index')->name('result');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::get('test', function(){
    $data = [
        'lecture' => [
            'mat'=>[
                'Geometri'=>[
                    'sorular' => [ 
                        [
                            'metin' => "Üçgenin bir köşesinden karşısındaki kenarın orta noktasına çizilen doğru parçasına ne ad verilir ?",
                            'sık' => [
                                'A' => ["Açıortay",""],
                                'B' => ["Yükseklik",""],
                                'C' => ["Kenarortay",""],
                                'D' => ["Dikme",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ], 
                        [
                            'metin' => "KLM üçgeninde [LN] açıortay ve m( KLMˆ ) = 88 º ise m( KLNˆ ) kaç derecedir ?",
                            'sık' => [
                                'A' => ["43 º",""],
                                'B' => ["44 º",""],
                                'C' => ["45 º",""],
                                'D' => ["46 º",""],
                            ],
                            'image' => 'geo-2.jpg',
                            'cevap' => 'B',
                        ], 
                        [
                            'metin' => "Verilen ADC üçgeninin DC kenarına ait yüksekliği aşağıdakilerden hangisidir ?",
                            'sık' => [
                                'A' => ["[AB]",""],
                                'B' => ["[AD]",""],
                                'C' => ["[AC]",""],
                                'D' => ["[BC]",""],
                            ],
                            'image' => 'geo-3.jpg',
                            'cevap' => 'A',
                        ], 
                        [
                            'metin' => "PRS üçgeninde IPRI = 14 cm ve IRSI = 19 cm'dir. Buna göre SP kenarının uzunluğu aşağıdakilerden hangisi olabilir ?",
                            'sık' => [
                                'A' => ["5 cm",""],
                                'B' => ["4 cm",""],
                                'C' => ["32 cm",""],
                                'D' => ["33 cm",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ], 
                        [
                            'metin' => "Şekildeki LKM üçgeninde verilenlere göre a yerine yazılabilecek en küçük ve en büyük doğal sayıların toplamı kaçtır ?",
                            'sık' => [
                                'A' => ["28",""],
                                'B' => ["27",""],
                                'C' => ["26",""],
                                'D' => ["25",""],
                            ],
                            'image' => 'geo-5.jpg',
                            'cevap' => 'A',
                        ], 
                        [
                            'metin' => "Şekildeki ABC üçgeninde verilenlere göre aşağıdaki ifadelerden hangisi doğrudur ?",
                            'sık' => [
                                'A' => ["En uzun kenar AC kenarıdır.",""],
                                'B' => ["En uzun kenar AB kenarıdır.",""],
                                'C' => ["En kısa kenar AC kenarıdır.",""],
                                'D' => ["En kısa kenar AB kenarıdır.",""],
                            ],
                            'image' => 'geo-6.jpg',
                            'cevap' => 'D',
                        ], 
                        [
                            'metin' => "Şekildeki PRS üçgeninde  m( PSTˆ ) = 115 º ve IPRI = IPSI' dir. Buna göre üçgenin kenar uzunluklarının büyükten küçüğe sıralanışı aşağıdakilerden hangisidir ? ",
                            'sık' => [
                                'A' => ["IPRI = IPSI = IRSI",""],
                                'B' => ["IPRI < IPSI = IRSI",""],
                                'C' => ["IPRI > IPSI > IRSI",""],
                                'D' => ["IPRI = IPSI > IRSI",""],
                            ],
                            'image' => 'geo-7.jpg',
                            'cevap' => 'D',
                        ], 
                        [
                            'metin' => "Şekildeki ABC üçgeninde verilenlere göre, üçgenin kenar uzunluklarının büyükten küçüğe sıralanışı aşağıdakilerden hangisinde doğru verilmiştir ?",
                            'sık' => [
                                'A' => ["IACI < IBCI < IABI",""],
                                'B' => ["IACI > IBCI > IABI",""],
                                'C' => ["IABI > IBCI > IACI",""],
                                'D' => ["IBCI > IACI > IABI",""],
                            ],
                            'image' => 'geo-8.jpg',
                            'cevap' => 'B',
                        ], 
                        [
                            'metin' => "Üç kenar uzunluğu bilinen bir üçgeni çizmek için cetvel dışında hangi aracı kullanmak yeterlidir ?",
                            'sık' => [
                                'A' => ["Pergel",""],
                                'B' => ["Gönye",""],
                                'C' => ["İletki",""],
                                'D' => ["Hesap makinesi",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ], 
                        [
                            'metin' => "İki iç açısının ölçüsü bilinen bir üçgen için aşağıdakilerden hangisi bilinirse bu üçgen çizilebilir ?",
                            'sık' => [
                                'A' => ["Alanı",""],
                                'B' => ["Üçüncü açı ölçüsü",""],
                                'C' => ["Çevre uzunluğu",""],
                                'D' => ["Bir kenar uzunluğu",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ], 
                        [
                            'metin' => "Şekildeki dik üçgende verilenlere göre x aşağıdakilerden hangisidir ?",
                            'sık' => [
                                'A' => ["13",""],
                                'B' => ["14",""],
                                'C' => ["15",""],
                                'D' => ["16",""],
                            ],
                            'image' => 'geo-11.jpg',
                            'cevap' => 'C',
                        ], 
                        [
                            'metin' => "Şekildeki dik üçgende verilenlere göre x aşağıdakilerden hangisidir ?",
                            'sık' => [
                                'A' => ["13",""],
                                'B' => ["14",""],
                                'C' => ["15",""],
                                'D' => ["16",""],
                            ],
                            'image' => 'geo-12.jpg',
                            'cevap' => 'D',
                        ], 
                        [
                            'metin' => "Şekilde verilenlere göre, IKNI uzunluğu kaç cm dir ?",
                            'sık' => [
                                'A' => ["13",""],
                                'B' => ["15",""],
                                'C' => ["17",""],
                                'D' => ["19",""],
                            ],
                            'image' => 'geo-13.jpg',
                            'cevap' => 'A',
                        ], 
                        [
                            'metin' => "Yukarıdaki PRS üçgeninde verilenlere göre, PS kenarının uzunluğu kaç cm dir ?",
                            'sık' => [
                                'A' => ["18",""],
                                'B' => ["√212",""],
                                'C' => ["√312",""],
                                'D' => ["√12",""],
                            ],
                            'image' => 'geo-14.jpg',
                            'cevap' => 'B',
                        ], 
                        [
                            'metin' => "Yukarıdaki üçgende verilenlere göre IBCI kaç cm'dir ?",
                            'sık' => [
                                'A' => ["√53",""],
                                'B' => ["√35",""],
                                'C' => ["√43",""],
                                'D' => ["√45",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ], 
                    ], 
                ],
                /* 'Eşitsizlik'=>[
                    'sorular' => [
                        [
                            'metin' => "' Sabri'nin yaşı en az 12'dir ' ifadesine uygun doğrusal eşitsizlik aşağıdakilerden hangisidir ?",
                            'sık' => [
                                'A' => ["asd",""],
                                'B' => ["asd",""],
                                'C' => ["asd",""],
                                'D' => ["asd",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ], 
                    ], 
                ], */
            ], 
        ] 
    ];
    $string = '';
    $lection_id = 1;
    $lesson_id = 7;
    $question_id = 91;
    foreach ($data['lecture'] as $lecture) {
        foreach ($lecture as $lesson){
            foreach ($lesson['sorular'] as $soru){
                $string = $string.'//---------------------------------'.$question_id.'&#13;&#10;';
                $string = $string.'DB::table(\'questions\')->insert([&#13;&#10;';
                $string = $string.' \'lesson_id\' => '.$lesson_id.',&#13;&#10;';
                $string = $string.' \'correct_answer\' => \''.$soru['cevap'].'\',&#13;&#10;';
                if($soru['image'] != ""){
                    $string = $string.' \'image\' => \'/img/question/'. $soru['image'] .'\',&#13;&#10;';
                }
                $string = $string.' \'text\' => "'.$soru['metin'].'",&#13;&#10;';
                $string = $string.' \'created_at\' => now(),&#13;&#10;';
                $string = $string.' \'updated_at\' => now(),&#13;&#10;';
                $string = $string.']);&#13;&#10;';
                
                foreach ($soru['sık'] as $key => $text){
                    $string = $string.'DB::table(\'choices\')->insert([&#13;&#10;';
                    $string = $string.' \'choice\' => \''.$key.'\',&#13;&#10;';
                    $string = $string.' \'question_id\' => '.$question_id.',&#13;&#10;';
                    $string = $string.' \'text\' => "'.$text[0].'",&#13;&#10;';
                    if($text[1] != ""){
                        $string = $string.' \'image\' => \'/img/choice/'. $text[1] .'\',&#13;&#10;';
                    }
                    $string = $string.' \'created_at\' => now(),&#13;&#10;';
                    $string = $string.' \'updated_at\' => now(),&#13;&#10;';
                    $string = $string.']);&#13;&#10;';
                }

                $question_id++;
            }
            $lesson_id++;
        }
        $lection_id++;
    }
    
    return '<textarea rows="40" cols="300" style = "white-space: nowrap">'.
    $string
    .'</textarea>';
});/* &emsp; */