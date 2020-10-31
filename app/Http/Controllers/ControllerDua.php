<?php
namespace App\Http\Controllers;

/**
*
*/
class ControllerDua extends Controller{
	public function kota(){
		return view('Samarinda');
	}
	public function kampus(){
		return view('umkt');
	}
	public function panggilan(){
		return view('uya');
	}
}