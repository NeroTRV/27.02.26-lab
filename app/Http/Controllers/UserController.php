<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show1($id)
		{
			$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];

            return $users[$id];
        }

		public function show2()
		{
			return view('test', ['var1' => '1', 'var2' => '2']);
		}

		public function show()
		{
			return view('post.show');
		}


}
