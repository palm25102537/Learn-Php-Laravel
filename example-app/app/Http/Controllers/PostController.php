<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class PostController extends Controller
{
    public function index($id){
        return "it's working"." ".$id;
    }
    //
    public function contract(){
        return view('contract');
    }
}
