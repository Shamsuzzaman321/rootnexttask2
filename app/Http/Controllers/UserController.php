<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserController
class UserController extends Controller
{
    //
    function getData(){
	return User::all()
}    
}
