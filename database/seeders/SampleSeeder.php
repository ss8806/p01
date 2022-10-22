<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sample;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sample::create([
            'name' => 'ワンセグ',
            'del_flg' => '1',
        ]);

        Sample::create([
            'name' => '地デジ',
            'del_flg' => '0',
        ]);
    }
}
