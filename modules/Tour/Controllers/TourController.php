<?php

namespace Modules\Tour\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index() {

        return view('Tour::frontend.index');
    }





    public function show() {
        return view('Tour::frontend.show');
    }
}
