<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Users\MemberCreateRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use UserInterface;

class UsersController extends BaseController
{
    use Authenticatable;

    private UserInterface $user;

    public function __construct()
    {
    }

    public function signUpMember(MemberCreateRequest $request){

    }
}
