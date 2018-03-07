<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //

    protected $member;
    public function __construct(Member $Member)


	public function add(Request $request) {
		echo $request->username . "<br>";
		echo $request->email . "<br>";
		echo $request->password . "<br>";
	}

	public function add(request $request) {
		$newMember = {
			"username" => $request->username,
			"email" => $requet->email,
			"password" => $request->password;
		};

		$newMember = $this->member->create($newMember);


		if ($newMember != null) {
			var_dump($newMember);
		}else {
			echo "FAILED";
		}
	}

}