<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Bookqueue;

class BookqueueController extends Controller {
	function insert(){
		$query = new Bookqueue;
		$query->register = Input::get('License_plate');
		$query->usecar = Input::get('order');
		$query->tel = Input::get('name1');
		//$query->service = Input::get('date_time');
		//$query->valet2 = Input::get('input1');
		//$query->valet1 = Input::get('input');
		$query->save();
		return redirect('queue');
	}

	function show(){
		$query = Bookqueue::all();
		return view('queue',compact('query'));
	}
}
