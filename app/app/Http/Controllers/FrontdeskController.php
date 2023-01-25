<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class FrontdeskController extends Controller
{
    //
    public function reservation()
    {
        //
        return view('reservation');
    }

    public function rates()
    {
        //
        return view('rates');
    }

}
