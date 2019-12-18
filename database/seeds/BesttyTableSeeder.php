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
                'body'=>'1.The criteria for choosing things is more functional than design',
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
                
            ],
            [
                'body'=>'2.The good thing about the person you think is that it is fashionable and good taste',
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
                
            ],
            [
                'body'=>'3.Carefully do everything one by one',
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
                
            ],
            [
                'body'=>'4.usually go out on holidays',
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'5.Someone who seems to do a thorough examination before traveling or going to their first place.',
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'6.punctual person',
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
                
            ],
            [
                'body'=>'7.prefer variety programs to news programs',
                'Ya'=>'1',
                'Yb'=>'2',
                'Yc'=>'3',
                'Na'=>'3',
                'Nb'=>'2',
                'Nc'=>'1',
                
            ],
            [
                'body'=>'8.often exaggerate something about himself',
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'9.if you live together, he seems to do housework',
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
