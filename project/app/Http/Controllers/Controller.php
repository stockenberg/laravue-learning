<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function store(Request $request)
	{
		$user = new \App\User();

		$this->validate($request, [
			"name" => "required",
			"email" => "required|email",
			"password" => "required|min:6"
		]);

		$user->name = Input::get("name");
		$user->email = Input::get("email");
		$user->password = bcrypt(Input::get("password"));

		$user->save();

	}
}
