<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BesttyTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bestty=[
            [
                'body'=>'1.ものを選ぶ基準はデザインより機能性だ。',
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
                
            ],
            [
                'body'=>'2.あなたが思う相手の良い点は、おしゃれでセンスがあるところだ。',
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
                
            ],
            [
                'body'=>'3.何事にもひとつひとつ丁寧に行う。',
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
                
            ],
            [
                'body'=>'4.休日は比較的に外へ出かける。',
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'5.旅行や初めての場所にいく前に徹底的に下調べをしてそうな人だ。',
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'6.時間はきっちりと守るほうだ。',
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
                
            ],
            [
                'body'=>'7.たぶんニュース番組よりバラエティ番組のほうが好きそうに見える。',
                'Ya'=>'1',
                'Yb'=>'2',
                'Yc'=>'3',
                'Na'=>'3',
                'Nb'=>'2',
                'Nc'=>'1',
                
            ],
            [
                'body'=>'8.結構、実際の出来事より誇張してしまう。',
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'9.一緒に住んだら家事してくれそうだ。',
                'Ya'=>'1',
                'Yb'=>'2',
                'Yc'=>'3',
                'Na'=>'3',
                'Nb'=>'2',
                'Nc'=>'1',
                
            ]
            ];
            foreach ($bestty as $best) {

                DB::table('male_questions')->insert([
                    'body'=>$best['body'],
                    'Ya' => $best['Ya'],
                    'Yb' => $best['Yb'],
                    'Yc' => $best['Yc'],
                    'Na' => $best['Na'],
                    'Nb' => $best['Nb'],
                    'Nc' => $best['Nc'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
    }
}
