<?php

namespace App\Http\Controllers;


/**
* for common function between manage and reception
*/
class CommonController extends Controller
{
	
	
	public function listGuest(){
		$data['title'] = "MANAGE GUEST";
		return view('default/listGuest', $data);
	}
	public function roomDeatail(){

	}
	public function userDetail(){

	}
	public function guestDetail(){

	}
	public function search(){

	}

}