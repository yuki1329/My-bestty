<?php
 use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FemaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bestty2=[
            [
                'body'=>'1.流行りものや新商品より、長く使えるものを好む傾向がありそうだ。',
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
               
            ],
            [
                'body'=>'2.あなたが思う相手の良い点は、落ち着いていてしっかりしている点である。',
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
               
            ],
            [
                'body'=>'3.比較的イベントやパーティーなどによく参加するイメージがある。',
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'4.ファッションや持ち物にこだわりが強そうなイメージがある。',
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
               
            ],
            [
                'body'=>'5.周りからよく変わっていると言われるタイプの人である。',
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
               
            ],
            [
                'body'=>'6.結構、盛り気味に（大げさに）ものを言っていそうなイメージがある。',
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
            
            ],
            [
                'body'=>'7.比較的休日は部屋にいることが多そうである。',
                'Ya'=>'1',
                'Yb'=>'2',
                'Yc'=>'3',
                'Na'=>'3',
                'Nb'=>'2',
                'Nc'=>'1',
               
            ],
            [
                'body'=>'8.仕事場の先輩などの、年上とも人づきあいが良さそうな人である。',
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'9.バラエティ番組や連続ドラマを比較的好むイメージがある。',
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
            ]
            ];
            foreach ($bestty2 as $best2) {

                DB::table('female_questions')->insert([
                    'body'=>$best2['body'],
                    'Ya' => $best2['Ya'],
                    'Yb' => $best2['Yb'],
                    'Yc' => $best2['Yc'],
                    'Na' => $best2['Na'],
                    'Nb' => $best2['Nb'],
                    'Nc' => $best2['Nc'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
    }
}
