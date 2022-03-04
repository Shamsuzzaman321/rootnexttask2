<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productlist
class productlist extends Controller
{
    //
function getData(){
	return productlist::all()
}    
}
