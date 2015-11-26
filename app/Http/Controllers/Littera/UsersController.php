<?php

namespace App\Http\Controllers\Littera;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    public function getIndex()
    {
        $users = $this->user->paginate(10);

        return view('littera.users.index', [
            'users' => $users,
        ]);
    }

    public function getCreate()
    {
        //
    }

    public function postCreate(Request $request)
    {
        //
    }

    public function getItem($id)
    {
        //
    }

    public function postItem(Request $request, $id)
    {
        //
    }

    public function getDelete($id)
    {
        //
    }

    public function getRestore($id)
    {
        //
    }
}
