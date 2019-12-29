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
                'Veri Analizi'=>
                [
                    'sorular' =>
                    [ 
                        [
                            'metin' => "Çok sayıda verinin gruplandırılarak sütun grafiği biçiminde temsil edilmesi aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["Çizgi Grafiği",""],
                                'B' => ["Histogram",""],
                                'C' => ["Daire Grafiği",""],
                                'D' => ["Grup Grafiği",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ], 
                
                        [
                            'metin' => "En küçük değer = 6<br>En büyük değer = 110<br>Bir veri grubuna ait yukarıdaki bilgiler verilmiştir. Bu veri grubu ile oluşturulacak 12 gruplu histogramın grup genişliği kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["9",""],
                                'B' => ["10",""],
                                'C' => ["11",""],
                                'D' => ["12",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                
                        [
                            'metin' => "Bir partiye katılan davetlilerin sayıları ve yaş aralıkları verilmiştir. Tabloya göre yaşı 18 den büyük 25 ten küçük kaç davetli vardır ?",
                            'sık' => 
                            [
                                'A' => ["34",""],
                                'B' => ["32",""],
                                'C' => ["33",""],
                                'D' => ["30",""],
                            ],
                            'image' => 'veri-3.jpg',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "Tablo oluşturulurken veri grubunun genişliği kaç alınmıştır ?",
                            'sık' => 
                            [
                                'A' => ["12",""],
                                'B' => ["13",""],
                                'C' => ["14",""],
                                'D' => ["15",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "Yaşı 22 den büyük 28 ten küçük toplam kaç davetli vardır ?",
                            'sık' => 
                            [
                                'A' => ["27",""],
                                'B' => ["29",""],
                                'C' => ["32",""],
                                'D' => ["35",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ],
                
                        [
                            'metin' => "Yukarıdaki histogramda Wembley Park'ta yarışan araçların 1. kolu geçme sürelerine göre dağılımı verilmiştir. Buna göre 1. kolu 48 - 63 sn aralığında geçen kaç araç vardır ?",
                            'sık' => 
                            [
                                'A' => ["15",""],
                                'B' => ["14",""],
                                'C' => ["13",""],
                                'D' => ["12",""],
                            ],
                            'image' => 'veri-6.jpg',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "1.kolu 56 - 67 sn aralığında geçen kaç araç vardır ?",
                            'sık' => 
                            [
                                'A' => ["15",""],
                                'B' => ["14",""],
                                'C' => ["16",""],
                                'D' => ["17",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                
                        [
                            'metin' => "Hangi sn aralığında 1. kolu geçen araç sayısı en azdır ?",
                            'sık' => 
                            [
                                'A' => ["56-60",""],
                                'B' => ["61-63",""],
                                'C' => ["45-47",""],
                                'D' => ["48-51",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "Sınıfımızdaki öğrencilerin seçtiği kişilerin yaş aralığı; 10, 10, 11, 12, 13, 13, 13, 15, 15, 16, 16, 17, 17, 18, 19, 21, 21, 22, 22, 23, 23, 24, 24, 24, 25, 26, 27, 28, 30, 31, 31, 31, 32, 33, 33, 34, 35, 36, 36, 36, 37, 37, 38, 38, 39, 39, 40, 43, 45, 47, 48, 49 olarak veriliyor. Bu verileri tabloda 8 gruba ayırdığımızda grup genişliği kaç olur ?",
                            'sık' => 
                            [
                                'A' => ["5",""],
                                'B' => ["6",""],
                                'C' => ["7",""],
                                'D' => ["8",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "1.Bir oto galeride satılan araçların dağılımı<br>2. Bir şehirde saatlere göre sıcaklık değişimi<br>3.Bir markete bir gün içerisinde gelen 800 müşterinin alışveriş sürelerinin dağılımı <br> Yukarıdakilerden hangisi yada hangileri çizgi grafiği ile gösterilmesi uygun değildir ?",
                            'sık' => 
                            [
                                'A' => ["I",""],
                                'B' => ["I - III",""],
                                'C' => ["III",""],
                                'D' => ["II - III",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],

                        [
                            'metin' => "1.Bir ağacın boyundaki değişim her ay not alınıyor.<br>2.Bir futbol kulübünde başkanlık seçimlerinde kullanılan oylar not alınıyor.<br>3.Üç ayrı ilde üretilen fındık miktarı not alınıyor.<br>Yukarıda verilen ifadelerle ilgili toplanan verilerin hangisi yada hangilerini sütun grafiğinde göstermek uygun değildir ?",
                            'sık' => 
                            [
                                'A' => ["I",""],
                                'B' => ["I - II",""],
                                'C' => ["II - III",""],
                                'D' => ["I - II - III",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],

                        [
                            'metin' => "Bir veri grubunun açıklığı 80 ve grup sayısı 12 ise oluşturulacak histogramın grup genişliği kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["5",""],
                                'B' => ["6",""],
                                'C' => ["7",""],
                                'D' => ["8",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],

                        [
                            'metin' => "Sıklık tablosu verilmiş bir veri grubundaki en küçük değer 21, en büyük değer 48 dir. Bu veriler ile 7 gruplu bir histogram oluşturmak istenirse bu histogramın grup genişliğinin kaç olması gerekir ?",
                            'sık' => 
                            [
                                'A' => ["4",""],
                                'B' => ["5",""],
                                'C' => ["6",""],
                                'D' => ["7",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],

                        [
                            'metin' => "1.Histogram; ölçülebilir bir nitelik ile  ilgili gözlem değerlerinin dağılımını gösteren bir sütun grafiğidir.<br>2.Bir veri grubunun genişliğini belirlemek için, verilerin açıklığı karar verilen grup sayısına bölünür.<br>Yukarıdaki bilgilerle ilgili aşağıdakilerden hangisi doğrudur ?",
                            'sık' => 
                            [
                                'A' => ["I doğru II yanlıştır.",""],
                                'B' => ["Her ikisi de yanlıştır.",""],
                                'C' => ["I yanlış II doğrudur.",""],
                                'D' => ["Her ikisi de doğrudur.",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ],

                        [
                            'metin' => "En küçük değeri 12 en büyük değeri 88 olan bir veri grubu ile oluşturulacak 13 gruplu histogramın grup genişliği kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["5",""],
                                'B' => ["6",""],
                                'C' => ["7",""],
                                'D' => ["8",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                    ], 
                ],
                
                
                'Cebirsel İfadeler ve Özdeşlikler'=>
                [
                    'sorular' =>
                    [ 
                        [
                            'metin' => "- 4a + 3b <br> 6x - 3 - 5y <br> Yukarıda verilen cebirsel ifadelerin terim sayısı sırasıyla hangi şıkta doğru verilmiştir ?",
                            'sık' => 
                            [
                                'A' => ["4;5",""],
                                'B' => ["2;3",""],
                                'C' => ["3;4",""],
                                'D' => ["2;4",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ], 
                
                        [
                            'metin' => "a . (a - 2) işleminin sonucu aşağıdakilerden hangisinde doğru verilmiştir ?",
                            'sık' => 
                            [
                                'A' => ["a<sup>2</sup>+2",""],
                                'B' => ["a<sup>2</sup>-2",""],
                                'C' => ["a<sup>2</sup>+2a",""],
                                'D' => ["a<sup>2</sup>-2a",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ],
                
                        [
                            'metin' => "2x . ( 4x + 2y ) işleminin sonucu aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["4x<sup>2</sup>-4xy",""],
                                'B' => ["8x<sup>2</sup>+4xy",""],
                                'C' => ["4x<sup>2</sup>+4xy",""],
                                'D' => ["8x<sup>2</sup>-4xy",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "( x + 1 ) . ( - x - 1 ) işleminin sonucu aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["-x<sup>2</sup>-2x-1",""],
                                'B' => ["-x<sup>2</sup>+2x-1",""],
                                'C' => ["-x<sup>2</sup>-2x+1",""],
                                'D' => ["-x<sup>2</sup>-1",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "( 2x - 3y )<sup>2</sup> ifadesinin eşiti aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["2x<sup>2</sup>-12xy+9y<sup>2</sup>",""],
                                'B' => ["4x<sup>2</sup>+12xy-9y<sup>2</sup>",""],
                                'C' => ["4x<sup>2</sup>-12xy+9y<sup>2</sup>",""],
                                'D' => ["4x<sup>2</sup>-12xy-9y<sup>2</sup>",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                
                        [
                            'metin' => "6 . ( 3x - 5 ) = 18x - A ifadesi bir özdeşlik olduğuna göre A kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["25",""],
                                'B' => ["30",""],
                                'C' => ["35",""],
                                'D' => ["40",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "36 - 4x2 ifadesinin çarpanlarına ayrılmış şekli aşağıdakilerden hangisidir ?    ",
                            'sık' => 
                            [
                                'A' => ["( 6 - 2x ) . ( 6 + 2x )",""],
                                'B' => ["( 36 - 2x ) . ( 36 + 2x )",""],
                                'C' => ["( 6 - 2x ) . ( 6 - 2x )",""],
                                'D' => ["( 36 - 2x ) . ( 6 - 2x )",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "x<sup>2</sup> - 10x + 25 ifadesinin çarpanlarına ayrılmış şekli aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["( x - 5 ) . ( x - 5 )",""],
                                'B' => ["( x - 5 ) . ( x + 5 )",""],
                                'C' => ["( x + 5 ) . ( x + 5 )",""],
                                'D' => ["( x - 25 ) . ( x - 25 )",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "-144x<sup>2</sup> + 121y<sup>2</sup> ifadesinin çarpanlara ayrılmış şekli aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["( 11y - 12x ) . ( 11y + 12x )",""],
                                'B' => ["( 11y + 12x ) . ( 11y + 12x )",""],
                                'C' => ["( 11y - 12x ) . ( 11y - 12x )",""],
                                'D' => ["( 10x - 11y ) . ( 10x + 11y )",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "x<sup>2</sup> - 14x + 49 ifadesinin çarpanları x - A ve x - A olduğuna göre, A kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["-6",""],
                                'B' => ["7",""],
                                'C' => ["6",""],
                                'D' => ["-7",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],

                        [
                            'metin' => "Aşağıda verilen ifadelerden hangisi 4a<sup>2</sup>x - 16b<sup>2</sup>x cebirsel ifadesinin çarpanlarından değildir ?",
                            'sık' => 
                            [
                                'A' => ["4x",""],
                                'B' => ["x-2b",""],
                                'C' => ["a-2b",""],
                                'D' => ["a+2b",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],

                        [
                            'metin' => "9x<sup>2</sup> + 30xy + 25y<sup>2</sup> = ( Kx + Ly )<sup>2</sup> eşitliğine göre K ve L yerine yazılması gereken sayıların toplamı kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["0",""],
                                'B' => ["7",""],
                                'C' => ["8",""],
                                'D' => ["9",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],

                        [
                            'metin' => "Kısa kenar uzunluğu ( x - 6 ) birim, alanı ( x<sup>2</sup> - 36 ) birimkare olan dikdörtgenin uzun kenarı kaç birimdir ?",
                            'sık' => 
                            [
                                'A' => ["( x + 6 ) birim",""],
                                'B' => ["( x + 8 ) birim",""],
                                'C' => ["( x + 10 ) birim",""],
                                'D' => ["( x + 12 ) birim",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],

                        [
                            'metin' => "6 . ( 3x - 8 ) = 18x - A ifadesi bir özdeşlik olduğuna göre A kaçtır ?",
                            'sık' => 
                            [
                                'A' => ["28",""],
                                'B' => ["35",""],
                                'C' => ["-48",""],
                                'D' => ["48",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ],

                        [
                            'metin' => "a . (a - 5) işleminin sonucu aşağıdakilerden hangisinde doğru verilmiştir ?",
                            'sık' => 
                            [
                                'A' => ["a<sup>2</sup>-5a",""],
                                'B' => ["a<sup>2</sup>-8a",""],
                                'C' => ["a<sup>3</sup>+5a",""],
                                'D' => ["a<sup>2</sup>-4",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],
                    ], 
                ],
                
                'Geometrik Cisimler'=>
                [
                    'sorular' =>
                    [ 
                        [
                            'metin' => "Verilen şekillerden hangisi üçgen prizmanın açınımı olamaz ?",
                            'sık' => 
                            [
                                'A' => ["1",""],
                                'B' => ["2",""],
                                'C' => ["3",""],
                                'D' => ["4",""],
                            ],
                            'image' => 'cisim-1.jpg',
                            'cevap' => 'D',
                        ], 
                
                        [
                            'metin' => "1.Taban<br>2.Köşe<br>3.Eksen<br>Yukarıdakilerden hangisi ya da hangileri bir dik prizmanın temel elemanlarındandır ?",
                            'sık' => 
                            [
                                'A' => ["1",""],
                                'B' => ["1-2",""],
                                'C' => ["2-3",""],
                                'D' => ["1-2-3",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "Verilenlerden hangisi dik dairesel silindirin açık şekli olabilir ?",
                            'sık' => 
                            [
                                'A' => ["1",""],
                                'B' => ["2",""],
                                'C' => ["3",""],
                                'D' => ["4",""],
                            ],
                            'image' => 'cisim-3.jpg',
                            'cevap' => 'A',
                        ],
                
                        [
                            'metin' => "1.Kare<br>2.Daire<br>3.Dikdörtgen<br>4.Üçgen <br>Yukarıdakilerden hangisi ya da hangileri silindirin yan yüzünün açık şekli olabilir ?",
                            'sık' => 
                            [
                                'A' => ["1-4",""],
                                'B' => ["2-3",""],
                                'C' => ["1-3",""],
                                'D' => ["2-4",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                
                        [
                            'metin' => "Kare dik prizma tabanından geçen ekseni etrafında en az kaç derece döndürülürse şekli değişmez ?",
                            'sık' => 
                            [
                                'A' => ["45",""],
                                'B' => ["60",""],
                                'C' => ["90",""],
                                'D' => ["180",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                
                        [
                            'metin' => "Yarıçap uzunluğu 2 cm, yüksekliği 6 cm olan bir dik dairesel silindirin yüzey alanı kaç cm2 dir ? (π = 3 alınız. )  ",
                            'sık' => 
                            [
                                'A' => ["24",""],
                                'B' => ["48",""],
                                'C' => ["72",""],
                                'D' => ["96",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                
                        [
                            'metin' => "Taban yarıçapının uzunluğu 5 cm ve yüksekliği 10 cm olan dik dairesel silindirin alanı kaç cm2 dir ? ( π = 3 alınız. )",
                            'sık' => 
                            [
                                'A' => ["300",""],
                                'B' => ["450",""],
                                'C' => ["550",""],
                                'D' => ["650",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "Taban yarıçapının uzunluğu ve yüksekliği 10 cm olan dik dairesel silindir yapman için en az kaç cm2 karton gerekir ? ( π = 3 alınız. )",
                            'sık' => 
                            [
                                'A' => ["600",""],
                                'B' => ["800",""],
                                'C' => ["1000",""],
                                'D' => ["1200",""],
                            ],
                            'image' => '',
                            'cevap' => 'D',
                        ],
                
                        [
                            'metin' => "Bir düzgün sekizgen piramit simetri ekseni etrafında en az kaç derece döndürülürse şekli değişmez ?",
                            'sık' => 
                            [
                                'A' => ["30",""],
                                'B' => ["45",""],
                                'C' => ["60",""],
                                'D' => ["90",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ],
                
                        [
                            'metin' => "Kare dik prizma tabanından geçen ekseni etrafında en az kaç derece döndürülürse şekli değişmez ?",
                            'sık' => 
                            [
                                'A' => ["900",""],
                                'B' => ["700",""],
                                'C' => ["850",""],
                                'D' => ["600",""],
                            ],
                            'image' => 'cisim-10.jpg',
                            'cevap' => 'B',
                        ],

                        [
                            'metin' => "Çap uzunluğu ile yüksekliği birbirine eşit olan dik dairesel silindirin taban alanı 147 cm2 ise hacmi kaç cm3 tür ? ( π = 3 alınız. )",
                            'sık' => 
                            [
                                'A' => ["1029",""],
                                'B' => ["958",""],
                                'C' => ["978",""],
                                'D' => ["889",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],

                        [
                            'metin' => "Aşağıdaki bilgilerden hangisi yanlıştır?",
                            'sık' => 
                            [
                                'A' => ["Üçgen dik prizmanın ayrıt sayısı 9 dur.",""],
                                'B' => ["Kare dik prizmanın yüzey sayısı 6 dır.",""],
                                'C' => ["Beşgen dik prizmanın köşe sayısı 15 dir.",""],
                                'D' => ["Altıgen dik prizmanın ayrıt sayısı 18 dir.",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],

                        [
                            'metin' => "Düzgün altıgen dik piramidin yüz sayısı aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["9",""],
                                'B' => ["8",""],
                                'C' => ["7",""],
                                'D' => ["6",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],

                        [
                            'metin' => "Taban çevresinin uzunluğu 24 cm ve yüksekliği 8 cm olan dik koninin ana doğrusunun uzunluğu kaç cm'dir ? ( π = 3 alınız. )",
                            'sık' => 
                            [
                                'A' => ["4√5",""],
                                'B' => ["12",""],
                                'C' => ["3√5",""],
                                'D' => ["4",""],
                            ],
                            'image' => '',
                            'cevap' => 'A',
                        ],

                        [
                            'metin' => "Üçgen dik piramidin köşe sayısı aşağıdakilerden hangisidir ?",
                            'sık' => 
                            [
                                'A' => ["6",""],
                                'B' => ["5",""],
                                'C' => ["4",""],
                                'D' => ["3",""],
                            ],
                            'image' => '',
                            'cevap' => 'C',
                        ],
                    ], 
                ],
            ], 
        ] 
    ];
    $string = '';
    $lection_id = 1;
    $lesson_id = 8;
    $question_id = 106;
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
});






