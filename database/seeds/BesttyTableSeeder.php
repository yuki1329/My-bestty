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
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'1',
                'Yb'=>'3',
                'Yc'=>'2',
                'Na'=>'3',
                'Nb'=>'1',
                'Nc'=>'2',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'2',
                'Yb'=>'1',
                'Yc'=>'3',
                'Na'=>'2',
                'Nb'=>'3',
                'Nc'=>'1',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'3',
                'Yb'=>'1',
                'Yc'=>'2',
                'Na'=>'1',
                'Nb'=>'3',
                'Nc'=>'2',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'1',
                'Yb'=>'2',
                'Yc'=>'3',
                'Na'=>'3',
                'Nb'=>'2',
                'Nc'=>'1',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'2',
                'Yb'=>'3',
                'Yc'=>'1',
                'Na'=>'2',
                'Nb'=>'1',
                'Nc'=>'3',
                'Y0orN1'=>'1',
            ],
            [
                'Ya'=>'3',
                'Yb'=>'2',
                'Yc'=>'1',
                'Na'=>'1',
                'Nb'=>'2',
                'Nc'=>'3',
                'Y0orN1'=>'1',
            ]
            ];
            foreach ($bestty as $best) {

                DB::table('questions')->insert([
                    'Ya' => $best['Ya'],
                    'Yb' => $best['Yb'],
                    'Yc' => $best['Yc'],
                    'Na' => $best['Na'],
                    'Nb' => $best['Nb'],
                    'Nc' => $best['Nc'],
                    'Y0orN1'=>$best['Y0orN1'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
    }
}
