<?php
namespace App\Http\Controllers;

/**
*
*/
class ControllerSatu extends Controller{
	public function satu(){
		return view('Page1');
	}	
	public function dua(){
		return view('Page2');
	}
	public function tiga(){
		return view('Page3');
	}
}