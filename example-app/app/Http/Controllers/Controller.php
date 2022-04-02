<?php

namespace App\Http\Controllers; 

use Illuminate\Foundation\Auth\Access\AuthorizesRequests; //import specific class or name space
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
