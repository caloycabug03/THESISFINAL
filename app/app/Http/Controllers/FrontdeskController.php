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
        return view('frontdesk.reservation');
    }

    public function rates()
    {
        //
        return view('frontdesk.rates');
    }

    public function guests()
    {
        //
        return view('frontdesk.guests');
    }
    public function roomtype()
    {
        //
        return view('frontdesk.roomtype');
    }

}
