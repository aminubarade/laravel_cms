<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    protected $users;

	public function __construct(User $users) {
		$this->users = $users;

		parent::__construct();

	}
    public function index() {

    	$users = $this->users->paginate(10);

    	return view('backend.users.index', compact('users'));
    }

    public function create() {



    }

    public function confirm ($id) {
    	//
    }
}
