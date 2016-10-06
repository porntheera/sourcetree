<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Bookqueue;

class BookqueueTableSeeder extends Seeder{
	public function run(){
		DB::table('bookqueues')->delete();
		DB::table('bookqueues')->insert();

		$bookqueues =[
		[	"regis" => 'ชช345',
			"generation" => 'VIGO',
			"list" => 'รับ-ฝากรถ(รายเดือน)',
			"name" => 'พรธีรา',
			"tell" => '0831860994',],
		[	"regis" => 'ญญ123',
			"generation" => 'accord',
			"list" => 'รับ-ฝากรถ(รายวัน)',
			"name" => 'พิชญา',
			"tell" => '0831860994',],
			];
			foreach ($bookqueues as $b){
				Bookqueue::create($b)
			}
	}
}