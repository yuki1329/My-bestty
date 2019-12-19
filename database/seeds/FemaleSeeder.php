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
                'body'=>'1.prefer products that can be used for a long time rather than trendy items or new products.',
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',

            ],
            [
                'body'=>'2.The good thing that you think is that she is calm and firm.',
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
               
            ],
            [
                'body'=>'3.you think that she often participate in events and parties',
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'4.she has a strong preference for her property and clothing',
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
               
            ],
            [
                'body'=>'5.she is a type of person who is often thought  as mysterious by others.',
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
               
            ],
            [
                'body'=>'6.often exaggerate something about herself',
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
            
            ],
            [
                'body'=>'7.you think  she often spend time at home on holiday',
                'Ya'=>'1',
                'Yb'=>'2',
                'Yc'=>'3',
                'Na'=>'3',
                'Nb'=>'2',
                'Nc'=>'1',
               
            ],
            [
                'body'=>'8.She has an affable personality',
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                
            ],
            [
                'body'=>'9.prefer variety programs  or TV drama to news programs',
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
